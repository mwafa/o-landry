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
		
		$data['paket'] = $this->db->get('paket')->result();
		
        
        $this->load->view('header', $data, FALSE);
        $this->load->view('menu', $data, FALSE);
        $this->load->view('kiri', $data, FALSE);
        $this->load->view('data/cucian_baru', $data, FALSE);
        $this->load->view('footer', $data, FALSE);
	}
	
	public function pelanggan()
	{
		$this->db->select('nama, hp, email');
		
		$result = $this->db->get('pelanggan')->result();
		
		echo json_encode($result);
	}

	public function insert()
	{
		
		$this->db->where('nama', $this->input->post('nama'));
		$this->db->where('hp', $this->input->post('hp'));
		$this->db->where('email', $this->input->post('email'));
		
		$db = $this->db->get('pelanggan');
		
		if($db->num_rows())
		{
			$pelangganID = $db->row()->id;
		}
		else
		{
		$this->db->insert('pelanggan', [
			"nama" => $this->input->post('nama'),
			"hp" => $this->input->post('hp'),
			"email" => $this->input->post('email'),
			]);
			
		$pelangganID = $this->db->insert_id();
		}
		
		$this->db->set('masuk', 'NOW()', false);
		
		$insertCucian = $this->db->insert('cucian', [
			'pelanggan' => $pelangganID,
			'jumlah' => $this->input->post('berat'),
			'paket' => $this->input->post('paket')
		]);

		$this->output->set_content_type('application/json')->set_output(json_encode($insertCucian));
	}

}

/* End of file Cucian_baru.php */
