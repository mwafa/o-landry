<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Penghasilan extends CI_Controller {

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
		
		$data['total_pengguna'] = $this->db->get('pelanggan')->num_rows();
		$data['penghasilan_bulan_ini'] = $this->bulanIni()->penghasilan;
		$data['cucian_bulan_ini'] = $this->bulanIni()->cucian;
		$data['pengguna_bulan_ini'] = $this->bulanIni()->pengguna;


		$data['penghasilan_bulanan'] = $this->penghasilanBulanan();
		
        
        $this->load->view('header', $data, FALSE);
        $this->load->view('menu', $data, FALSE);
        $this->load->view('kiri', $data, FALSE);
        $this->load->view('data/penghasilan', $data, FALSE);
        $this->load->view('footer', $data, FALSE);
	}
	
	private function bulanIni()
	{
		$this->db->select('sum(cucian.jumlah * paket.harga) as penghasilan', false);
		$this->db->select('sum(cucian.jumlah) as cucian', false);
		$this->db->select('count( DISTINCT(cucian.pelanggan)) as pengguna', false);
		$this->db->join('paket', 'paket.id = cucian.paket', 'left');
		$this->db->where('MONTH(cucian.masuk)', "MONTH(NOW())", false);
		return $this->db->get('cucian')->row();
		
	}

	private function penghasilanBulanan()
	{
		$this->db->select('DATE(cucian.masuk) as bulan', false);
		$this->db->select('paket.nama as paket');
		$this->db->select('sum(cucian.jumlah * paket.harga) as penghasilan');
		$this->db->select('sum(cucian.jumlah) as cucian');

		$this->db->join('paket', 'paket.id = cucian.paket', 'left');
		
		$this->db->group_by('MONTH(cucian.masuk)', false);
		$this->db->group_by('paket.id');

		return $this->db->get('cucian')->result();
		
	}

}

/* End of file Penghasilan.php */
