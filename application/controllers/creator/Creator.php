<?php

class creator extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('creator_model');
        if (!$this->session->userdata('role')) {
            redirect(base_url());
        }
    }

    public function index()
    {
        $data['creator'] =  $this->creator_model->getCreator($this->session->userdata('email'))->row();


        $data['event'] = $this->db->get_where('tb_event', ['creator_id' => $this->session->userdata('email')])->result();

        $this->load->view('creator/index', $data);
    }

    public function event()
    {


        $data['creator'] =  $this->creator_model->getCreator($this->session->userdata('email'))->row();
        $data['event'] = $this->db->get_where('tb_event', ['creator_id' => $this->session->userdata('email')])->result_array();

        $this->load->view('creator/event', $data);
    }
    public function eventDetail($id = null)
    {
        $data['creator'] =  $this->creator_model->getCreator($this->session->userdata('email'))->row();
        $data['event'] = $this->db->get_where('tb_event', ['creator_id' => $this->session->userdata('email')])->result();
        $this->load->view('creator/detailEvent', $data);
    }

    public function addEvent()
    {
        if ($this->session->userdata('role') != 'creator') {
            redirect('member/dashboard');
        }
        $this->load->view('creator/addEvent');
    }
    public function doAddEvent()
    {

        if ($this->session->userdata('role') != 'creator') {
            redirect('member/dashboard');
        }

        $file_name = str_replace('.', '', $this->session->userdata('email'));
        $config['upload_path']     = FCPATH . '/assets/images/event';
        $config['allowed_types']        = 'gif|jpg|jpeg|png';
        $config['file_name']            = $file_name;
        $config['overwrite']            = true;

        $this->load->library('upload', $config);


        if (!$this->upload->do_upload('berkas')) {
            redirect('creator/addEvent');
        } else {
            $upload_data = $this->upload->data();
            $foto = $upload_data['file_name'];
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
            'banner' => $foto
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

        $this->load->view('creator/event');
    }
}
