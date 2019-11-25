<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {

    
    public function __construct()
    {
        parent::__construct();
    }
    
    function me()
    {
        $username = $this->session->userdata("username");
        $query = $this->db->get_where("user", array(
            'username' => $username
        ));
        return $query->row();
    }

    function meUpdateAvatar($fileName)
    {
        $this->db->set('avatar', $fileName);
        $this->db->where('username', $this->session->userdata('username') );
        $this->db->update('user'); 
    }

    function meUpdateData($data){
        $username = $this->session->userdata("username");
        foreach($data as $key=>$value){
            $this->db->set($key, $value);
        }
        $this->db->where("username", $username);
        $this->db->update("user");
    }
}

/* End of file User.php */
