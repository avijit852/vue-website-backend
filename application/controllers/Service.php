<?php
defined('BASEPATH') OR exit('No direct script access allowed');


include 'Base_controller.php';

class Service extends Base_controller {

	function __construct() {
        parent::__construct();
        $this->load->model('Auth_model');
        if ($this->session->userdata('user_id') == "") {
            redirect('auth');
        }
    }

	public function index(){

		 $data['title'] = "Service - Creativewebdesign";
		 $data_arr = [
		 	'status'=>'Y'
		 ];
         $params = ['order'=>[ 'type'=>'desc','orderby'=>'id'],];
		 $data['service'] = $this->Auth_model->_get('service', $data_arr, $params);
		 
         $this->load->view('service_view', $data);

	}
	public function slug(){

		$str = 'Camila Cabello is a Hollywood singer.';  
		$a = rand(111,999);
	    $str = preg_replace('/\s+/', $a.'-_*&', $str);  
	    echo $str; 


	   // $copy_date = "Copyright 1999";
	   // $copy_date = preg_replace("([0-9]+)", "2000", $copy_date);
	   
	   // print $copy_date;
	}

	public function addservice(){
		$this->output->set_content_type('application json');

		$this->form_validation->set_rules('service_title', 'Service Title', 'trim|required');
        $this->form_validation->set_rules('service_short_description', 'Service Short Description', 'trim|required');
        $this->form_validation->set_rules('service_description', 'Service Description', 'trim|required');
        // $this->form_validation->set_rules('bg_img', 'Background image', 'trim|required|is_unique[user.user_phone]');
        // $this->form_validation->set_rules('service_img', 'Service Image', 'required');
        
        if ($this->form_validation->run() == FALSE) 
        {
            $this->output->set_output(json_encode(['result' => 0, 'error' => $this->form_validation->error_array()]));
            return FALSE;
        }

        $service_image = '';
		$service_bg_icon = '';
		$service_icon = '';


		if ($_FILES["service_image"]["name"] != "") {
            $string = str_replace(' ', '-', basename($_FILES["service_image"]["name"]));
            $picName = preg_replace('/[^a-zA-Z0-9_.]/', '', $string);

            $service_image = time() . "_" . rand(0, 99) . "_" . $picName;
            $path = "./uploads/service/" . $service_image;
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

            $sourcePic = $_FILES["service_image"]["tmp_name"];
            move_uploaded_file($sourcePic, $path);
        }


		if ($_FILES["service_bg_icon"]["name"] != "") {
            $string = str_replace(' ', '-', basename($_FILES["service_bg_icon"]["name"]));
            $picName = preg_replace('/[^a-zA-Z0-9_.]/', '', $string);

            $service_bg_icon = time() . "_" . rand(0, 99) . "_" . $picName;
            $path = "./uploads/service/" . $service_bg_icon;
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

            $sourcePic = $_FILES["service_bg_icon"]["tmp_name"];
            move_uploaded_file($sourcePic, $path);
        }

        if ($_FILES["service_icon"]["name"] != "") {
            $string = str_replace(' ', '-', basename($_FILES["service_icon"]["name"]));
            $picName = preg_replace('/[^a-zA-Z0-9_.]/', '', $string);

            $service_icon = time() . "_" . rand(0, 99) . "_" . $picName;
            $path = "./uploads/service/" . $service_icon;
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

            $sourcePic = $_FILES["service_icon"]["tmp_name"];
            move_uploaded_file($sourcePic, $path);
        }



        $str = $this->input->post('service_title');  
		$a = rand(111,999);
	    $str = preg_replace('/\s+/', $a.'-_*&', $str);  

        $data = [
        	'service_slug'=>$str,
        	'service_title'=>$this->input->post('service_title'),
            'service_short_discription'=>$this->input->post('service_short_description'),
        	'service_description'=>$this->input->post('service_description'),
        	'service_image' => $service_image,
        	'service_bg_icon'=>$service_bg_icon,
        	'service_icon'=>$service_icon,
        	'created_at'=>date('Y-m-d H:i:S'),
        	'updated_at'=>date('Y-m-d H:i:S'),
        	'created_by'=>$this->session->userdata('user_id')
        ];
       

        $add_service = $this->Auth_model->_set_insert('service',$data);

        if($add_service){
        	$this->output->set_output(json_encode(['result' => 1]));
            return FALSE;  
        }else{
        	$this->output->set_output(json_encode(['result' => 2]));
            return FALSE;
        }

	}


    

