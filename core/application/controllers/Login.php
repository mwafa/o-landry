<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }
    
    
    
    public function index()
    {
        $this->isLogin();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'username', 'trim|required|min_length[5]|max_length[12]');
        $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[8]');


        $username   = $this->input->post("username");
        $password   = $this->input->post("password");

        $username   = strtolower($username);
        $password   = md5($password);
        
        $user = $this->db->get_where("user",array(
            'username' => $username,
            "password" => $password
        ));

        if($user->num_rows() && $this->form_validation->run()){
            // var_dump($user->row());
            $this->session->set_userdata("username", $username);
            
            redirect('/','refresh');
            
        }else{
            $data = array();
            if(strlen($username)){
                $data['error'] = "Username/ Password salah.";
            }
            $this->load->view('login', $data);
        }
        
    }

    public function add()
    {
        $this->isLogin();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[12]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required|matches[password]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');

        if($this->form_validation->run()){

            $username = $this->input->post("username");
            $email = $this->input->post("email");
            $password = $this->input->post("password");
            $password = md5($password);
            $username = strtolower($username);
            $email  = strtolower($email);
    
            $data = array(
                'username' => $username,
                'email' => $email,
                'password' => $password
            );

            $this->db->where('username', $username);
            $this->db->or_where("email", $email);

            $query = $this->db->get("user");

            if($query->num_rows()){
                $data['error'] = "username sudah ada";
                $this->load->view('daftar', $data, FALSE);
                
                // $this->db->insert('user', $data);
            }else{
                $this->db->insert('user', $data);
                redirect('login','refresh');
            }
    
        }else{
            // echo "error";
            $this->load->view('daftar');
            
            
        }
    }
    
    function isLogin(){
        if($this->session->userdata("username")){
            redirect('/','refresh');   
        }
    }

    function logout(){
        $this->session->sess_destroy();
        
        redirect('login','refresh');
        
    }
}

/* End of file Login.php */
