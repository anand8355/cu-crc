	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mymodelcrc extends CI_Model
{
	
	public function check_user($user_id)
	{
		$this->db->select('*');
		  $this->db->where('user_id',$user_id); 
		  $rs= $this->db->get('personal_details');
		  if( $rs->num_rows())
		return 1;
		else
		return 0;
	}
	
	public function add_user($data,$user_id)
	{
		$data1 = [
			'user_id'	=>$user_id
			];
		$rs= $this->db->insert('qualification_details', $data1);
		$rs= $this->db->insert('academic_details', $data1);
		$rs= $this->db->insert('academic2_details', $data1);
		$rs= $this->db->insert('amcat_details', $data1);
		$rs= $this->db->insert('personal_details', $data);
	return $rs;
	}
	
	public function isvalidate($user_id,$pass)
	{
		  $this->db->select('*');
		  $this->db->where('user_id',$user_id);
		  $this->db->where('password',$pass);		   
		  $rs= $this->db->get('personal_details');
		  return $rs->result_array();
	}
	
	public function isvalidate_user($user_id,$pass)
	{
		  $this->db->select('*');
		  $this->db->where('user_id',$user_id);
		  $this->db->where('password',$pass);		   
		  $rs= $this->db->get('user');
		  return $rs->result_array();
	}
	public function isvalidate_institute($user_id,$pass)
	{
		  $this->db->select('*');
		  $this->db->where('user_name',$user_id);
		  $this->db->where('password',$pass);		   
		  $rs= $this->db->get('institutes');
		  return $rs->result_array();
	}
	
	public function get_personal($user_id)
	{
		$this->db->select('*');
		$this->db->where('user_id',$user_id); 
		$rs= $this->db->get('personal_details');
		  return $rs->result_array();
	}
	
	public function add_personal($data, $user_id)
	{
		
	    $this->db->where('user_id',$user_id);
	    $rs= $this->db->update('personal_details', $data);
	   return $rs;
	}
	
	public function get_qualification($user_id)
	{
		$this->db->select('*');
		$this->db->where('user_id',$user_id); 
		$rs= $this->db->get('qualification_details');
		  return $rs->result_array();
	}
	
	public function add_qualification($data, $user_id)
	{
		
	    $this->db->where('user_id',$user_id);
	    $rs= $this->db->update('qualification_details', $data);
	   return $rs;
	}
	
	
	public function get_acedemic($user_id)
	{
		$this->db->select('*');
		$this->db->where('user_id',$user_id); 
		$rs= $this->db->get('academic_details');
		  return $rs->result_array();
	}
	
	public function add_academic1($data, $user_id)
	{
		
	    $this->db->where('user_id',$user_id);
	    $rs= $this->db->update('academic_details', $data);
	   return $rs;
	}
	
	public function get_acedemic2($user_id)
	{
		$this->db->select('*');
		$this->db->where('user_id',$user_id); 
		$rs= $this->db->get('academic2_details');
		  return $rs->result_array();
	}
	
	public function add_academic2($data, $user_id)
	{
		
	    $this->db->where('user_id',$user_id);
	    $rs= $this->db->update('academic2_details', $data);
	   return $rs;
	}
	
	public function get_amcat($user_id)
	{
		$this->db->select('*');
		$this->db->where('user_id',$user_id); 
		$rs= $this->db->get('amcat_details');
		  return $rs->result_array();
	}
	
	public function add_amcat($data, $user_id)
	{
		
	    $this->db->where('user_id',$user_id);
	    $rs= $this->db->update('amcat_details', $data);
	   return $rs;
	}
	
	public function add_drive($data)
	{		
		$rs= $this->db->insert('drive_details', $data);
		$insertId = $this->db->insert_id();
		return $insertId;
	   //return $rs;
	}
	
	public function get_drive()
	{		
	    $this->db->select('*');
		$this->db->where('drive_status',0);
		$this->db->order_by("drive_posted", "desc");
		$rs= $this->db->get('drive_details');
	   //$r= $rs->num_rows();
	   return $rs;
	}
	
	public function get_students($un)
	{		
	    $this->db->select('*');
		$this->db->where('college',$un);
		$this->db->where('status',0);		
		$rs= $this->db->get('personal_details');
	   //$r= $rs->num_rows();
	   return $rs;
	}
	
	public function get_details_drive($x)
	{
		$this->db->where('drive_id',$x);
		$this->db->where('drive_status',0);
	    $rs= $this->db->get('drive_details');
	   return $rs->result_array();
	}
	
	public function get_eligible($x)
	{		
	    $this->db->select('*');		
		$this->db->where('status',2);		
		$rs= $this->db->get('personal_details');
	   $r= $rs->num_rows();
	   return $r;
	}

	public function get_register($x)
	{		
	    $drive= "drive_".$x;
		$this->db->select('*');		
		$rs= $this->db->get($drive);
	   $r= $rs->num_rows();
	   return $r;
	}

	public function trash_drive($x, $data)
	{
		
	    $this->db->where('drive_id',$x);
	    $rs= $this->db->update('drive_details', $data);
	   return $rs;
	}
	
	public function get_trashed_details_drive()
	{
		$this->db->select('*');
		$this->db->where('drive_status',1);
	    $rs= $this->db->get('drive_details');
	   return $rs;
	}
	
	public function resume_drive($x, $data)
	{
		
	    $this->db->where('drive_id',$x);
	    $rs= $this->db->update('drive_details', $data);
	   return $rs;
	}
	
	public function delete_drive($x)
	{
		
	    $this->db->where('drive_id', $x);
	    $rs= $this->db->delete('drive_details');
	   return $rs;
	}

    public function selfregister($x,$y)
	{
		$drive= "drive_".$x;
		$data1 = [
			'name'	=>$y
			];
			$rs= $this->db->insert($drive, $data1);	   
	   return $rs;
	}

	public function checkdrive($x,$y)
	{
		$drive= "drive_".$x;
		$this->db->select('*');
		$this->db->where('name',$y);
	    $rs= $this->db->get($drive);
		if( $rs->num_rows())
		return 1;
		else
		return 0;
	}
   
	public function geteligiblestudent()
	{		
	    $this->db->select('*');		
		$this->db->where('status',2);		
		$rs= $this->db->get('personal_details');
	   	   return $rs;
	}

	public function getregisterstudent($x)
	{		
	    $drive= "drive_".$x;
		$sql ="select * from personal_details inner join $drive on personal_details.user_id = $drive.name";
		return $this->db->query($sql);
	}


}


?>