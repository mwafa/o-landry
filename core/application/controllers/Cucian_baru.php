<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cucian_baru extends CI_Controller {

    
	public function __construct()
	{
		parent::__construct();
		$this->isLogin();

		$this->load->model('user');

		$this->data = array();
        $this->data["me"] = $this->user->me();
	}

	function isLogin()
	{
		if(!strlen($this->session->userdata("username")))
		{	
			redirect('login','refresh');
			
		}
    }

    public function index()
    {
        $data = $this->data;
        
        $this->load->view('header', $data, FALSE);
        $this->load->view('menu', $data, FALSE);
        $this->load->view('kiri', $data, FALSE);
        $this->load->view('data/cucian_baru', $data, FALSE);
        $this->load->view('footer', $data, FALSE);
    }


}

/* End of file Cucian_baru.php */
