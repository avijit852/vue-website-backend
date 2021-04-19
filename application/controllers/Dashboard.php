<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include 'Base_controller.php';

class Dashboard extends CI_Controller {

    function __construct() {
        parent::__construct();
        // $this->load->model('Auth_model');

        // if($this->session->userdata('user_id') == ""){
        //     redirect('login');
        // }
    }
    
     function index(){
    	$data['title'] = 'Creativewebdesign - Dashboard';
    	$this->load->view('dashboard_view', $data);
    }
    
 }

 ?>