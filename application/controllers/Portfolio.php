<?php
defined('BASEPATH') OR exit('No direct script access allowed');


include 'Base_controller.php';

class Portfolio extends Base_controller {

	function __construct() {
        parent::__construct();
        $this->load->model('Auth_model');
        $this->load->helper('url_helper');

        if ($this->session->userdata('user_id') == "") {
            redirect('auth');
        }
    }



    function slugify($string)
        {
            // Get an instance of $this
            $CI =& get_instance(); 

            $CI->load->helper('text');
            $CI->load->helper('url');

            // Replace unsupported characters (add your owns if necessary)
            $string = str_replace("'", '-', $string);
            $string = str_replace(".", '-', $string);
            $string = str_replace("²", '2', $string);
            $string = str_replace("i", 'A', $string);
             // $string = str_replace(" ", '&', $string);
            // Slugify and return the string
            return url_title(convert_accented_characters($string), 'dash', true);
    }

    public function slug(){
        $string = "This is my demo";
        $slug = $this->slugify($string);
        echo $slug;
       
        
    }




    public function index(){

    	$data['title'] = "Portfolio - Creativewebdesign";
		 $data_arr = [
		 	'status'=>'Y'
		 ];
         $params = ['order'=>[ 'type'=>'desc','orderby'=>'id'],];
		 $data['portfolio'] = $this->Auth_model->_get('portfolio', $data_arr,$params);
		 
         $this->load->view('portfolio_view', $data);
    }


    public function addportfolio(){

        $this->output->set_content_type('application json');
        $this->form_validation->set_rules('portfolio_title', 'Portfolio Title', 'trim|required');
        $this->form_validation->set_rules('portfolio_short_description', 'Portfolio Short Description', 'trim|required');
        $this->form_validation->set_rules('portfolio_description', 'Portfolio Description', 'trim|required');

        if ($this->form_validation->run() == FALSE) 
        {
            $this->output->set_output(json_encode(['result' => 0, 'error' => $this->form_validation->error_array()]));
            return FALSE;
        }

        $portfolio_image = '';


        if ($_FILES["portfolio_image"]["name"] != "") {
            $string = str_replace(' ', '-', basename($_FILES["portfolio_image"]["name"]));
            $picName = preg_replace('/[^a-zA-Z0-9_.]/', '', $string);

            $portfolio_image = time() . "_" . rand(0, 99) . "_" . $picName;
            $path = "./uploads/portfolio/" . $portfolio_image;
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

            $sourcePic = $_FILES["portfolio_image"]["tmp_name"];
            move_uploaded_file($sourcePic, $path);
        }


        $str = $this->input->post('portfolio_title');  
        $a = rand(111,999);
        $str = preg_replace('/\s+/', $a.'-_*&', $str);  

        $data = [
            'portfolio_slug'=>$str,
            'portfolio_title'=>$this->input->post('portfolio_title'),
            'portfolio_image'=>$portfolio_image,
            'portfolio_short_description' => $this->input->post('portfolio_short_description'),
            'portfolio_description'=>$this->input->post('portfolio_description'),
            'created_at'=>date('Y-m-d H:i:S'),
            'updated_at'=>date('Y-m-d H:i:S'),
            'created_by'=>$this->session->userdata('user_id')
        ];
       
        $add_portfolio = $this->Auth_model->_set_insert('portfolio',$data);

        if($add_portfolio){
            $this->output->set_output(json_encode(['result' => 1]));
            return FALSE;  
        }else{
            $this->output->set_output(json_encode(['result' => 2]));
            return FALSE;
        }



    }


    public function updatePortfolio(){
        $this->output->set_content_type('application json');

        $this->form_validation->set_rules('e_portfolio_title', 'Portfolio Title', 'trim|required');
        $this->form_validation->set_rules('e_portfolio_short_description', 'Portfolio Description', 'trim|required');


        if ($this->form_validation->run() == FALSE) 
        {
            $this->output->set_output(json_encode(['result' => 0, 'error' => $this->form_validation->error_array()]));
            return FALSE;
        }

        $id = [ 'id'=>$this->input->post('edit_hidden_id') ];
        $getData= $this->Auth_model->_get('portfolio', $id);

        $e_portfolio_image = '';

        if ($_FILES["e_portfolio_image"]["name"] != "") {
            $string = str_replace(' ', '-', basename($_FILES["e_portfolio_image"]["name"]));
            $picName = preg_replace('/[^a-zA-Z0-9_.]/', '', $string);

            $e_portfolio_image = time() . "_" . rand(0, 99) . "_" . $picName;
            $path = "./uploads/portfolio/" . $e_portfolio_image;
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

            $sourcePic = $_FILES["e_portfolio_image"]["tmp_name"];
            move_uploaded_file($sourcePic, $path);
        }

        if(empty($e_portfolio_image)){
            $e_portfolio_image = $getData[0]['portfolio_image'];
        }


        $str = $this->input->post('e_portfolio_title');  
        $a = rand(111,999);
        $str = preg_replace('/\s+/', $a.'-_*&', $str);  

        $data = [
            'portfolio_slug'=>$str,
            'portfolio_title'=>$this->input->post('e_portfolio_title'),
            'portfolio_short_description'=>$this->input->post('e_portfolio_short_description'),
            'portfolio_description'=>$this->input->post('e_portfolio_description'),
            'portfolio_image'=>$e_portfolio_image,
            'updated_at'=>date('Y-m-d H:i:S'),
            'created_by'=>$this->session->userdata('user_id')
        ];

        $condition = [
            'id'=>$this->input->post('edit_hidden_id')
        ];

        $result =  $this->Auth_model->_set_update('portfolio',$data,$condition);

        if($result){
            $this->output->set_output(json_encode(['result' => 1]));
            return FALSE;  
        }else{
            $this->output->set_output(json_encode(['result' => 2]));
            return FALSE;
        }

    }




    // To Fetch Single id all details
    public function get_single_portfolio($id){
        $this->output->set_content_type('application json');

         $data_arr = [ 'id'=>$id ];
         $result= $this->Auth_model->_get('portfolio', $data_arr);

        if($result){
            $this->output->set_output(json_encode(['result' => 1, 'data'=>$result]));
            return FALSE;  
        }else{
            $this->output->set_output(json_encode(['result' => 1]));
            return FALSE;  
        }
         
    }



    public function  deleteportfolio(){
        $this->output->set_content_type('application json');

        $data = ['status'=>'N'];
        $condition = ['id'=>$this->input->post('delete_hidden_id')];

        $result =  $this->Auth_model->_set_update('portfolio',$data,$condition);

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