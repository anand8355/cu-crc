<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Crc extends CI_Controller 
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
	public function index()
	{
		
			$this->load->view('newdrive');
		
	}
	
	public function add_drive()
	{
		$tenage  	= 0;
		$twage  	= 0;
		$dipage  	= 0;
		$ugage  	= 0;
		$pgage  	= 0;
		$backlog  	= 0;
			
		$name  		= $this->input->post('name');
		$type  	= $this->input->post('type');
		$drive_date  		= $this->input->post('drive_date');
		$batch= $this->input->post('batch');
		$total_date  = $this->input->post('total_date');
		$loc  			= $this->input->post('loc');
		$profile  	= $this->input->post('profile');
		$web  	= $this->input->post('web');
		$stream  			= $this->input->post('stream');
		$cri 	= $this->input->post('cri');
		$pos  	= $this->input->post('pos');		
		$skill  	= $this->input->post('skill');		
		$join1  	= $this->input->post('join1');
		$bond  	= $this->input->post('bond');
		$jprofile  	= $this->input->post('jprofile');
		$pack  	= $this->input->post('pack');
		$placement  	= $this->input->post('placement');
		$tenage  	= $this->input->post('tenage');
		$twage  	= $this->input->post('twage');
		$dipage  	= $this->input->post('dipage');
		$ugage  	= $this->input->post('ugage');
		$pgage  	= $this->input->post('pgage');
		$backlog  	= $this->input->post('backlog');
		$mode  	= $this->input->post('mode');
		$gen  	= $this->input->post('gen');
		$val  	= $this->input->post('val');
		$data=[
			
			'name' 	=> $name,
			'type' => $type,
			'drive_date' 	=> $drive_date,
			'batch' => $batch,
			'total_date'	  => $total_date,
			'loc' 	      => $loc,
			'profile' => $profile,
			'web'   => $web,
			'stream' 		  => $stream,
			'cri' => $cri,
			'pos'   => $pos,
			'skill'   => $skill,
			'join1'   => $join1,
			'bond'   => $bond,
			'jprofile'   => $jprofile,
			'pack'   => $pack,
			'placement'   => $placement,
			'tenage'   => $tenage,
			'twage'   => $twage,
			'dipage'   => $dipage,			
			'ugage'   => $ugage,
			'pgage'   => $pgage,
			'backlog'   => $backlog,
			'mode'   => $mode,
			'gen'   => $gen,
			'val'   => $val,
			'drive_status' =>1
		];
		
		
			$rs = $this->mymodelcrc->add_drive($data);
			if($rs)
			{
			$this->session->set_flashdata('success','Drive Posted Successfully');
			     	
			return redirect('dash/home_crc');
			}
			else
			{
				echo "Database Error, Contact to System Administrator...";	
			}
		
	}
	
		public function editdrive()
	{
		    $data['drive']=$this->mymodelcrc->get_drive();
			$this->load->view('edit-drive', $data);
		
	}
	
	public function editdrivedetails($x)
	{
		$data['drive']= $this->mymodelcrc->get_details_drive($x);		
		$this->load->view('edit-drive-details',$data);
	}
	
	public function trashdrive($x)
	{
		$data=[	'drive_status' 	=> 1	];
		
		$rs= $this->mymodelcrc->trash_drive($x, $data);		
		if($rs)
		{$data['drive']=$this->mymodelcrc->get_drive();
			$this->load->view('edit-drive', $data);
		}
		else
		{
			echo "Database Error, Contact to System Administrator...";	
		}
	}
	
	public function trasheddrive()
	{
		    $data['drive']=$this->mymodelcrc->get_trashed_details_drive();
			$this->load->view('trashed-drive', $data);
		
	}
	
	public function resumedrive($x)
	{
		$data=[	'drive_status' 	=> 0	];
		
		$rs= $this->mymodelcrc->resume_drive($x, $data);		
		if($rs)
		{$data['drive']=$this->mymodelcrc->get_drive();
			$this->load->view('edit-drive', $data);
		}
		else
		{
			echo "Database Error, Contact to System Administrator...";	
		}
	}
	
	public function deletedrive($x)
	{
		
		$rs= $this->mymodelcrc->delete_drive($x);	
		
		if($rs)
		{$data['drive']=$this->mymodelcrc->get_drive();
			$this->load->view('edit-drive', $data);
		}
		else
		{
			echo "Database Error, Contact to System Administrator...";	
		}
	}
	
	
	public function viewdrive($x)
	{
		$data['drive']= $this->mymodelcrc->get_details_drive($x);		
		$this->load->view('viewdrive',$data);
	}
	
	public function get_student_profile($user_id)
	{
	  $data['personal']= $this->mycrc->get_studentprofile($user_id);		
		$this->load->view('student-profile',$data);	
	}
	
	public function confirm_regis($user_id)
	{
		 $data=[	'status' 	=> 1	];
	  $data['personal']= $this->mycrc->confirm_student($data, $user_id);		
		$data['drive']=$this->mymodelcrc->get_drive();
			$data['student']=$this->mymodelcrc->get_students($_SESSION['session_user_name']);
				$this->load->view('home-institute',$data);	
	}
	
	public function get_eligible_student($drive_id)
	{
	 $this->load->view('eligible-student');	
	 }
	
}

