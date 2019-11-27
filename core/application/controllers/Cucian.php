<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cucian extends CI_Controller {

    
	public function __construct()
	{
		parent::__construct();
		$this->isLogin();

		$this->load->model('user');

		$this->data = array();
        $this->data["me"] = $this->user->me();
        $this->data['old'] = false;
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

        $this->db->select('cucian.id, cucian.status, pelanggan.nama as pelanggan, paket.nama as paket, jumlah');
        $this->db->select('paket.harga as harga');
        $this->db->select('paket.harga * cucian.jumlah as bayar', false);
        
        $this->db->join('pelanggan', 'cucian.pelanggan = pelanggan.id', 'left');
        $this->db->join('paket', 'cucian.paket = paket.id', 'left');

        if(!$data['old'])
        {
            $this->db->where('cucian.status !=', "diambil");
        }else{
            $this->db->where('cucian.status', "diambil");
        }
        $this->db->order_by('status', 'desc');
        $data['cucian'] = $this->db->get('cucian')->result();
        
        $this->load->view('header', $data, FALSE);
        $this->load->view('menu', $data, FALSE);
        $this->load->view('kiri', $data, FALSE);
        $this->load->view('data/cucian', $data, FALSE);
        $this->load->view('footer', $data, FALSE);
    }

    public function old()
    {
        $this->data['old'] = true;
        $this->index();
    }

}

/* End of file Cucian.php */
