	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mycrc extends CI_Model
{
	
	public function get_institute()
	{		
	    $this->db->select('*');
		$this->db->where('institure_status',0);
		$this->db->order_by("institute_name", "asc");
		$rs= $this->db->get('institutes');
	   //$r= $rs->num_rows();
	   return $rs;
	}
	
	public function get_courses()
	{		
	    $this->db->select('*');
		$this->db->where('course_status',0);
		$this->db->order_by("course_name", "asc");
		$rs= $this->db->get('courses');
	   //$r= $rs->num_rows();
	   return $rs;
	}
	
	public function get_stream()
	{		
	    $this->db->select('*');
		$this->db->where('stream_status',0);
		$this->db->order_by("stream_name", "asc");
		$rs= $this->db->get('stream');
	   //$r= $rs->num_rows();
	   return $rs;
	}
	
	public function get_studentprofile($user_id)
	{
		$this->db->select('*');
		$this->db->where('user_id',$user_id); 
		$rs= $this->db->get('personal_details');
		  return $rs->result_array();
	}
	
	public function confirm_student($data, $user_id)
	{
		
	    $this->db->where('user_id',$user_id);
	    $rs= $this->db->update('personal_details', $data);
	   return $rs;
	}
	
	public function add_col($col)
	{
		$fields = array(
			$col => array('type' => 'TEXT')
	);
	$r= 	$this->dbforge->add_column('driveinfo', $fields);
	
	return $r;
	}



}


?>