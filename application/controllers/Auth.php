<?php

class auth extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }




    public function login()
    {
        $this->load->model('auth_model');
        $this->load->library('form_validation');

        $email = $this->input->post('email');
        $password = md5($this->input->post('password'));

        $auth = $this->auth_model->autentikasi($email, $password);
        if ($auth->num_rows() > 0) {
            $user = $auth->row_array();
            if ($user['role'] == 'admin') {
                $this->session->set_userdata('uid', $user['id_users']);
                $this->session->set_userdata('role', $user['role']);
                $this->session->set_userdata('email', $user['email']);
                redirect('admin/dashboard');
            } elseif ($user['role'] == 'creator') {
                $this->session->set_userdata('uid', $user['id_users']);
                $this->session->set_userdata('role', $user['role']);
                $this->session->set_userdata('email', $user['email']);
                redirect('creator/dashboard');
            } else {
                $this->session->set_userdata('uid', $user['id_users']);
                $this->session->set_userdata('role', $user['role']);
                $this->session->set_userdata('email', $user['email']);
                // redirect('member/dashboard');
                redirect($_SERVER['HTTP_REFERER']);
            }
        }
        $this->session->set_flashdata('no', 'GAGAL !');
        redirect($_SERVER['HTTP_REFERER']);

        // $this->load->view('auth/login');
    }



    public function newmember()
    {
        $this->load->view('auth/newmember');
    }
    public function c_member()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'password' => md5($this->input->post('password')),
            'no_hp' => $this->input->post('no_hp'),
            // $photo = $this->input->post('foto')
        ];

        $this->db->insert('tb_users', $data);

        // redirect('auth/login');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function logOff()
    {
        $this->load->model('auth_model');
        $this->auth_model->logout();
        redirect($_SERVER['HTTP_REFERER']);
    }
}
