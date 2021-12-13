<?php include 'crc-navbar.php';?>

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
	<td><?php echo $drive[0]['stream'];?></td>
	</tr>
	<tr>
	<td><b>Eligibility Criteria</b></td>
	<td><?php echo $drive[0]['cri'];?></td>
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
	<div class="col-md-3">
	<h5> No of Eligible Students: <br>
	<a href="<?php  echo base_url();?>crc/get_eligible_student/<?php echo $drive[0]['drive_id'];?>" >0&nbsp; </a>[<a href="#" ><i>Download</i></a>]</h5>
	<br>
	
	<h5> No of Students Registered: <br>
	<a href="#" >0&nbsp; </a>[<a href="#" ><i>Download</i></a>]</h5>
	<br>
	
	<h5> No of Students Not Applied: <br>
	<a href="#" >0&nbsp; </a>[<a href="#" ><i>Download</i></a>]</h5>
	<br>
	
	<h5> No of Students Appeared: <br>
	<a href="#" >0&nbsp; </a>[<a href="#" ><i>Download</i></a>]</h5>
	<br>
	
	<h5> No of Students Absent: <br>
	<a href="#" >0&nbsp; </a>[<a href="#" ><i>Download</i></a>]</h5>
	
	
	
	
	
	
	</div>
	
	
        
    </div>
	
	

</div>
<?php include 'footer.php';?>
</body>
</html>
