<?php
defined('BASEPATH') OR exit('No direct script access allowed');


include 'Base_controller.php';

class Query extends Base_controller {

	function __construct() {
        parent::__construct();
        $this->load->model('Auth_model');

        if ($this->session->userdata('user_id') == "") {
            redirect('auth');
        }
    }


    public function index(){
    	 $data['title'] = "Service - Creativewebdesign";

    	 $data_all = ['status'=>'Y'];

    	 $params = ['order'=>[ 'type'=>'desc','orderby'=>'id'],];
    	 $data['querys'] = $this->Auth_model->_get('askquery', $data_all, $params);

    	 $this->load->view('querylist_view', $data);
    }


    public function fetchqry(){
    	$this->output->set_content_type('application json');

    	 $id = $this->input->post('id');
    	 $condition = ['askquery_id'=>$id ,'status'=>'Y'];
    	 $params = ['order'=>[ 'type'=>'desc','orderby'=>'id'],];
    	 $result = $this->Auth_model->_get('askmsg', $condition, $params);
 		 
 
    	if($result){
	        $this->output->set_output(json_encode(['result' => 1, 'data'=>$result]));
	        return FALSE;  
	    }else{
	        $this->output->set_output(json_encode(['result' => 2]));
	        return FALSE;
	    }
    }

    




}  