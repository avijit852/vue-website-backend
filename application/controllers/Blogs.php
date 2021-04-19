<?php
defined('BASEPATH') OR exit('No direct script access allowed');


include 'Base_controller.php';

class Blogs extends Base_controller {

	function __construct() {
        parent::__construct();
        $this->load->model('Auth_model');
        if ($this->session->userdata('user_id') == "") {
            redirect('auth');
        }
    }

    public function index(){

    	 $data['title'] = "Blogs - Creativewebdesign";
         $data_arr = [
            'status'=>'Y'
         ];
         $data['blogs'] = $this->Auth_model->_get('blogs', $data_arr);
         $this->load->view('blogs_view', $data);

    }


    public function addBlogs(){
    	$this->output->set_content_type('application json');

    	$this->form_validation->set_rules('blogs_title', 'Blogs Title', 'trim|required');
        $this->form_validation->set_rules('blogs_date', 'Blogs Date', 'trim|required');
        if (empty($_FILES['blogs_image']['name']))
		{
		     $this->form_validation->set_rules('blogs_image', 'Blogs Image', 'required');
		}
        $this->form_validation->set_rules('blogs_short_description', 'Blogs Short Description ', 'trim|required');
  //        $this->form_validation->set_rules('blogs_description', 'Blogs Description ', 'required');
  //       $dec = $this->input->post('blogs_description');
  //       if(!$dec)
		// {
		//      $this->form_validation->set_rules( 'Blogs Description ', 'required');
		// }

        if ($this->form_validation->run() == FALSE) 
        {
            $this->output->set_output(json_encode(['result' => 0, 'error' => $this->form_validation->error_array()]));
            return FALSE;
        }


        $blogs_image = '';

        if ($_FILES["blogs_image"]["name"] != "") {
            $string = str_replace(' ', '-', basename($_FILES["blogs_image"]["name"]));
            $picName = preg_replace('/[^a-zA-Z0-9_.]/', '', $string);

            $blogs_image = time() . "_" . rand(0, 99) . "_" . $picName;
            $path = "./uploads/blogs/" . $blogs_image;
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

            $sourcePic = $_FILES["blogs_image"]["tmp_name"];
            move_uploaded_file($sourcePic, $path);
        }


        $blogs_slug = $this->input->post('blogs_title');  
		$a = rand(111,999);
	    $blogs_slug = preg_replace('/\s+/', $a.'-_*&', $blogs_slug);  

	    $data = [
        	'blogs_slug'=>$blogs_slug,
        	'blogs_title'=>$this->input->post('blogs_title'),
        	'blogs_date'=>$this->input->post('blogs_date'),
        	'blogs_image'=>$blogs_image,
        	'blogs_short_description'=>$this->input->post('blogs_short_description'),
        	'blogs_description' => $this->input->post('blogs_description'),
        	'created_at'=>date('Y-m-d H:i:S'),
        	'updated_at'=>date('Y-m-d H:i:S'),
        	'created_by'=>$this->session->userdata('user_id')
        ];

        $addBlogs = $this->Auth_model->_set_insert('blogs',$data);

        if($addBlogs){
        	$this->output->set_output(json_encode(['result' => 1]));
            return FALSE;  
        }else{
        	$this->output->set_output(json_encode(['result' => 2]));
            return FALSE;
        }

    }


    //To fetch all details on single blogs id
    public function get_single_blogs($id){
        $this->output->set_content_type('application json');

         $data_arr = [ 'id'=>$id ];
         $result= $this->Auth_model->_get('blogs', $data_arr);

        if($result){
            $this->output->set_output(json_encode(['result' => 1, 'data'=>$result]));
            return FALSE;  
        }else{
            $this->output->set_output(json_encode(['result' => 1]));
            return FALSE;  
        }
    }

    //To update blogs details
    public function updateBlogs(){
        $this->output->set_content_type('application json');

        $this->form_validation->set_rules('e_blogs_title', 'Blog Title', 'trim|required');
        $this->form_validation->set_rules('e_blogs_date', 'Blog Date', 'trim|required');
        $this->form_validation->set_rules('e_blogs_short_description', 'Blog Short Description', 'trim|required');

        if ($this->form_validation->run() == FALSE) 
        {
            $this->output->set_output(json_encode(['result' => 0, 'error' => $this->form_validation->error_array()]));
            return FALSE;
        }

        $id = [ 'id'=>$this->input->post('edit_hidden_id') ];
        $getData= $this->Auth_model->_get('blogs', $id);


        $e_blogs_image = '';


        if ($_FILES["e_blogs_image"]["name"] != "") {
            $string = str_replace(' ', '-', basename($_FILES["e_blogs_image"]["name"]));
            $picName = preg_replace('/[^a-zA-Z0-9_.]/', '', $string);

            $e_blogs_image = time() . "_" . rand(0, 99) . "_" . $picName;
            $path = "./uploads/blogs/" . $e_blogs_image;
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

            $sourcePic = $_FILES["e_blogs_image"]["tmp_name"];
            move_uploaded_file($sourcePic, $path);
        }


        $blogs_slug = $this->input->post('blogs_title');  
        $a = rand(111,999);
        $blogs_slug = preg_replace('/\s+/', $a.'-_*&', $blogs_slug);  


        if(empty($e_blogs_image)){
            $e_blogs_image = $getData[0]['blogs_image'];
        }


        $data = [
            'blogs_slug'=>$blogs_slug,
            'blogs_title'=>$this->input->post('e_blogs_title'),
            'blogs_date'=>$this->input->post('e_blogs_date'),
            'blogs_image'=> $e_blogs_image,
            'blogs_short_description' =>$this->input->post('e_blogs_short_description'),
            'blogs_description'=>$this->input->post('e_blogs_description'),
            'updated_at'=>date('Y-m-d H:i:S'),
            'created_by'=>$this->session->userdata('user_id')
        ];


        $condition = [
            'id'=>$this->input->post('edit_hidden_id')
        ];

        $result =  $this->Auth_model->_set_update('blogs',$data,$condition);

        if($result){
            $this->output->set_output(json_encode(['result' => 1]));
            return FALSE;  
        }else{
            $this->output->set_output(json_encode(['result' => 2]));
            return FALSE;
        }


    }


    // To delete single blog
    public function deleteBlogs(){
        $this->output->set_content_type('application json');

        $data = ['status'=>'N'];
        $condition = ['id'=>$this->input->post('delete_hidden_id')];

        $result =  $this->Auth_model->_set_update('blogs',$data,$condition);

        if($result){
            $this->output->set_output(json_encode(['result' => 1]));
            return FALSE;  
        }else{
            $this->output->set_output(json_encode(['result' => 1]));
            return FALSE;  
        }
    }


}