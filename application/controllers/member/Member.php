<?php

class member extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('role')) {
            redirect(base_url());
        }
    }

    public function index()
    {
        $id = $this->session->userdata('uid');
        $data['member'] =  $this->db->get_where('tb_users', ['email' => $this->session->userdata('email')])->row();
        // $data['event'] = $this->db->get_where('tb_event', ['creator_id' => $this->session->userdata('email')])->result();

        $data['event'] = $this->db->query("SELECT tb_invoice.*,tb_pesanan.tiket_id,tb_pesanan.jumlah_tiket,tb_tiket.event_id,tb_event.judul_event,tb_event.tanggal_mulai,tb_event.tanggal_akhir,tb_event.lokasi,tb_event.deskripsi,tb_event.banner FROM tb_invoice
        INNER JOIN tb_pesanan ON tb_pesanan.kode_pesanan =tb_invoice.kode_pesanan
        INNER JOIN tb_tiket ON tb_tiket.id_tiket =tb_pesanan.tiket_id
        INNER JOIN tb_event ON tb_event.id_event =tb_tiket.event_id
        WHERE tb_invoice.id_user = '$id'
        ")->result_array();
        // echo "<pre>";
        // print_r($data['event']);
        // die;

        $this->load->view('member/index', $data);
    }

    public function gantiRole()
    {
        $email = $this->input->post('email');
        $role = $this->input->post('role');
        if ($role == 'member')
            $role = 'creator';
        else
            $role = 'member';
        $this->db->set('role', $role);
        $this->db->where('email', $email);
        $this->db->update('tb_users');
        $this->session->set_userdata('role', $role);

        // cek kalo member belum jadi creator
        $cek_creator =    $this->db->get_where('tb_creator', ['id_creator' => $this->session->userdata('email')])->row();
        if (!$cek_creator) {
            $data = [
                'id_creator' =>  $this->session->userdata('email'),
            ];
            $this->db->insert('tb_creator', $data);
        }
        echo $this->session->userdata('role');

        if ($this->session->userdata('role') == 'member') {

            redirect('member/dashboard');
        } else {
            redirect('creator/dashboard');
        }
    }


    public function addEvent()
    {
        if ($this->session->userdata('role') != 'creator') {
            redirect('member/dashboard');
        }
        $this->load->view('member/addEvent');
    }
    public function doAddEvent()
    {
        if ($this->session->userdata('role') != 'creator') {
            redirect('member/dashboard');
        }


        $event = [

            'creator_id' => $this->session->userdata('email'),
            'judul_event' => $this->input->post('judul_event'),
            'deskripsi' => $this->input->post('deskripsi_event'),
            'tanggal_mulai' => $this->input->post('tanggal_mulai'),
            'tanggal_akhir' => $this->input->post('tanggal_akhir'),
            'waktu_mulai' => $this->input->post('waktu_mulai'),
            'waktu_akhir' => $this->input->post('waktu_akhir'),
            'lokasi' => $this->input->post('lokasi_event'),
            'banner' => 'default.png'
        ];

        $this->db->insert('tb_event', $event);
        $event_id = $this->db->insert_id();
        $tiket = [
            'event_id' => $event_id,
            'nama' => $this->input->post('nama_tiket'),
            'kouta' => $this->input->post('kouta_tiket'),
            'harga' => $this->input->post('harga_tiket'),
            'deskripsi' => $this->input->post('deskripsi_tiket'),
            'tgl_mulai_jual' => $this->input->post('tgl_mulai_jual'),
            'tgl_akhir_jual' => $this->input->post('tgl_akhir_jual'),
        ];

        $this->db->insert('tb_tiket', $tiket);
        redirect($_SERVER['HTTP_REFERER']);
    }
}
