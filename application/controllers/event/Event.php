<?php

class event extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }


    public function index()
    {
        $data['event'] = $this->db->get('tb_event')->result_array();
        $this->load->view('event/index', $data);
    }


    public function eventDetail($id = null)
    {

        $data['event'] = $this->db->get_where('tb_event', ['id_event' => $id])->row();

        $this->load->view('event/event-detail', $data);
    }

    public function eventOrder($id = null)
    {
        $data['event'] = $this->db->query("SELECT * FROM tb_tiket INNER JOIN  tb_event ON tb_event.id_event = tb_tiket.event_id  WHERE event_id = '$id' ")->row();
        $this->load->view('event/event-order', $data);
    }

    public function eventcheckout()
    {

        if (!$this->session->userdata('role')) {
            $this->session->set_flashdata('no', 'GAGAL !');
            redirect($_SERVER['HTTP_REFERER']);
        }

        $data['bank'] = $this->db->get('tb_bank')->result();
        $data['event'] = [
            'tiket_id' => $this->input->post('id'),
            'name' => $this->input->post('name'),
            'price' => $this->input->post('price'),
            'qty' => $this->input->post('qty'),
            'total' => $this->input->post('total'),
        ];
        $this->load->view('event/event-checkout', $data);
    }

    public function doInvoice()
    {

        $data = [
            'kode_pesanan' => date('His'),
            'tanggal_pesan' => date('Y-m-d H:i:s'),
            'tiket_id' => $this->input->post('tiket_id'),
            'nama' => $this->input->post('nama'),
            'no_hp' => $this->input->post('no_hp'),
            'email' => $this->input->post('email'),
            'jumlah_tiket' => $this->input->post('jumlah_tiket'),
            'total_bayar' => $this->input->post('total_bayar'),
            'metode_bayar' => $this->input->post('metode_bayar'),
        ];
        $this->db->insert('tb_pesanan', $data);

        $tb_invoice = [
            'kode_pesanan' => date('His'),
            'id_user' => $this->session->userdata('uid'),
            'tagihan' => $this->input->post('total_bayar'),
        ];
        $this->db->insert('tb_invoice', $tb_invoice);


        redirect('event/invoice/' .  date('His'));
    }

    public function kirim_bukti()
    {
        $file_name = str_replace('.', '', $this->input->post('kode'));
        $config['upload_path']     = FCPATH . '/assets/images/bukti_bayar';
        $config['allowed_types']        = 'gif|jpg|jpeg|png';
        $config['file_name']            = $file_name;
        $config['overwrite']            = true;

        $this->load->library('upload', $config);


        if (!$this->upload->do_upload('berkas')) {
            redirect($_SERVER['HTTP_REFERER']);
        } else {
            $upload_data = $this->upload->data();
            $foto = $upload_data['file_name'];
        }

        $this->db->set('bukti_bayar', $foto);
        $this->db->where('kode_pesanan', $this->input->post('kode'));
        $this->db->update('tb_invoice');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function eventInvoice($id = null)
    {


        $data['invoice'] = $this->db->query("SELECT * FROM tb_pesanan
         INNER JOIN  tb_bank ON tb_bank.id_bank = tb_pesanan.metode_bayar 
         INNER JOIN  tb_tiket ON tb_tiket.id_tiket = tb_pesanan.tiket_id 
         INNER JOIN  tb_event ON tb_event.id_event = tb_tiket.event_id 
         INNER JOIN  tb_invoice ON tb_invoice.kode_pesanan = tb_pesanan.kode_pesanan 
         WHERE tb_pesanan.kode_pesanan = '$id' ")->row();
        $this->load->view('event/event-invoice', $data);
    }

    public function e_tiket($id = null)
    {
        $data['invoice'] = $this->db->query("SELECT * FROM tb_e_tiket
        INNER JOIN  tb_pesanan ON tb_pesanan.kode_pesanan = tb_e_tiket.kode_pesanan 
        INNER JOIN  tb_tiket ON tb_tiket.id_tiket = tb_pesanan.tiket_id 
        INNER JOIN  tb_event ON tb_event.id_event = tb_tiket.event_id 
        WHERE tb_e_tiket.kode_pesanan = '$id' ")->result_array();
        $this->load->view('event/event-tiket', $data);
    }
}
