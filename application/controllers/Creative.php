<?php
defined('BASEPATH') OR exit('No direct script access allowed');


include 'Base_controller.php';

class Creative extends Base_controller {

	// function __construct() {
 //        parent::__construct();
 //        $this->load->model('Auth_model');
 //        if ($this->session->userdata('user_id') == "") {
 //            redirect('auth');
 //        }
 //    }

	public function index(){
		$this->load->view('dist/index.html');
	}

}

?>