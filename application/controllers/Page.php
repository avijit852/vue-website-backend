<?php 

defined('BASEPATH') OR exit('No direct script access allowed');


include 'Base_controller.php';

class Page extends Base_controller {

	function __construct() {
        parent::__construct();
        $this->load->model('Auth_model');
        if ($this->session->userdata('user_id') == "") {
            redirect('auth');
        }
    }


    public function index(){
    	$data['title'] = "Page - Creativewebdesign";

    	$condition = ['status'=>'Y'];
    	$params = ['order'=>[ 'type'=>'desc','orderby'=>'id'],];
        $data['pages'] = $this->Auth_model->_get('pages', $condition, $params);

        $this->load->view('page_view', $data);
    }


    public function addpage(){

    	$this->output->set_content_type('application json');

        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('meta_title', 'Meta Title', 'trim|required');
        $this->form_validation->set_rules('meta_keyword', 'Meta Keyeord', 'trim|required');
        $this->form_validation->set_rules('meta_description', 'Meta Description', 'trim|required');

        if ($this->form_validation->run() == FALSE) 
        {
            $this->output->set_output(json_encode(['result' => 0, 'error' => $this->form_validation->error_array()]));
            return FALSE;
        }

        $str = $this->input->post('meta_title');  
        $a = rand(111,999);
        $str = preg_replace('/\s+/', $a.'-_*&', $str);  


        $data = [
        	"name"=> $this->input->post('name'),
        	"page_slug"=> $str,
        	"meta_title"=>$this->input->post('meta_title'),
        	"meta_keyword"=>$this->input->post("meta_keyword"),
        	"meta_description"=>$this->input->post("meta_description"),
        	"created_at"=>date('Y-m-d H:i:s'),
        	"updated_at"=>date('Y-m-d H:i:s')
        ];

        $add_page = $this->Auth_model->_set_insert('pages',$data);

        if($add_page){
        	$this->output->set_output(json_encode(['result' => 1]));
            return FALSE; 
        }else{
        	$this->output->set_output(json_encode(['result' => 2]));
            return FALSE;
        }

    }



    // To Fetch Single id all details in page ##########################################
    public function get_single_page($id){
        $this->output->set_content_type('application json');

        $data_arr = [ 'id'=>$id ];
        $result= $this->Auth_model->_get('pages', $data_arr);

        if($result){
            $this->output->set_output(json_encode(['result' => 1, 'data'=>$result]));
            return FALSE;  
        }else{
            $this->output->set_output(json_encode(['result' => 1]));
            return FALSE;  
        }
    }

    // To Update page ##################################################################
    public function updatePage(){

        $this->output->set_content_type('application json');

        $this->form_validation->set_rules('e_name', 'Page Name', 'trim|required');
        $this->form_validation->set_rules('e_meta_title', 'Page Meta Title', 'trim|required');
        $this->form_validation->set_rules('e_meta_keyword', 'Page Meta Key', 'trim|required');
        $this->form_validation->set_rules('e_meta_description', 'Page Meta Description', 'trim|required');

        if ($this->form_validation->run() == FALSE) 
        {
            $this->output->set_output(json_encode(['result' => 0, 'error' => $this->form_validation->error_array()]));
            return FALSE;
        }


        $str = $this->input->post('e_meta_title');  
        $a = rand(111,999);
        $str = preg_replace('/\s+/', $a.'-_*&', $str);  

        $data = [
            'name'=>$this->input->post('e_name'),
            'page_slug'=>$str,
            'meta_title'=>$this->input->post('e_meta_title'),
            'meta_keyword'=>$this->input->post('e_meta_keyword'),
            'meta_description'=>$this->input->post('e_meta_description'),
            'updated_at'=>date('Y-m-d H:i:S')
        ];

        $condition = [
            'id'=>$this->input->post('edit_hidden_id')
        ];

        $result =  $this->Auth_model->_set_update('pages',$data,$condition);

        if($result){
            $this->output->set_output(json_encode(['result' => 1]));
            return FALSE;  
        }else{
            $this->output->set_output(json_encode(['result' => 2]));
            return FALSE;
        }
    }


    // To Delete page #####################################################

     public function  deletepage(){
        $this->output->set_content_type('application json');

        $data = ['status'=>'N'];
        $condition = ['id'=>$this->input->post('delete_hidden_id')];

        $result =  $this->Auth_model->_set_update('pages',$data,$condition);

        if($result){
            $this->output->set_output(json_encode(['result' => 1]));
            return FALSE;  
        }else{
            $this->output->set_output(json_encode(['result' => 1]));
            return FALSE;  
        }
    }













/*####################For use Page Details page all function ###################################################*/

