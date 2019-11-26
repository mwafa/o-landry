<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {

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

        $this->db->select('pelanggan.*');
        $this->db->select('DATE(MIN(cucian.masuk)) as bulan_masuk', false);
        $this->db->join('cucian', 'cucian.pelanggan = pelanggan.id', 'left');
        
        $this->db->group_by('pelanggan.id');
        
        $pelanggan = $this->db->get('pelanggan');
        $data['pelanggan'] = $pelanggan->result();
        $data['total'] = $pelanggan->num_rows();
        

        $this->load->view('header', $data, FALSE);
        $this->load->view('menu', $data, FALSE);
        $this->load->view('kiri', $data, FALSE);
        $this->load->view('data/pelanggan', $data, FALSE);
        $this->load->view('footer', $data, FALSE);
        
    }

}

/* End of file Pelanggan.php */
