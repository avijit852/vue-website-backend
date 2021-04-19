<?php 

defined('BASEPATH') OR exit('No direct script access allowed');


include 'Base_controller.php';

class Metadetails extends Base_controller {

	function __construct() {
        parent::__construct();
        $this->load->model('Auth_model');
        if ($this->session->userdata('user_id') == "") {
            redirect('auth');
        }
    }


    public function index(){
    	$this->output->set_content_type('application json');

        $this->form_validation->set_rules('meta_title', 'Meta Title', 'trim|required');
        $this->form_validation->set_rules('meta_keyword', 'Meta Keyword', 'trim|required');
        $this->form_validation->set_rules('meta_description', 'Meta Description', 'trim|required');

        if ($this->form_validation->run() == FALSE) 
        {
            $this->output->set_output(json_encode(['result' => 0, 'error' => $this->form_validation->error_array()]));
            return FALSE;
        }

        $getData = [
        	"type_id"=>$this->input->post('meta_hidden_id')
        ];

        $getMeta =  $this->Auth_model->_get('metadetails',$getData);

        if(!empty($getMeta)){
        	$this->output->set_output(json_encode(['result' => 3]));
            return FALSE; 
        }

        $data = [
            'type'=>$this->input->post('type'),
            'type_id'=>$this->input->post('meta_hidden_id'),
            'meta_title'=>$this->input->post('meta_title'),
            'meta_keyword' => $this->input->post('meta_keyword'),
            'meta_description'=>$this->input->post('meta_title'),
            'created_at'=>date('Y-m-d H:i:S'),
            'updated_at'=>date('Y-m-d H:i:S'),
        ];


        $result =  $this->Auth_model->_set_insert('metadetails',$data);

        if($result){
            $this->output->set_output(json_encode(['result' => 1]));
            return FALSE;  
        }else{
            $this->output->set_output(json_encode(['result' => 2]));
            return FALSE;
        }
    }
}