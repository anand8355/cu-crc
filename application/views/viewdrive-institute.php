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
<?php include 'nav1.php';?>

    <div class="row" style="margin-top:50px;">
	
	<div class="col-md-12 text-center text-primary">
	<h5> Drive Information </h5>
	</div>
	</div>
	 <div class="row" style="margin-top:5px;">
	 
	<div class="col-md-9">
	<table class="table table-striped table-bordered" style="width:100%" id="myTable">
	<tr>
	<td><b>Name of the Company</b></td>
	<td><?php echo $drive[0]['name'];?></td>
	</tr>
	<tr>
	<td><b>Type of Drive</b></td>
	<td><?php echo $drive[0]['type'];?></td>
	</tr>
	<tr>
	<td><b>Date of Campus Drive</b></td>
	<td><?php echo $drive[0]['drive_date'];?></td>
	</tr>
	<tr>
	<td><b>Batch</b></td>
	<td><?php echo $drive[0]['batch'];?></td>
	</tr>
	<tr>
	<td><b>Total Days for dirve</b></td>
	<td><?php echo $drive[0]['total_date'];?></td>
	</tr>
	<tr>
	<td><b>Job Location</b></td>
	<td><?php echo $drive[0]['loc'];?></td>
	</tr>
	<tr>
	<td><b>Company Profile</b></td>
	<td><?php echo $drive[0]['profile'];?></td>
	</tr>
	<tr>
	<td><b>Company Website</b></td>
	<td><?php echo $drive[0]['web'];?></td>
	</tr>
	<tr>
	<td><b>Stream Required</b></td>
	<td><?php echo $drive[0]['st_req0'];?>,&nbsp;<?php echo $drive[0]['st_req1'];?>,&nbsp;<?php echo $drive[0]['st_req2'];?>,&nbsp;
	<?php echo $drive[0]['st_req3'];?>,&nbsp;<?php echo $drive[0]['st_req4'];?>,&nbsp;<?php echo $drive[0]['st_req5'];?>,&nbsp;
	<?php echo $drive[0]['st_req6'];?>,&nbsp;<?php echo $drive[0]['st_req7'];?>,<?php echo $drive[0]['st_req8'];?>,&nbsp;
    <?php echo $drive[0]['st_req9'];?>,<?php echo $drive[0]['st_req10'];?></td>
	</tr>
	<tr>
	<td><b>Eligibility Criteria</b></td>
	<td>10<sup>th</sup> %age >: <?php echo $drive[0]['tenage'];?><br>
	12<sup>th</sup> %age >: <?php echo $drive[0]['twage'];?><br>
	Dip %age >: <?php echo $drive[0]['dipage'];?><br>
	UG %age >: <?php echo $drive[0]['ugage'];?><br>
	PG %age >: <?php echo $drive[0]['pgage'];?><br>
	Backlog ==: <?php echo $drive[0]['backlog'];?><br>
	Male/Female : <?php echo $drive[0]['mode'];?><br>
</td>
	</tr>
	<tr>
	<td><b>Position</b></td>
	<td><?php echo $drive[0]['pos'];?></td>
	</tr>
	<tr>
	<td><b>Skills Required</b></td>
	<td><?php echo $drive[0]['skill'];?></td>
	</tr>
	<tr>
	<td><b>Date of Joining</b></td>
	<td><?php echo $drive[0]['join1'];?></td>
	</tr>
	<tr>
	<td><b>Any Bond or Fee</b></td>
	<td><?php echo $drive[0]['bond'];?></td>
	</tr>
	<tr>
	<td><b>Job Profile</b></td>
	<td><?php echo $drive[0]['jprofile'];?></td>
	</tr>
	<tr>
	<td><b>Pay package</b></td>
	<td><?php echo $drive[0]['pack'];?></td>
	</tr>
	
	<tr>
	<td><b>Placement Process</b></td>
	<td><?php echo $drive[0]['placement'];?></td>
	</tr>
	
	
	</table>
	
	
	</div>

	
	
        
    </div>
	
	

</div>
<?php include 'footer.php';?>
</body>
</html>
