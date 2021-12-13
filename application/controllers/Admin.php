<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
    {  
        // echo "hii";
        // exit;
        $this->load->model('Admin_model');
        $data = [
            'completed' => $this->Admin_model->count_rows(1),
            'incompleted' => $this->Admin_model->count_rows(0),
            
        ];
       
        $this->load->view('Admin/dash',$data);
    }
    public function search(){
        $this->load->view('Admin/search');
    }
    public function get_search(){
        $user_id 	= $this->input->post('user_id');
       
        $this->load->model('Admin_model');
        $row = $this->Admin_model->search($user_id);
        // echo $row;
        // exit;
        if($row){
            $this->load->model('Dash_model');
		
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
            $this->load->library('session');
            $this->session->set_flashdata('Invalid','Invalid Admission Number');
            
            $this->load->view('Admin/search');
        }
    }
    
}