    public function pagedetails(){
    	$data['title'] = "Page Details - Creativewebdesign";

    	$condition = ['status'=>'Y'];
    	$params = ['order'=>[ 'type'=>'desc','orderby'=>'id'],];
        $data['pages'] = $this->Auth_model->_get('pages', $condition, $params);

        $data['getPageDetails'] = $this->Auth_model->get_pageDetails();

        // echo '<pre>';
        // print_r($data['getPageDetails']);die;

    	$this->load->view('pageDetails_view', $data);
    }


    public function addPageDetails(){
    	$this->output->set_content_type('application json');


    	$this->form_validation->set_rules('pageid', 'Select Your Page Name', 'trim|required');
        $this->form_validation->set_rules('heading', 'Heading', 'trim|required');
        $this->form_validation->set_rules('tagline', 'Tagline', 'trim|required');
       
		if (empty($_FILES['page_image']['name']))
		{
		     $this->form_validation->set_rules('page_image', 'Page Image', 'required');
		}

		if (empty($_FILES['page_banner']['name']))
		{
		     $this->form_validation->set_rules('page_banner', 'Page Banner', 'required');
		}

        $this->form_validation->set_rules('short_description', 'Short Description', 'trim|required');
        $this->form_validation->set_rules('description', 'Description', 'trim|required');
        

        if ($this->form_validation->run() == FALSE) 
        {
            $this->output->set_output(json_encode(['result' => 0, 'error' => $this->form_validation->error_array()]));
            return FALSE;
        }



        $page_image = '';
        $page_banner = '';

        if ($_FILES["page_image"]["name"] != "") {
            $string = str_replace(' ', '-', basename($_FILES["page_image"]["name"]));
            $picName = preg_replace('/[^a-zA-Z0-9_.]/', '', $string);

            $page_image = time() . "_" . rand(0, 99) . "_" . $picName;
            $path = "./uploads/pages/" . $page_image;
            $config['allowed_types'] = 'jpeg|JPEG|jpg|JPEG|png|PNG|ai|AI|psd|PSD';
            $config['source_image'] = $path;
            $config['remove_spaces'] = TRUE;
            $config['maintain_ratio'] = TRUE;
            $config['max_size'] = '400000';
            $config['max_height'] = '768';
            $config['max_width'] = '1024';
            $config['source_image'] = $path;
            $this->load->library('upload', $config);
            $this->load->library('image_lib', $config);

            $sourcePic = $_FILES["page_image"]["tmp_name"];
            move_uploaded_file($sourcePic, $path);
        }

        if ($_FILES["page_banner"]["name"] != "") {
            $string = str_replace(' ', '-', basename($_FILES["page_banner"]["name"]));
            $picName = preg_replace('/[^a-zA-Z0-9_.]/', '', $string);

            $page_banner = time() . "_" . rand(0, 99) . "_" . $picName;
            $path = "./uploads/pages/" . $page_banner;
            $config['allowed_types'] = 'jpeg|JPEG|jpg|JPEG|png|PNG|ai|AI|psd|PSD';
            $config['source_image'] = $path;
            $config['remove_spaces'] = TRUE;
            $config['maintain_ratio'] = TRUE;
            $config['max_size'] = '400000';
            $config['max_height'] = '768';
            $config['max_width'] = '1024';
            $config['source_image'] = $path;
            $this->load->library('upload', $config);
            $this->load->library('image_lib', $config);

            $sourcePic = $_FILES["page_banner"]["tmp_name"];
            move_uploaded_file($sourcePic, $path);
        }



        $data = [
        	"page_id"=> $this->input->post('pageid'),
        	"page_heading"=> $this->input->post('heading'),
        	"page_tagline"=>$this->input->post('tagline'),
        	"page_short_description"=>$this->input->post("short_description"),
        	"page_description"=>$this->input->post("description"),
        	"page_image"=>$page_image,
        	"page_banner"=>$page_banner,
        	"created_at"=>date('Y-m-d H:i:s'),
        	"updated_at"=>date('Y-m-d H:i:s')
        ];

        $add_pageDetails = $this->Auth_model->_set_insert('page_details',$data);

        if($add_pageDetails){
        	$this->output->set_output(json_encode(['result' => 1]));
            return FALSE; 
        }else{
        	$this->output->set_output(json_encode(['result' => 2]));
            return FALSE;
        }

    }

