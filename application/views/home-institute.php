<!DOCTYPE html>
<html lang="en">
<head>
  <title>CU-CRC-Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
</head>
<body>
<div class="row" style="margin-top:5px;">
    <div class="col-md-3 text-center" > 
         <a href="<?php echo base_url();?>dash/home_institute/"><img src="<?php echo base_url();?>assets/img/homepage-logo-6.png" height="70px" ></img></a>
	</div>
    <div class="col-md-9 col-sm-9 text-center" style="background-color:#192B4D;height:60px;padding-top:10px;color:white">
         <h2> CU - CRC Portal 
         </h2>
		
	</div>
    
 </div>



<div class="container" style="margin-top:1px;">
   <h5> <b>Welcome,</b>&nbsp;&nbsp;<?php echo $_SESSION['session_user_name'];?>&nbsp; [<span style="font-size:17px;"><i><a href="#">Change Password</a></i></span>][<span style="font-size:17px;"><i><a href="<?php echo base_url();?>welcome/index">Logout</a></i></span>]</h5> 
   <hr style="color:black;">
   <?php 
	$r = $drive->num_rows();
	$rw= $drive->result_array();
	$i=0;
	
	$r1 = $student->num_rows();
	$rw1= $student->result_array();
	$j=0;
	
	
	?>

<div class="row">
	<div class="col-md-12" style="margin-top:30px;">
	
    <div class="row">
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Total No. of Students with CRC Portal</h6>
      
        <a href="#" class="btn btn-primary"><?php echo "8"; ?></a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Students Placed</h6>
      
        <a href="#" class="btn btn-primary"><?php echo "1"; ?></a>
      </div>
    </div>
  </div>


  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Students Completed Their Profile</h6>
      
        <a href="#" class="btn btn-primary"><?php echo "1"; ?></a>
      </div>
    </div>
  </div>
</div>
</div>
</div>


	<div class="row">
	<div class="col-md-8" style="margin-top:30px;">
	
	<hr style="border: 2px solid green;">
	
	<h5> Recents Drives</h5>
	<?php while($i<$r){ ?>
	<div class="card" style="margin-top:20px;">
     <div class="card-header"><b><?php  echo $rw[$i]['name'];?></b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>Dated: <?php  echo $rw[$i]['drive_posted'];?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	 <a href="<?php  echo base_url();?>crc/viewdriveinstitute/<?php  echo $rw[$i]['drive_id'];?>" class="btn btn-success">View Detail</a></div>
	 </div>
	 <?php $i= $i+1; }?>
	 
	
	
	</div>
  <div class="col-md-4" style="margin-top:30px;">
  <hr style="border: 2px solid red;">
  <h5> <i>Notices/Updates</i></h5>
  <ol>
  <li><i>Placement Drive of Infosys will be on 12th Feb 2022.</i></li>
  </ol>
  </div>

	</div>
	
	<div class="row">
	
	<div class="col-md-12" style="margin-top:30px;">
	<hr style="border: 2px solid green;">
	<h5> Student's Request for Profile Update Approval</h5>
	<hr>
	<table class="table table-striped table-bordered"  id="myTable">
    <thead>
      <tr>
	    <th> Sr. No. </th>
        <th> Student Name</th>
		 <th> UID </th>
		 <th>Operation</th>
      </tr>
    </thead>
    <tbody>
	<?php while($j<$r1){ ?>
	<tr><td><?php  echo $j+1;?></td>
	<td><?php  echo $rw1[$j]['user_name'];?></td>
	<td><?php  echo $rw1[$j]['user_id'];?></td>
	<td><a href="<?php  echo base_url();?>crc/get_student_profile/<?php  echo $rw1[$j]['user_id'];?>" class="btn btn-info">View Profile</a></td></tr>
	 <?php $j= $j+1; }?>
	
	</tbody>
  </table>
	</div>
	</div>

</div>


<footer>
<div style="background-color:black;height:40px;margin-top:70px">
        <div class="col-md-12 text-center" style="color:white;padding-top:7px">
        
      <span > Copyright &copy; Chandigarh University - All right reserved. </span>
    </div>
	</div>
	
</footer>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
	</script>
</body>
</html>

