<?php if ( ! defined('BASEPATH')) exit ('No direct script access allowed');
require_once(APPPATH.'controllers/Auth.php');

class Upload extends Auth {
	public function __construct() {
		parent::__construct();
	}
	
	public function index()
	{
		{
		
			$this->_render_page('upload_form', array('status' => ' '));
		}
	}
	public function img_upload($file=false) {
		
		
		
		if ($this->ion_auth->logged_in())
		{
			if ($file) {
				$this->data['photo']='default.png';
				
				$this->ion_auth->update($this->ion_auth->get_user_id(), $this->data);
				redirect('user/show_profile/'.$this->ion_auth->get_user_id());
			}
			$user = $this->ion_auth->user($this->ion_auth->get_user_id())->row();
			$config = array ( 'upload_path' => './images',
			'allowed_types' => 'jpg|png',
			'file_name' => 'profile-'.$user->id . '.png',
			'max_size' => 1000,
			'max_width' => 1024,
			'max_height' => 768,
			'overwrite' => TRUE,
		);
		
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		
		if ( ! $this->upload->do_upload('img')) {
			//$status = array ('message' => $this->upload->display_errors() );
			//$this->_render_page('show_profile', $status);
			$this->session->set_flashdata('message', '<small class="text-warning">'.	$this->upload->display_errors()	.'</small>');
			redirect('user/show_profile/'.$this->ion_auth->get_user_id()); 
			//$this->upload->display_errors()
		}
		else {
			$this->data['photo']=$config['file_name'];
			if($this->ion_auth->update($this->ion_auth->get_user_id(), $this->data)) {
				redirect('user/show_profile/'.$this->ion_auth->get_user_id()); 
			}
			else { echo 'gagal'; }
		}
		}
		 
	}
}