    /*############### TO Fetch Single id of all details in pageDetails page #####################3*/
    public function get_single_pageDetails($id){
        $this->output->set_content_type('application json');

        $data_arr = [ 'id'=>$id ];
        $result= $this->Auth_model->_get('page_details', $data_arr);

        if($result){
            $this->output->set_output(json_encode(['result' => 1, 'data'=>$result]));
            return FALSE;  
        }else{
            $this->output->set_output(json_encode(['result' => 1]));
            return FALSE;  
        }
    }



    // To Update pageDetails ##################################################################
    public function updatePageDetails(){

        $this->output->set_content_type('application json');

        $this->form_validation->set_rules('e_heading', 'Page Details Heading', 'trim|required');
        $this->form_validation->set_rules('e_tagline', 'Page Details Tagline', 'trim|required');
        $this->form_validation->set_rules('e_short_description', 'Page Details Short Description', 'trim|required');
        $this->form_validation->set_rules('e_description', 'Page Details Description', 'trim|required');

        if ($this->form_validation->run() == FALSE) 
        {
            $this->output->set_output(json_encode(['result' => 0, 'error' => $this->form_validation->error_array()]));
            return FALSE;
        }

        $id = [ 'id'=>$this->input->post('edit_hidden_id') ];
        $getData= $this->Auth_model->_get('page_details', $id);

        $e_page_image = '';

        if ($_FILES["e_page_image"]["name"] != "") {
            $string = str_replace(' ', '-', basename($_FILES["e_page_image"]["name"]));
            $picName = preg_replace('/[^a-zA-Z0-9_.]/', '', $string);

            $e_page_image = time() . "_" . rand(0, 99) . "_" . $picName;
            $path = "./uploads/pages/" . $e_page_image;
            $config['allowed_types'] = 'jpeg|JPEG|jpg|JPEG|png|PNG|ai|AI|psd|PSD';
            $config['source_image'] = $path;
            $config['remove_spaces'] = TRUE;
            $config['maintain_ratio'] = TRUE;
            $config['max_size'] = '400000';
            $config['max_height'] = '768';
            $config['max_width'] = '1024';
            $config['source_image'] = $path;
            $this->load->library('upload', $config);
            $this->load->library('image_lib', $config);

            $sourcePic = $_FILES["e_page_image"]["tmp_name"];
            move_uploaded_file($sourcePic, $path);
        }


        $e_page_banner = '';

        if ($_FILES["e_page_banner"]["name"] != "") {
            $string = str_replace(' ', '-', basename($_FILES["e_page_banner"]["name"]));
            $picName = preg_replace('/[^a-zA-Z0-9_.]/', '', $string);

            $e_page_banner = time() . "_" . rand(0, 99) . "_" . $picName;
            $path = "./uploads/pages/" . $e_page_banner;
            $config['allowed_types'] = 'jpeg|JPEG|jpg|JPEG|png|PNG|ai|AI|psd|PSD';
            $config['source_image'] = $path;
            $config['remove_spaces'] = TRUE;
            $config['maintain_ratio'] = TRUE;
            $config['max_size'] = '400000';
            $config['max_height'] = '768';
            $config['max_width'] = '1024';
            $config['source_image'] = $path;
            $this->load->library('upload', $config);
            $this->load->library('image_lib', $config);

            $sourcePic = $_FILES["e_page_banner"]["tmp_name"];
            move_uploaded_file($sourcePic, $path);
        }

        if(empty($e_page_image)){
            $e_page_image = $getData[0]['page_image'];
        }

        if(empty($e_page_banner)){
            $e_page_banner = $getData[0]['page_banner'];
        }


        $data = [
            'page_id'=>$this->input->post('e_pageid'),
            'page_heading'=>$this->input->post('e_heading'),
            'page_tagline'=>$this->input->post('e_tagline'),
            'page_short_description'=>$this->input->post('e_short_description'),
            'page_description'=>$this->input->post('e_description'),
            'page_image'=>$e_page_image,
            'page_banner'=>$e_page_banner,
            'updated_at'=>date('Y-m-d H:i:S')
        ];

        $condition = [
            'id'=>$this->input->post('edit_hidden_id')
        ];

        $result =  $this->Auth_model->_set_update('page_details',$data,$condition);

        if($result){
            $this->output->set_output(json_encode(['result' => 1]));
            return FALSE;  
        }else{
            $this->output->set_output(json_encode(['result' => 2]));
            return FALSE;
        }
    }



}


?>