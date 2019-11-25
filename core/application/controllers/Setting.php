<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	
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
		$this->load->helper("form");
		$data = $this->data;

		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[12]');
		
		
		if($this->form_validation->run()){
			$data['error'] = "Data telah di update.";
			$data['alert'] = "success";

			$email = $this->input->post('email');
			$email = strtolower($email);

			$username = $this->input->post('username');
			$username = strtolower($username);

			$this->user->meUpdateData(array(
				'email' => $email,
				'username' => $username
			));
			$this->session->set_userdata('username', $username);
			$data['me'] = $this->user->me();
		}else{
			if(strlen($this->input->post('email'))){
				$data['error'] = "\n";
			}
		}

		$this->load->view('header', $data, FALSE);
		$this->load->view('kiri', $data, FALSE);
		$this->load->view('menu', $data, FALSE);
		$this->load->view('setting/setting', $data, FALSE);
		$this->load->view('footer', $data, FALSE);
		
	}
	
	
	public function password()
	{
		
		$this->load->helper("form");
		$data = $this->data;

		$this->load->library('form_validation');
		
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
        $this->form_validation->set_rules('newpassword', 'New-Password', 'trim|required|min_length[8]');
        $this->form_validation->set_rules('newpasswordcf', 'New-Password Confirmation', 'trim|required|matches[newpassword]');
		
		if($this->form_validation->run()){
			$data['error'] = "Data telah di update.";
			$data['alert'] = "success";

			$password = $this->input->post('password');
			$password = md5($password);

			if($this->data['me']->password == $password)
			{
				$newPassword = $this->input->post("password");
				$this->user->meUpdateData(array(
					'password' => md5($newPassword)
				));
				$data['me'] = $this->user->me();
			}
			else
			{
				$data['error'] = "Password Salah.";
				$data['alert'] = "danger";
			}

		}

		$this->load->view('header', $data, FALSE);
		$this->load->view('kiri', $data, FALSE);
		$this->load->view('menu', $data, FALSE);
		
		$this->load->view('setting/password', $data);
		// $this->load->view('kanan');
		// $this->("hello");
		$this->load->view('footer', $data, FALSE);
	}

	function do_upload()
	{
		$data = $this->data;
		$config['upload_path']          = './avatar/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 2048;
		$config['file_name']			= $this->session->userdata("username"). time();
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		$this->load->library('upload', $config);
		$this->load->helper("form");

		if ( ! $this->upload->do_upload('userfile'))
		{
				$data['error']	= $this->upload->display_errors();
		}
		else
		{
			$data['upload_data'] 	= $this->upload->data();
			
			$this->user->meUpdateAvatar($data['upload_data']['file_name']);
			$this->tumb($data['upload_data']['full_path'],100);
			if(is_file($config['upload_path'].$data['me']->avatar)){
				unlink($config['upload_path'].$data['me']->avatar);
			}

			$data['error'] 			= "Upload suksess!!";
			$data['alert']			= "success";
			$data['me']				= $this->user->me();
			
		}

		$this->load->view('header', $data, FALSE);
		$this->load->view('kiri', $data, FALSE);
		$this->load->view('menu', $data, FALSE);
		$this->load->view('setting/avatar', $data, FALSE);
		$this->load->view('footer', $data, FALSE);
			
	}

	private function tumb($path, $s)
	{
	$info = getimagesize($path);
	$size = array($info[0],$info[1]);
	
	if($info['mime']== 'image/jpeg'){
		$src = imagecreatefromjpeg($path);
	}elseif($info['mime']== "image/png"){
		$src = imagecreatefrompng($path);
	}
	$thumb = imagecreatetruecolor($s,$s);

	if($size[0]>=$size[1]){
		$k = ($size[0]-$size[1])/2.;
		$hasil = imagecopyresampled($thumb,$src,0,0,0+$k,0,$s,$s,$size[1],$size[1]);
	}else{
		$k = ($size[1]-$size[0])/2.;
		$hasil = imagecopyresampled($thumb,$src,0,0,0,0+$k,$s,$s,$size[0],$size[0]);
	}
// print_r($size); // print $k;
	return imagepng($thumb, $path);
	}
}
