<?php


class auth_model extends CI_Model
{



    function autentikasi($email, $password)
    {
        $result = $this->db->query("SELECT * FROM tb_users WHERE email='$email' AND password='$password' LIMIT 1");
        return $result;
    }


    public function logout()
    {
        session_destroy();
        $this->session->sess_destroy();
    }
}
