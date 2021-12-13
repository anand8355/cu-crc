<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Resume extends CI_Controller {

	public function index()
	{
        if($this->session->has_userdata('session_user_id')){
            
			$this->load->model('Dash_model');
			$user_id=$_SESSION['session_user_id'];
            $data['personal']=$this->Dash_model->get_personal($user_id);
            $data['skills']=$this->Dash_model->get_skills($user_id);
            $data['academic']=$this->Dash_model->get_acedemic($user_id);
            $data['academic2']=$this->Dash_model->get_acedemic2($user_id);
            $data['training']=$this->Dash_model->get_training_certification($user_id);
            $data['interpersonal']=$this->Dash_model->get_interpersonal($user_id);
            $data['co_curricular']=$this->Dash_model->get_co_curricular($user_id);
            $data['reference']=$this->Dash_model->get_reference($user_id);
			$this->load->view('resume',$data);
		}
		else{
			
		$this->load->view('resume');
	     }
    }
}