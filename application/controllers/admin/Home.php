 <?php

    class home extends CI_Controller
    {

        function __construct()
        {
            parent::__construct();

            if (!$this->session->userdata('role')) {
                redirect(base_url());
            }

            $this->load->model('auth_model');
            $this->load->model('creator_model');
        }

        public function index()
        {

            $this->load->view('admin/index');
        }

        public function users()
        {

            $data['users']  =   $this->db->query("SELECT * FROM tb_users")->result();

            $this->load->view('admin/users', $data);
        }
        public function creator($any = null)
        {
            if (!$any) :
                $data['creator'] =  $this->creator_model->getCreator($any)->result();

                $this->load->view('admin/creator', $data);
            else :

                $id = $this->input->post('id');

                $data['creator'] =  $this->creator_model->getCreator($id)->row_array();

                $this->load->view('admin/creator-detail', $data);

            endif;
        }
        public function transaksi()
        {

            $data['invoice'] =     $this->db->query("SELECT *, tb_pesanan.nama as nm FROM tb_invoice
            INNER JOIN tb_pesanan ON  tb_pesanan.kode_pesanan = tb_invoice.kode_pesanan
            INNER JOIN tb_tiket ON  tb_tiket.id_tiket = tb_pesanan.tiket_id
            INNER JOIN tb_event ON  tb_event.id_event = tb_tiket.event_id
             ")->result();

            $this->load->view('admin/transaksi', $data);
        }
        public function invoice($id)
        {
            $data =     $this->db->query("SELECT tb_invoice.*,tb_pesanan.kode_pesanan,tb_pesanan.nama,tb_pesanan.tanggal_pesan,tb_pesanan.jumlah_tiket,tb_tiket.nama as nama_tiket FROM tb_invoice
            INNER JOIN tb_pesanan ON  tb_pesanan.kode_pesanan = tb_invoice.kode_pesanan
            INNER JOIN tb_tiket ON  tb_tiket.id_tiket = tb_pesanan.tiket_id
             WHERE tb_invoice.kode_pesanan='$id'
            ")->row();
            echo json_encode($data);
        }
        public function konfirmasiID()
        {

            $id = $this->input->post('id');

            $this->db->set('status_bayar	', '1');
            $this->db->where('kode_pesanan', $id);
            $this->db->update('tb_invoice');

            $result = [];
            $count =     $this->input->post('count');
            for ($i = 0; $i < $count; $i++) {
                $result[] = [
                    'kode_pesanan' => $id,
                    'kode_tiket' => '#' . $i . $this->input->post('id') . date('s'),
                ];
            }
            $this->db->insert_batch('tb_e_tiket', $result);
            redirect('event/e_tiket/' . $id);
        }
    }
