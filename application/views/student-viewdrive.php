<?php include 'header.php';?>
</head>

<body>
<?php include 'navbar.php';?>

<div class="container" style="margin-top:1px;">


    <div class="row" style="margin-top:50px;">
	
	<div class="col-md-12 text-center text-primary">
	
	</div>
	</div>
	 <div class="row" style="margin-top:5px;">
	 
	<div class="col-md-9">
	<h5> Drive Information <a href="<?php  echo base_url();?>dash/home" class="btn btn-success"> Back to Recents Drives List</a></h5>
	<br>
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
