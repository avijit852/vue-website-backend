<?php
defined('BASEPATH') OR exit('No direct script access allowed');


include 'Base_controller.php';

class Contact extends Base_controller {

	function __construct() {
        parent::__construct();
        $this->load->model('Auth_model');
        if ($this->session->userdata('user_id') == "") {
            redirect('auth');
        }
    }


    public function index(){
    	$data['title'] = "Contact - Creativewebdesign";
    	$status = [
            'status'=>'Y'
        ];

    	$data['contactList'] = $this->Auth_model->getContact('contactdetails', $status);

    	$this->load->view('contactlist_view', $data);
    }



    //To Fetch one email all element...
    public function fetchOneEmailData(){
    	$this->output->set_content_type('application json');


    	$email = $this->input->post('email');

    	$condition = ['cd_email'=>$email ,'status'=>'Y'];
    	$params = ['order'=>[ 'type'=>'desc','orderby'=>'id'],];
    	$result = $this->Auth_model->_get('contactdetails', $condition, $params);

    	if($result){
	        $this->output->set_output(json_encode(['result' => 1, 'data'=>$result]));
	        return FALSE;  
	    }else{
	        $this->output->set_output(json_encode(['result' => 2]));
	        return FALSE;
	    }
    }

}


?>