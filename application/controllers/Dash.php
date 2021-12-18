<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Dash extends CI_Controller 
{
	
	
	public function __construct()
	{

parent::__construct();
$this->load->database();
$this->load->model('mymodelcrc');
$this->load->model('mycrc');
$this->load->helper('url');
$this->load->helper('form');
$this->load->library('session');

$this->load->library('form_validation');


}
	
	
	
	
	
	
	public function home()
	{
		
			$data['drive']=$this->mymodelcrc->get_drive();
			$this->load->view('home', $data);
		
	}
	
	public function home_crc()
	{
		
			$data['drive']=$this->mymodelcrc->get_drive();
			$this->load->view('home-crc',$data);
			
		
	}
	
	public function home_institute()
	{         
		
			$data['drive']=$this->mymodelcrc->get_drive();
			$data['student']=$this->mymodelcrc->get_students($_SESSION['session_user_name']);
				$this->load->view('home-institute',$data);
			
		
	}
	
	public function newuser()
	{		
		$data['institute']=$this->mycrc->get_institute();
		$data['course']=$this->mycrc->get_courses();
		$data['stream']=$this->mycrc->get_stream();
		$this->load->view('register', $data);
		
	}
	
	
	public function add_newuser()
	{
		$user_name 		= $this->input->post('user_name');
		$user_id 	= $this->input->post('user_id');
		$roll	= $this->input->post('roll');
		$college	= $this->input->post('college');
		$course	= $this->input->post('course');
		$stream	= $this->input->post('stream');
		$ceid	= $this->input->post('ceid');
		$peid		= $this->input->post('peid');
		$gender		= $this->input->post('gender');
		$caste		= $this->input->post('caste');
		
		
		$data = [
			'user_id'	=>$user_id,
			'user_name'		=>$user_name,
			'password'   =>$user_id,
			'roll'	=>$roll,
			'college'	=>$college,
			'course'	=>$course,
			'stream'	=>$stream,
			'ceid'	=>$ceid,
			'peid'		=>$peid,
			'gender'		=>$gender,
			'caste'		=>$caste,
		];
		
		   
		   
			$rs= $this->mymodelcrc->check_user($user_id);
			
			if($rs)
			{
				$this->session->set_userdata('Login_failed','User Name is Already Exists....');
				return redirect('welcome/index');
			}
			else
			{
				$rs= $this->mymodelcrc->add_user($data,$user_id);
				$this->session->set_userdata('Login_failed','User Added, After approval from dept you can login...');
				return redirect('welcome/index');
				
			}
			
				
	}
	
	public function login()
	{
        
		$user_id=$this->input->post('user_id');
        $pass=$this->input->post('pswd');
                
        if ($u['user']= $this->mymodelcrc->isvalidate($user_id,$pass))
		{
           	$this->session->set_userdata('session_user_id',$user_id);
			$un = $u['user'][0]['user_name'];
			$role = $u['user'][0]['role'];
			$status =$u['user'][0]['status'];
			
			if($role=='student' && $status!=0)
			{				
			$this->session->set_userdata('session_user_name',$un);
			$data['drive']=$this->mymodelcrc->get_drive();
				$this->load->view('home', $data);
			}
			else
			{
				 $this->load->library('session');
            $this->session->set_flashdata('Login_failed','Invalid User name/ Password');
            $this->load->view('landingpage');
			}
		}
		elseif($u['user']= $this->mymodelcrc->isvalidate_user($user_id,$pass))
		{
			$this->session->set_userdata('session_user_id',$user_id);
			$un = $u['user'][0]['user_name'];
			$role = $u['user'][0]['role'];
			
			if($role=='crc')
			{
                 			 
			$this->session->set_userdata('session_user_name',$un);
			$data['drive']=$this->mymodelcrc->get_drive();
				$this->load->view('home-crc',$data);
			}
			else
			{
				 $this->load->library('session');
            $this->session->set_flashdata('Login_failed','Invalid User name/ Password');
            $this->load->view('landingpage');
			}
			
		}
        elseif($u['user']= $this->mymodelcrc->isvalidate_institute($user_id,$pass))
		{
			$this->session->set_userdata('session_user_id',$user_id);
			$un = $u['user'][0]['institute_name'];
			$role = $u['user'][0]['role'];
			
			if($role=='dept')
			{			  
			$this->session->set_userdata('session_user_name',$un);
			$data['drive']=$this->mymodelcrc->get_drive();
			$data['student']=$this->mymodelcrc->get_students($un);
				$this->load->view('home-institute',$data);
			}
			else
			{
				 $this->load->library('session');
            $this->session->set_flashdata('Login_failed','Invalid User name/ Password');
            $this->load->view('landingpage');
			}
			
		}		
        
        else{
            $this->load->library('session');
            $this->session->set_flashdata('Login_failed','Invalid User name/ Password');
            $this->load->view('landingpage');
            
        }
    }
	
	
		public function index()
	    {
		if($this->session->has_userdata('session_user_id'))
		{
			
			
			$user_id=$_SESSION['session_user_id'];
			$data['modify']=$this->mymodelcrc->get_personal($user_id);
			$this->load->view('dash-without',$data);
		}
		
	    }
	  
	  public function post_personal()
	{
		
		$user_name 		= $this->input->post('user_name');
		$user_id 	= $this->input->post('user_id');
		$roll	= $this->input->post('roll');
		$fname	= $this->input->post('fname');
		$focc	= $this->input->post('focc');
		$mnane	= $this->input->post('mname');
		$mocc	= $this->input->post('mocc');
		$college		= $this->input->post('college');
		$course		= $this->input->post('course');
		$stream		= $this->input->post('stream');
		$address		= $this->input->post('address');
		$native_place_city		= $this->input->post('native_place_city');
		$state		= $this->input->post('state');
		$pin		= $this->input->post('pin');
		$nationality		= $this->input->post('nationality');
		$adhar		= $this->input->post('adhar');
		$pan		= $this->input->post('pan');
		$mob1		= $this->input->post('mob1');
		$mob2		= $this->input->post('mob2');
		$mob3		= $this->input->post('mob3');
		$mob4		= $this->input->post('mob4');
		$back		= $this->input->post('back');
		$dob		= $this->input->post('dob');
		$peid		= $this->input->post('peid');
		$ceid		= $this->input->post('ceid');
		$land_line_no		= $this->input->post('land_line_no');
		$gender		= $this->input->post('gender');
		$caste		= $this->input->post('caste');
		
		

		$data = [
			'user_name'	=>$user_name,
			'roll'	=>$roll,
			'fname'	=>$fname,
			'focc'	=>$focc,
			'mnane'	=>$mname,
			'mocc'	=>$mocc,
			'college' =>$college,
			'course'  =>$course,
			'stream'  =>$stream,
			'address' =>$address,
			'native_place_city'  =>$native_place_city,
			'state'  =>$state,
			'pin' =>$pin,
			'nationality'  =>$nationality,
			'adhar'  =>$adhar,
			'pan' =>$pan,
			'mob1'  =>$mob1,
			'mob2'  =>$mob2,
			'mob3'  =>$mob3,
			'mob4'  =>$mob4,
			'back'  =>$back,
			'dob'  =>$dob,
			'ceid'  =>$ceid,
			'peid'  =>$peid,
			'land_line_no'  =>$land_line_no,
			'gender'  =>$gender,
			'caste'  =>$caste,
			'status' =>2
			
			
		];

			$this->session->set_userdata('session_user_id',$user_id);
            
   			
			$rs= $this->mymodelcrc->add_personal($data, $user_id);
			
			if($rs)
			{
	        $this->session->set_flashdata('success','Form Updated Sucessfully');
			return redirect('dash/index');
			}
			else
			{
				echo "Database Error, Contact to System Administrator...";
			}
	}
	
	
	public function qualfication()
	{
			if($this->session->has_userdata('session_user_id'))
			{
			
			$user_id=$_SESSION['session_user_id'];
			$data['modify']=$this->mymodelcrc->get_qualification($user_id);
			
			$this->load->view('qualification_without_data',$data);
			}	
	}
	
	public function post_qualfication()
	{
		$user_id = $_SESSION['session_user_id'];
		
		$tenth_school  = $this->input->post('tenth_school');
		$tenth_board  = $this->input->post('tenth_board');
		$tenth_pass_year  = $this->input->post('tenth_pass_year');
		$tenth_per  = $this->input->post('tenth_per');
		$twelve_school  = $this->input->post('twelve_school');
		$twelve_board  = $this->input->post('twelve_board');
		$twelve_pass_year  = $this->input->post('twelve_pass_year');
		$twelve_per  = $this->input->post('twelve_per');
		$twelve_stream  = $this->input->post('twelve_stream');
		$per_best_twelve_diploma = $this->input->post('per_best_twelve_diploma');
		
	   
		$data = [
			'tenth_school' => $tenth_school,
			'tenth_board' => $tenth_board,
			'tenth_pass_year' => $tenth_pass_year,
			'tenth_per' => $tenth_per,
			'twelve_school' => $twelve_school,
			'twelve_board' => $twelve_board,
			'twelve_pass_year' => $twelve_pass_year,
			'twelve_per' => $twelve_per,
			'twelve_stream' => $twelve_stream,
			'per_best_twelve_diploma'=> $per_best_twelve_diploma,
			'q_status' => 2
		];
		
			$rs = $this->mymodelcrc->add_qualification($data,$user_id);
			
			
			if($rs)
			{
			$this->session->set_flashdata('success','Form Updated Sucessfully');
			return redirect('dash/qualfication');
			}
			else
			{
			  echo "Database Error, Contact to System Administrator...";	
			}


	}
	
	
	public function academic1()
	{

		if($this->session->has_userdata('session_user_id')){
			$user_id=$_SESSION['session_user_id'];
			
			$data['modify']=$this->mymodelcrc->get_acedemic($user_id);
			
			$this->load->view('academic1-without-data',$data);
		}		
	}
	
	public function post_academic1()
	{
		$user_id = $_SESSION['session_user_id'];
		
		$dip_school  		= $this->input->post('dip_school');
		$dip_board  	= $this->input->post('dip_board');
		$dip_pass_year  		= $this->input->post('dip_pass_year');
		$dip_per= $this->input->post('dip_per');
		$dip_stream  = $this->input->post('dip_stream');
		$grad_school  			= $this->input->post('grad_school');
		$grad_board  	= $this->input->post('grad_board');
		$grad_pass_year  	= $this->input->post('grad_pass_year');
		$grad_per  			= $this->input->post('grad_per');
		$grad_stream 	= $this->input->post('grad_stream');
		$grad_course  	= $this->input->post('grad_course');
		$data=[
			
			'dip_school' 	=> $dip_school,
			'dip_board' => $dip_board,
			'dip_pass_year' 	=> $dip_pass_year,
			'dip_per' => $dip_per,
			'dip_stream'	  => $dip_stream,
			'grad_school' 	      => $grad_school,
			'grad_board' => $grad_board,
			'grad_pass_year'   => $grad_pass_year,
			'grad_per' 		  => $grad_per,
			'grad_stream' => $grad_stream,
			'grad_course'   => $grad_course,
			'a_status' =>2
		];
		
			
			$rs = $this->mymodelcrc->add_academic1($data, $user_id);
			if($rs)
			{
			$this->session->set_flashdata('success','Form Updated Sucessfully');
			return redirect('dash/academic1');
			}
			else
			{
				echo "Database Error, Contact to System Administrator...";	
			}
    		

	}
	
	
	public function academic2()
	{
		if($this->session->has_userdata('session_user_id')){
			
			$user_id=$_SESSION['session_user_id'];
			$data['modify']=$this->mymodelcrc->get_acedemic2($user_id);			
			$this->load->view('academic2-without-data',$data);
		}
	}
	
	
	public function post_academic2()
	{
		$user_id = $_SESSION['session_user_id'];
		
		$pg_school  		= $this->input->post('pg_school');
		$pg_stream  		= $this->input->post('pg_stream');
		$pg_per  		= $this->input->post('pg_per');
		$train_det  	= $this->input->post('train_det');
		$train_com  			= $this->input->post('train_com');
		$duration  		= $this->input->post('duration');
		$train_sts  			= $this->input->post('train_sts');
		$prj_title  			= $this->input->post('prj_title');
		


		$data = [
			'pg_school'   => $pg_school,
			'pg_stream' => $pg_stream,
			'pg_per'   => $pg_per,
			'train_det'   => $train_det,
			'train_com' 			=> $train_com,
			'duration'   		=> $duration,
			'train_sts'   		=> $train_sts,
			'prj_title' 			=> $prj_title,
			
			'a2_status'    =>2
		];

		

			
    		
    		$rs= $this->mymodelcrc->add_academic2($data, $user_id);
			if($rs)
			{
			$this->session->set_flashdata('success','Form Updated Sucessfully');
			return redirect('dash/academic2');
			}
			else
			{
				echo "Database Error, Contact to System Administrator...";	
			}
	}
	
	public function amcat()
	{
		if($this->session->has_userdata('session_user_id')){
			
			$user_id=$_SESSION['session_user_id'];
			$data['modify']=$this->mymodelcrc->get_amcat($user_id);
			$this->load->view('amcat',$data);
		}		
	}

	
	public function post_amcat()
	{
		$user_id = $_SESSION['session_user_id'];
		
		$amcat_e  			= $this->input->post('amcat_e');
		$amcat_l  		= $this->input->post('amcat_l');
		$amcat_q  				= $this->input->post('amcat_q');
		$amcat_c  	= $this->input->post('amcat_c');
		$amcat_a  	= $this->input->post('amcat_a');
		$amcat_f  	= $this->input->post('amcat_f');
		$amcat_cs  	= $this->input->post('amcat_cs');
		$amcat_ec  	= $this->input->post('amcat_ec');
		$amcat_me  	= $this->input->post('amcat_me');
		$amcat_x  	= $this->input->post('amcat_x');
		
		$data = [
			
			'amcat_e'   		=> $amcat_e,
			'amcat_l' 		=> $amcat_l,
			'amcat_q'   			=> $amcat_q,
			'amcat_c'   => $amcat_c,
             'amcat_a'   => $amcat_a,	
             'amcat_f'   => $amcat_f,	
			'amcat_cs'   => $amcat_cs,	
			'amcat_ec'   => $amcat_ec,	
			'amcat_me'   => $amcat_me,	
			'amcat_x'   => $amcat_x,	
			'amcat_status'   =>2
			 
		];
		
		
		$rs= $this->mymodelcrc->add_amcat($data, $user_id);
		if($rs)
			{
			$this->session->set_flashdata('success','Form Updated Sucessfully');
		return redirect('dash/amcat');
			}
			else
			{
				echo "Database Error, Contact to System Administrator...";	
			}
		
    		
	}
	
	public function preview()
	{
        if($this->session->has_userdata('session_user_id')){
            
			
			$user_id=$_SESSION['session_user_id'];
            $data['personal']=$this->mymodelcrc->get_personal($user_id);
            $data['qualification']=$this->mymodelcrc->get_qualification($user_id);
            $data['academic']=$this->mymodelcrc->get_acedemic($user_id);
            $data['academic2']=$this->mymodelcrc->get_acedemic2($user_id);
            $data['amcat']=$this->mymodelcrc->get_amcat($user_id);
           
			$this->load->view('preview',$data);
		}
		
    }
	
	
	public function logout()
	{
		    session_unset();
			session_destroy();
			return redirect('welcome/index');
	}
	  
	  
	  
	  
	public function new_user()
	{			
			session_unset();
			session_destroy();
			return redirect('welcome/index');
	}
	
	
    public function student_viewdrive($x)
	{
		$data['drive']= $this->mymodelcrc->get_details_drive($x);		
		$this->load->view('student-viewdrive',$data);
	}

	public function self_register($x,$y)
	{
		
		$rs= $this->mymodelcrc->checkdrive($x,$y);
        if($rs)
		{
			$this->session->set_userdata('session_msg',"Already Registered.....");
			$data['drive']=$this->mymodelcrc->get_drive();
				$this->load->view('home', $data);
		}
		else
		{
			$rs= $this->mymodelcrc->selfregister($x,$y);
			$data['drive']=$this->mymodelcrc->get_drive();
			$this->session->set_userdata('session_msg',"Resistration Complete.....");
				$this->load->view('home', $data);
		}
		
	}

	
	
	
	
	
	


	
	
	
	
	
	

	

	

	
	
}

