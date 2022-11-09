<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Client extends CI_Controller
{


	public function index()
	{
		$data['event'] = $this->db->get('tb_event')->result_array();
		$this->load->view('event/index', $data);
	}
}
