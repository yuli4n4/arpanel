<?php if ( ! defined('BASEPATH')) exit ('No direct script access allowed');
require_once(APPPATH.'controllers/Auth.php');

class User extends Auth {
	
	public function __construct() {
		parent::__construct();
		
	}
	public function show_profile() {
		//$this-> edit_user($id);
		//print_r($this->ion_auth->user($id)->row());
		$this->_render_page('show_profile');
	}
}
