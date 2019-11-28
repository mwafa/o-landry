<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

    public function cari()
    {
        $q = $this->input->get('q');

        $this->db->select('cucian.id, cucian.status, pelanggan.nama as pelanggan, paket.nama as paket, jumlah');
        $this->db->select('paket.harga as harga');
        $this->db->select('paket.harga * cucian.jumlah as bayar', false);
        $this->db->select('cucian.masuk as tanggal_masuk');
        
        $this->db->join('pelanggan', 'cucian.pelanggan = pelanggan.id', 'left');
        $this->db->join('paket', 'cucian.paket = paket.id', 'left');

        $this->db->where('cucian.status !=', "diambil");
        $this->db->group_start()
            ->where('cucian.id', $q)
            ->or_like('pelanggan.nama', $q)
            ->group_end();
        
        

        $this->db->order_by('status', 'desc');
        $result = $this->db->get('cucian')->result();

        $this->output->set_content_type('application/json')
        ->set_output(json_encode($result));

        
    }

    public function paket()
    {
        $result = $this->db->get('paket')->result();
        $this->output->set_content_type('application/json')->set_output(json_encode($result));
    }

}

/* End of file Api.php */
