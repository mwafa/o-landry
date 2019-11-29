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
        $this->db->select('cucian.masuk as tgl_masuk');
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

    public function selesai($id)
    {
        $this->db->where('cucian.id', $id);
        
        $this->db->set('cucian.selesai', 'NOW()', false);
        $update = $this->db->update('cucian', [
            'status' => 'siap'
        ]);

        if($update)
        {
            $this->data['alert'] = "Cucian dengan kode <b>$id</b> selesai diproses";
            $this->sendMail($id);
        }
        $this->index();
        
    }

    public function diambil($id)
    {
        $this->db->where('cucian.id', $id);
        
        $this->db->set('cucian.keluar', 'NOW()', false);
        $update = $this->db->update('cucian', [
            'status' => 'diambil'
        ]);

        if($update)
        {
            $this->data['alert'] = "Cucian dengan kode <b>$id</b> telah diambil pelanggan";
            $this->send_email($id);
        }
        $this->index();
    }

    public function send_email($id)
    {

		$this->db->select('cucian.id as kode');
		$this->db->select('pelanggan.nama as nama');
		$this->db->select('pelanggan.email as email');
		$this->db->select('cucian.masuk as tgl_masuk');
		$this->db->select('cucian.status');
		$this->db->select('paket.nama as paket');
		$this->db->select('paket.harga as harga');
		$this->db->select('cucian.jumlah as berat');
		$this->db->select('cucian.jumlah * paket.harga as bayar', false);
        
        $this->db->join('cucian', 'cucian.pelanggan = pelanggan.id', 'left');
        $this->db->join('paket', 'cucian.paket = paket.id', 'left');
        
        $this->db->where('cucian.id', $id);
        
        $cucian = $this->db->get('pelanggan')->row();
        
        $message = $this->load->view('data/email', [
            'cucian' => $cucian
        ], true);
        
        
        $this->load->library('email');
        $this->email->initialize([
            "mailtype" => "html"
        ]);

        
        $this->email->from('aku@mwafa.net', 'Admin O-Laundry');
        $this->email->to($cucian->email);
        
        $this->email->subject('Update Status Cucian Kode: '.$id);
        $this->email->message('Status Cucian Telah di update:');
        
        $this->email->send($message);
        
    }
}

/* End of file Cucian.php */
