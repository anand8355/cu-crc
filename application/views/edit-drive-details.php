<?php include 'crc-navbar.php';?>

<div class="container" style="margin-top:1px;">
<?php include 'nav1.php';?>

    <div class="row" style="margin-top:50px;">
	
	<div class="col-md-12 text-center text-primary">
	<h5> Drive Information </h5>
	</div>
	</div>
	 <div class="row" style="margin-top:5px;">
	 <div class="col-md-2"></div>
	<div class="col-md-9">
	<form action="<?php echo base_url(); ?>crc/add_drive" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Name of the Company*</label>
    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" value="<?php echo $drive[0]['name'];?>" required >
   
  </div>
  <div class="form-row">
  <div class="form-group col-md-4">
    <label for="exampleInputPassword1">Type of Drive*</label>
    <input type="text" class="form-control" id="type" name="type" value="<?php echo $drive[0]['type'];?>" required>
  </div>
  <div class="form-group col-md-4">
    <label for="exampleInputPassword1">Date of Campus Drive*</label>
    <input type="date" class="form-control" id="drive_date" name="drive_date"  value="<?php echo $drive[0]['drive_date'];?>" required>
  </div>
   <div class="form-group col-md-4">
    <label for="exampleInputPassword1">Batch* (i.e 2021)</label>
    <input type="text" class="form-control" id="batch" name="batch"  value="<?php echo $drive[0]['batch'];?>" required>
  </div>
  </div>
  
  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="exampleInputPassword1">Total Days for dirve*</label>
    <input type="text" class="form-control" id="total_date" name="total_date" value="<?php echo $drive[0]['total_date'];?>" required>
  </div>
  <div class="form-group col-md-6">
    <label for="exampleInputPassword1">Job Location*</label>
    <input type="text" class="form-control" id="loc" name="loc" value="<?php echo $drive[0]['loc'];?>" required>
  </div>
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Company Profile*</label>
    <input type="text" class="form-control" id="profile" name="profile"  value="<?php echo $drive[0]['profile'];?>" required>
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Company Website*</label>
    <input type="text" class="form-control" id="web" name="web" value="<?php echo $drive[0]['web'];?>" required>
  </div>
  
  
  <div class="form-group">
    <label for="exampleInputPassword1">Stream Required*</label>
    <input type="text" class="form-control" id="stream" name="stream" value="<?php echo $drive[0]['stream'];?>" required>
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Eligibility Criteria*</label>
    <input type="text" class="form-control" id="cri" name="cri" value="<?php echo $drive[0]['cri'];?>" required>
  </div>
  
 
  
  
  <div class="form-group">
    <label for="exampleInputPassword1">Position*</label>
    <input type="text" class="form-control" id="pos" name="pos" value="<?php echo $drive[0]['pos'];?>" required>
  </div>
  
  
  
  
  
  <div class="form-group">
    <label for="exampleInputPassword1">Skills Required*</label>
    <input type="text" class="form-control" id="skill" name="skill"  value="<?php echo $drive[0]['skill'];?>" required>
  </div>
  
  
  
  
  <div class="form-row">
  <div class="form-group col-md-4">
    <label for="exampleInputPassword1">Date of Joining*</label>
    <input type="date" class="form-control" id="join1" name="join1" value="<?php echo $drive[0]['join1'];?>" required>
  </div>
  <div class="form-group col-md-4">
    <label for="exampleInputPassword1">Any Bond or Fee* (YES/NO)</label>
    <input type="text" class="form-control" id="bond" name="bond" value="<?php echo $drive[0]['bond'];?>" required>
  </div>
  <div class="form-group col-md-4">
    <label for="exampleInputPassword1">Job Profile*</label>
    <input type="text" class="form-control" id="jprofile" name="jprofile" value="<?php echo $drive[0]['jprofile'];?>" required>
  </div>
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Pay package*</label>
    <input type="text" class="form-control" id="pack" name="pack" value="<?php echo $drive[0]['pack'];?>" required>
  </div>
  
  
  
  <div class="form-group">
    <label for="exampleInputPassword1">Placement Process*</label>
    <input type="text" class="form-control" id="placement" name="placement"  value="<?php echo $drive[0]['placement'];?>" required>
  </div>
  
  
  <button type="submit" class="btn btn-primary">Update Drive</button>
  <a class="btn btn-primary">Back</a>
</form>
	
	
	</div>
	
	
        
    </div>
	
	

</div>

<?php include 'footer.php';?>
</body>
</html>