    public function updateService(){
        $this->output->set_content_type('application json');

        $this->form_validation->set_rules('e_service_title', 'Service Title', 'trim|required');
        $this->form_validation->set_rules('e_service_short_description', 'Short Description', 'trim|required');


        if ($this->form_validation->run() == FALSE) 
        {
            $this->output->set_output(json_encode(['result' => 0, 'error' => $this->form_validation->error_array()]));
            return FALSE;
        }

        $id = [ 'id'=>$this->input->post('edit_hidden_id') ];
        $getData= $this->Auth_model->_get('service', $id);



        $e_service_image = '';
        $e_service_bg_icon = '';
        $e_service_icon = '';


        if ($_FILES["e_service_image"]["name"] != "") {
            $string = str_replace(' ', '-', basename($_FILES["e_service_image"]["name"]));
            $picName = preg_replace('/[^a-zA-Z0-9_.]/', '', $string);

            $e_service_image = time() . "_" . rand(0, 99) . "_" . $picName;
            $path = "./uploads/service/" . $e_service_image;
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

            $sourcePic = $_FILES["e_service_image"]["tmp_name"];
            move_uploaded_file($sourcePic, $path);
        }


        if ($_FILES["e_service_bg_icon"]["name"] != "") {
            $string = str_replace(' ', '-', basename($_FILES["e_service_bg_icon"]["name"]));
            $picName = preg_replace('/[^a-zA-Z0-9_.]/', '', $string);

            $e_service_bg_icon = time() . "_" . rand(0, 99) . "_" . $picName;
            $path = "./uploads/service/" . $e_service_bg_icon;
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

            $sourcePic = $_FILES["e_service_bg_icon"]["tmp_name"];
            move_uploaded_file($sourcePic, $path);
        }

        if ($_FILES["e_service_icon"]["name"] != "") {
            $string = str_replace(' ', '-', basename($_FILES["e_service_icon"]["name"]));
            $picName = preg_replace('/[^a-zA-Z0-9_.]/', '', $string);

            $e_service_icon = time() . "_" . rand(0, 99) . "_" . $picName;
            $path = "./uploads/service/" . $e_service_icon;
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

            $sourcePic = $_FILES["e_service_icon"]["tmp_name"];
            move_uploaded_file($sourcePic, $path);
        }

        if(empty($e_service_image)){
            $e_service_image = $getData[0]['service_image'];
        }

        if(empty($e_service_bg_icon)){
            $e_service_bg_icon = $getData[0]['service_bg_icon'];
        }

        if(empty($e_service_icon)){
            $e_service_icon = $getData[0]['service_icon'];
        }

        $str = $this->input->post('e_service_title');  
        $a = rand(111,999);
        $str = preg_replace('/\s+/', $a.'-_*&', $str);  

        $data = [
            'service_slug'=>$str,
            'service_title'=>$this->input->post('e_service_title'),
            'service_short_discription'=>$this->input->post('e_service_short_description'),
            'service_description'=>$this->input->post('e_service_description'),
            'service_image' => $e_service_image,
            'service_bg_icon'=>$e_service_bg_icon,
            'service_icon'=>$e_service_icon,
            'updated_at'=>date('Y-m-d H:i:S'),
            'created_by'=>$this->session->userdata('user_id')
        ];

        $condition = [
            'id'=>$this->input->post('edit_hidden_id')
        ];

        $result =  $this->Auth_model->_set_update('service',$data,$condition);

        if($result){
            $this->output->set_output(json_encode(['result' => 1]));
            return FALSE;  
        }else{
            $this->output->set_output(json_encode(['result' => 2]));
            return FALSE;
        }
   
    }


    // To Fetch Single id all details
    public function get_single_service($id){
        $this->output->set_content_type('application json');

         $data_arr = [ 'id'=>$id ];
         $result= $this->Auth_model->_get('service', $data_arr);

        if($result){
            $this->output->set_output(json_encode(['result' => 1, 'data'=>$result]));
            return FALSE;  
        }else{
            $this->output->set_output(json_encode(['result' => 1]));
            return FALSE;  
        }
         
    }



    // For delete your service 
    public function deleteservice(){
        $this->output->set_content_type('application json');

        $data = ['status'=>'N'];
        $condition = ['id'=>$this->input->post('delete_hidden_id')];

        $result =  $this->Auth_model->_set_update('service',$data,$condition);

        if($result){
            $this->output->set_output(json_encode(['result' => 1]));
            return FALSE;  
        }else{
            $this->output->set_output(json_encode(['result' => 1]));
            return FALSE;  
        }
    }

    


}

?>