<?php


class Payment extends CI_Controller
{


    function __construct()
    {
        parent::__construct();
        $params = array('server_key' => 'Mid-server-cs0YU479oUKz5FEdk1t4jcWt', 'production' => false);
        $this->load->library('veritrans');
        $this->veritrans->config($params);
        $this->load->helper('url');
        // Merchant ID	G994183603
        // Client Key	 Mid-client-jZERJH_DhJJFIYh6
        // Server Key	 Mid-server-cs0YU479oUKz5FEdk1t4jcWt

    }


    public function index($res)
    {

        echo $res->getMessage();
    }
}
