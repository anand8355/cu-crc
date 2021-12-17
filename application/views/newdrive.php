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
    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" required >
   
  </div>
  <div class="form-row">
  <div class="form-group col-md-4">
    <label for="exampleInputPassword1">Type of Drive*</label>
    <input type="text" class="form-control" id="type" name="type" required>
  </div>
  <div class="form-group col-md-4">
    <label for="exampleInputPassword1">Date of Campus Drive</label>
    <input type="date" class="form-control" id="drive_date" name="drive_date" >
  </div>
   <div class="form-group col-md-4">
    <label for="exampleInputPassword1">Batch* (i.e 2021)</label>
    <input type="text" class="form-control" id="batch" name="batch" required>
  </div>
  </div>
  
  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="exampleInputPassword1">Total Days for dirve</label>
    <input type="text" class="form-control" id="total_date" name="total_date" >
  </div>
  <div class="form-group col-md-6">
    <label for="exampleInputPassword1">Job Location*</label>
    <input type="text" class="form-control" id="loc" name="loc" required>
  </div>
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Company Profile*</label>
    <input type="text" class="form-control" id="profile" name="profile" required>
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Company Website*</label>
    <input type="text" class="form-control" id="web" name="web" required>
  </div>
  
  
  <div class="form-group">
    <label for="exampleInputPassword1">Stream Required*</label>
    
  </div>
  <?php
$r2 = $stream->num_rows();
$rw2= $stream->result_array();
$k=0;

?>
  <div class="form-row">
  <?php while($k<$r2){ ?>
  <div class="form-group col-md-4">
   <input type="checkbox" id="tenage" name="stream_req[]" value="<?php  echo $rw2[$k]['stream_name'];?>"> <label for="exampleInputPassword1"><?php  echo $rw2[$k]['stream_name'];?></label>
</div>
<?php $k= $k+1; }?>
<div class="form-group col-md-1">
   <input type="checkbox" id="tenage" name="tenage">
</div>
</div>

  <div class="form-group">
    <label for="exampleInputPassword1">Eligibility Criteria* (<i> Please mention percentage, if not applicable fill 0</i>)</label>
    
  </div>
  
  <div class="form-row">
  <div class="form-group col-md-1">
    <label for="exampleInputPassword1">10<sup>th</sup>*</label>
    <input type="number" class="form-control" id="tenage" name="tenage" required>
  </div>
  <div class="form-group col-md-1">
    <label for="exampleInputPassword1">12<sup>th</sup>*</label>
    <input type="number" class="form-control" id="twage" name="twage" required>
  </div>
  <div class="form-group col-md-1">
    <label for="exampleInputPassword1">Dip*</label>
    <input type="number" class="form-control" id="dipage" name="dipage" required>
  </div>
  <div class="form-group col-md-1">
    <label for="exampleInputPassword1">UG*</label>
    <input type="number" class="form-control" id="ugage" name="ugage" required>
  </div>
  <div class="form-group col-md-1">
    <label for="exampleInputPassword1">PG*</label>
    <input type="number" class="form-control" id="pgage" name="pgage" required>
  </div>
  <div class="form-group col-md-2">
    <label for="exampleInputPassword1">Backlog*</label>
    <input type="number" class="form-control" id="backlog" name="backlog" required>
  </div>
  <div class="form-group col-md-2">
    <label for="exampleInputPassword1">Status*</label>
   <select id="mode" name="mode" class="form-control" required>
   <option value=""></option>
   <option value="placed">placed</option>
   <option value="unplaced">Unplaced</option>
   <option value="b">Both</option>
   </select>
  </div>
  <div class="form-group col-md-2">
  <label for="exampleInputPassword1">Gender*</label>
   <select id="gen" name="gen" class="form-control" required>
   <option value=""></option>
   <option value="m">Male</option>
   <option value="f">Female</option>
   <option value="b">Both</option>
   </select>
  </div>
  </div>
  
 
  
  
  <div class="form-group">
    <label for="exampleInputPassword1">Position*</label>
    <input type="text" class="form-control" id="pos" name="pos" required>
  </div>
  
  
  
  
  
  <div class="form-group">
    <label for="exampleInputPassword1">Skills Required*</label>
    <input type="text" class="form-control" id="skill" name="skill" required>
  </div>
  
  
  
  
  <div class="form-row">
  <div class="form-group col-md-4">
    <label for="exampleInputPassword1">Date of Joining</label>
    <input type="date" class="form-control" id="join1" name="join1" >
  </div>
  <div class="form-group col-md-4">
    <label for="exampleInputPassword1">Any Bond or Fee* (YES/NO)</label>
    <input type="text" class="form-control" id="bond" name="bond" required>
  </div>
  <div class="form-group col-md-4">
    <label for="exampleInputPassword1">Job Profile*</label>
    <input type="text" class="form-control" id="jprofile" name="jprofile" required>
  </div>
  </div>
  
  <div class="form-row">
  <div class="form-group col-md-9">
    <label for="exampleInputPassword1">Pay package*</label>
    <input type="text" class="form-control" id="pack" name="pack" required>
  </div>
  <div class="form-group col-md-3">
    <label for="exampleInputPassword1">Pay Value*</label>
    <input type="text" class="form-control" id="val" name="val" required>
  </div>
  </div>
  
  
  
  <div class="form-group">
    <label for="exampleInputPassword1">Placement Process*</label>
    <input type="text" class="form-control" id="placement" name="placement" required>
  </div>
  
  
  <button type="submit" class="btn btn-primary">Post Drive</button>
  <a class="btn btn-primary">Preview</a>
</form>
	
	
	</div>
	
	
        
    </div>
	
	

</div>
<?php include 'footer.php';?>
</body>
</html>
