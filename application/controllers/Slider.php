<?php
defined('BASEPATH') OR exit('No direct script access allowed');


include 'Base_controller.php';

class Slider extends Base_controller {

	function __construct() {
        parent::__construct();
        $this->load->model('Auth_model');
        if ($this->session->userdata('user_id') == "") {
            redirect('auth');
        }
    }


    public function index(){

    	 $data['title'] = "Slider - Creativewebdesign";

    	 $data_arr = ['status'=>'Y'];
         $params = ['order'=>[ 'type'=>'asc','orderby'=>'slider_position'],];
		 $data['slider'] = $this->Auth_model->_get('slider', $data_arr, $params);
         

    	  $this->load->view('slider_view', $data);
    }


    public function addslider(){
    	$this->output->set_content_type('application json');

        $this->form_validation->set_rules('slider_title', 'Slider Title', 'trim|required');
        $this->form_validation->set_rules('slider_description', 'Slider Description', 'trim|required');
        if (empty($_FILES['slider_image']['name']))
		{
		     $this->form_validation->set_rules('slider_image', 'Slider Image', 'required');
		}

        if ($this->form_validation->run() == FALSE) 
        {
            $this->output->set_output(json_encode(['result' => 0, 'error' => $this->form_validation->error_array()]));
            return FALSE;
        }

		$slider_image = '';


        if ($_FILES["slider_image"]["name"] != "") {
            $string = str_replace(' ', '-', basename($_FILES["slider_image"]["name"]));
            $picName = preg_replace('/[^a-zA-Z0-9_.]/', '', $string);

            $slider_image = time() . "_" . rand(0, 99) . "_" . $picName;
            $path = "./uploads/slider/" . $slider_image;
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

            $sourcePic = $_FILES["slider_image"]["tmp_name"];
            move_uploaded_file($sourcePic, $path);
        }


        $data = [

            'slider_title'=>$this->input->post('slider_title'),
            'slider_description' => $this->input->post('slider_description'),
            'slider_img'=>$slider_image,
            'slider_ulr'=>'',
            'created_at'=>date('Y-m-d H:i:S'),
            'updated_at'=>date('Y-m-d H:i:S'),
            'created_by'=>$this->session->userdata('user_id')
        ];
       
        $result = $this->Auth_model->_set_insert('slider',$data);

        if($result){

            $updateData = ['slider_position'=> $result,];
            $condition = ['id'=> $result,];
            $resultUpdate = $this->Auth_model->_set_update('slider', $updateData, $condition);

        }
        if($resultUpdate){
            $this->output->set_output(json_encode(['result' => 1]));
            return FALSE;  
        }else{
            $this->output->set_output(json_encode(['result' => 2]));
            return FALSE;
        }

    }

/*################# To Fetch Sligle Data on a slider ####################*/
    public function get_single_slider($id){
        $this->output->set_content_type('application json');

        $data_arr = [ 'id'=>$id ];
        $result= $this->Auth_model->_get('slider', $data_arr);

        if($result){
            $this->output->set_output(json_encode(['result' => 1, 'data'=>$result]));
            return FALSE;  
        }else{
            $this->output->set_output(json_encode(['result' => 1]));
            return FALSE;  
        }
    }
    
/*##################### To Update Slider Details #########################*/

