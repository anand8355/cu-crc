


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
	
	<div class="row">
	<div class="col-md-12" style="margin-top:30px;">
	
	
	
	<hr style="border: 6px solid green;">
	
	<h5> Recents Drives: </h5>
	
	<table class="table table-striped table-bordered"  id="myTable">
	<tr><td><b>Name</b></td><td><?php echo $personal[0]['user_name']; ?></td></tr>
	<tr><td><b>UID </b></td><td><?php echo $personal[0]['user_id']; ?></td></tr>
	<tr><td><b>Passing Year</b></td><td><?php echo $personal[0]['roll']; ?></td></tr>
	<tr><td><b>Institute</b></td><td><?php echo $personal[0]['college']; ?></td></tr>
	<tr><td><b>Current Course</b></td><td><?php echo $personal[0]['course']; ?></td></tr>
	<tr><td><b>Current Stream </b></td><td><?php echo $personal[0]['stream']; ?></td></tr>
	<tr><td><b>CU E-Mail id </b></td><td><?php echo $personal[0]['ceid']; ?></td></tr>
	<tr><td><b>Personal E-Mail Id </b></td><td><?php echo $personal[0]['peid']; ?></td></tr>
	<tr><td><b>Gender</b></td><td><?php echo $personal[0]['gender']; ?></td></tr>
	<tr><td><b>Category</b></td><td><?php echo $personal[0]['caste']; ?></td></tr>
	<tr><td><a href="<?php echo base_url();?>crc/confirm_regis/<?php  echo $personal[0]['user_id'];?>" class="btn btn-success">Confirm Registration</a></td><td></td></tr>
	
	
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

