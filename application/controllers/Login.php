<?php
defined('BASEPATH') OR exit('No direct script access allowed');


include 'Base_controller.php';

class Login extends Base_controller {

	public function index() {
        // if ($this->session->userdata('user_id') == "") {
        //     redirect('dashboard');
        // }else {
            $data['title'] = "Login - Creativewebdesign";
            $this->load->view('login_view', $data);
        //}
    }


    function test(){
        echo sha1('1234' . SALT);
    }

     function logout() {
        $this->session->sess_destroy();
        redirect('/');
    }

}