    public function updateSlider(){
        $this->output->set_content_type('application json');

        $this->form_validation->set_rules('e_slider_title', 'Page Details Heading', 'trim|required');
        $this->form_validation->set_rules('e_slider_description', 'Page Details Tagline', 'trim|required');

        if ($this->form_validation->run() == FALSE) 
        {
            $this->output->set_output(json_encode(['result' => 0, 'error' => $this->form_validation->error_array()]));
            return FALSE;
        }

        $id = [ 'id'=>$this->input->post('edit_hidden_id') ];
        $getData= $this->Auth_model->_get('slider', $id);

        $e_slider_image = '';

        if ($_FILES["e_slider_image"]["name"] != "") {
            $string = str_replace(' ', '-', basename($_FILES["e_slider_image"]["name"]));
            $picName = preg_replace('/[^a-zA-Z0-9_.]/', '', $string);

            $e_slider_image = time() . "_" . rand(0, 99) . "_" . $picName;
            $path = "./uploads/slider/" . $e_slider_image;
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

            $sourcePic = $_FILES["e_slider_image"]["tmp_name"];
            move_uploaded_file($sourcePic, $path);
        }

        if(empty($e_slider_image)){
            $e_slider_image = $getData[0]['slider_img'];
        }


        $data = [
            'slider_title'=>$this->input->post('e_slider_title'),
            'slider_img'=>$e_slider_image,
            'slider_description'=>$this->input->post('e_slider_description'),
            'updated_at'=>date('Y-m-d H:i:S')
        ];

        $condition = [
            'id'=>$this->input->post('edit_hidden_id')
        ];

        $result =  $this->Auth_model->_set_update('slider',$data,$condition);

        if($result){
            $this->output->set_output(json_encode(['result' => 1]));
            return FALSE;  
        }else{
            $this->output->set_output(json_encode(['result' => 2]));
            return FALSE;
        }
    }


    /*public function changePosition(){
        $this->output->set_content_type('application json');

        $this->form_validation->set_rules('position_num', 'Position Number ', 'trim|required');

        if ($this->form_validation->run() == FALSE) 
        {
            $this->output->set_output(json_encode(['result' => 0, 'error' => $this->form_validation->error_array()]));
            return FALSE;
        }


        if( $this->input->post('position_num') != $this->input->post('old_position_id')){
            $position_num = ['slider_position' => $this->input->post('position_num'),];
            $get_slider_one = $this->Auth_model->_get('slider', $position_num);
            $slider_id_one = $get_slider_one[0]['id'];
            
            $slider_position_old = ['slider_position' => $this->input->post('old_position_id'),];
            $get_slider_two = $this->Auth_model->_get('slider', $slider_position_old);
            $slider_id_two = $get_slider_two[0]['id'];


            $conditionOld = [ 'id'=>$slider_id_one, ];
            $dataOld = ['slider_position'=> $this->input->post('old_position_id'), ] ;
            $update_positionOld = $this->Auth_model->_set_update('slider',$dataOld,$conditionOld);


            $conditionNew = [ 'id'=>$slider_id_two, ];
            $dataNew = ['slider_position'=> $this->input->post('position_num'), ] ;
            $update_positionNew = $this->Auth_model->_set_update('slider',$dataNew,$conditionNew);

            if($update_positionNew && $conditionOld ){
                 $this->output->set_output(json_encode(['result' => 1]));
                return FALSE;  
            }else{
                $this->output->set_output(json_encode(['result' => 2]));
                return FALSE;
            }
        }else{
            $this->output->set_output(json_encode(['result' => 3]));
            return FALSE;
        }

    }
*/


    // To Delete page #####################################################

     public function  deleteSlider(){
        $this->output->set_content_type('application json');

        $data = ['status'=>'N'];
        $condition = ['id'=>$this->input->post('delete_hidden_id')];

        $result =  $this->Auth_model->_set_update('slider',$data,$condition);

        if($result){
            $this->output->set_output(json_encode(['result' => 1]));
            return FALSE;  
        }else{
            $this->output->set_output(json_encode(['result' => 1]));
            return FALSE;  
        }
    }



/*############################# This is for drag and drop #####################*/
    function draganddrop(){

         $data['title'] = "Slider Drag - Creativewebdesign";

         $data_arr = ['status'=>'Y'];
         $params = ['order'=>[ 'type'=>'asc','orderby'=>'slider_position'],];
         $data['slider'] = $this->Auth_model->_get('slider', $data_arr, $params);
         

        $this->load->view('slider_drag_view', $data);
    }

    function updatePosition(){
        $this->output->set_content_type('application json');
        $position_id = $this->input->post('post_order_ids[]');
        if(count($position_id) > 0){
            for ($i=1; $i <= count($position_id) ; $i++) { 
                
                $updateData = [
                    'slider_position'=> $i,
                ];
                $condition = [
                    'id'=>$position_id[$i-1],
                ];
                
                $this->Auth_model->_set_update('slider',$updateData,$condition);
            }
            $this->output->set_output(json_encode(['result' => 1]));
        }else{
            $this->output->set_output(json_encode(['result' => 3]));
        }
    }



}