<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	
    public function logout(){
        session_unset();
		session_destroy();
        $this->load->view('landingpage');
    }
	
}
