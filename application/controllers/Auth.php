<?php
defined('BASEPATH') OR exit('No direct script access allowed');


include 'Base_controller.php';

class Auth extends Base_controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Auth_model');
    }

	public function index() {
        if ($this->session->userdata('user_id')){
            redirect('dashboard');
        }else {
            $data['title'] = "Login - Creativewebdesign";
            $this->load->view('login_view', $data);
        }
    }

    function validation() {
        $this->output->set_content_type('application json');
        $msg_err = '';

        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $password = sha1($password . SALT);

        $data = ['email' => $email, 'password' => $password];

        $user_data = $this->Auth_model->_get('users', $data);

      

        if($user_data){

                $this->session->set_userdata([
                    'user_id' => $user_data[0]['id'],
                    'user_email' => $user_data[0]['email'],
                    'user_name' => $user_data[0]['name'],
                ]);

                $this->output->set_output(json_encode(['result' => 1]));
                return false;  
        }else{
            $this->output->set_output(json_encode(['result' => 3]));
        }
    }


    function test(){
        echo sha1('1234' . SALT);
    }

     function logout() {
        $this->session->sess_destroy();
        redirect('/');
    }

}
