<?php include 'header.php';?>
</head>

<body>


<div class="container-fluid">
<?php include 'navbar.php';?>
    <div class="row">
	
        <div class="col-md-2"></div>

        <div class="col-md-8 bg-light" style="margin-top:50px" >
		<?php  if($msg=$this->session->flashdata('success')) : ?>
                      
                        <div class="col-lg-12">
                          <div class="alert alert-success ">
                            <?php echo $msg;?>
                          </div>
                        </div>
                     
            <?php  endif; ?>
			<?php 
			$r = $institute->num_rows();
	$rw= $institute->result_array();
	$i=0;
	$r1 = $course->num_rows();
	$rw1= $course->result_array();
	$j=0;
	$r2 = $stream->num_rows();
	$rw2= $stream->result_array();
	$k=0;
	?>
		<h4 >New User Registration</h4>
		<hr>
        <form action="<?php echo base_url('dash/add_newuser/');?>" name="personal" method="POST">
		
			<div class="form-row">
				<div class=" form-group col-md-4">
			   		<label for="validationDefault01">Name *</label>
                    <input type="text" class="form-control" id="validationDefault01" placeholder="name" value="<?php echo $modify['name'];?>" required name="user_name">
				</div>
					
				<div class="form-group col-md-4">
					<label for="validationDefault01">UID *</label>
					<span id="user_id2" style="color:green;"><br><b><?php echo $modify['user_id'];?></b></span>
				 	<input type="text" class="form-control" placeholder="Admission no." value="<?php echo $modify['user_id'];?>"id="user_id" required name="user_id" >
			 	</div>

                <div class="form-group col-md-4">
					<label for="validationDefault03"><span class="glyphicon glyphicon-earphone" aria-hidden="true" ></span> Passing Year *</label>
                    
					<select class="form-control" id="validationDefault03" placeholder="Roll No" value="<?php echo $modify['mobile_no'];?>" required name="roll">
					<option value=""></option>
					<option value="2020">2020</option>
					<option value="2021">2021</option>
					<option value="2022">2022</option>
					<option value="2023">2023</option>
					<option value="2024">2024</option>
					<option value="2025">2025</option>
					<option value="2026">2026</option>
					
					</select>
					
			   	</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-4">
					<label for="inputCity">Institute*</label>
                   	<select class="form-control" id="inputCity" required value="<?php echo $modify['city'];?>" name="college">
					<option value=""></option>
					<?php while($i<$r){ ?>
					<option value="<?php  echo $rw[$i]['institute_name'];?>"><?php  echo $rw[$i]['institute_name'];?></option>
					<?php $i= $i+1; }?>
					</select>
				</div>
                      
				<div class="form-group col-md-4">
					<label for="inputState">Current Course*</label>
                   
					<select class="form-control" id="inputState" required value="<?php echo $modify['state'];?>" name="course">
					<option value=""></option>
					<?php while($j<$r1){ ?>
					<option value="<?php  echo $rw1[$j]['course_name'];?>"><?php  echo $rw1[$j]['course_name'];?></option>
					<?php $j= $j+1; }?>
					</select>
				</div>

				<div class="form-group col-md-4">
					<label for="inputZip">Current Stream*</label>
                  	
					<select class="form-control" id="inputZip" required value="<?php echo $modify['zip'];?>" name="stream">
					<option value=""></option>
					<?php while($k<$r2){ ?>
					<option value="<?php  echo $rw2[$k]['stream_name'];?>"><?php  echo $rw2[$k]['stream_name'];?></option>
					<?php $k= $k+1; }?>
					</select>					
				</div>
			</div>
			<div class="form-row">
			
			     <div class="form-group col-md-4">
					<label for="inputZip">CU Email ID</label>
                  	<input type="email" class="form-control" id="cemail"  value="<?php echo $modify['zip'];?>" name="ceid"> 
				</div>
				<div class="form-group col-md-3">
					<label for="inputCity">Personal Email ID*</label>
                    <input type="email" class="form-control" id="pemail"  required value="<?php echo $modify['city'];?>" name="peid">
				</div>

				<div class="form-group col-md-2">
					<label for="inputState">Select Gender*</label>
                    <select id="gender" name="gender" class="form-control" required>
					<option value=""></option>
					<option value="m">Male</option>
					<option value="f">Female</option><option value="o">Other</option></select>
				</div>	

				<div class="form-group col-md-3">
					<label for="inputZip">Category*</label>
                  	
                    <select class="form-control" id="caste" required value="<?php echo $modify['zip'];?>" name="caste">
					<option value=""> </option>
					<option value="gen">GEN</option>
					<option value="sc">SC</option>
					<option value="st">ST</option>
					<option value="obc">OBC</option>
					<option value="other">Other</option>
                    </select>					
				</div>
				
				
			</div>
			
			<div class="buttons col-md-12">    
				<!-- <button type="submit" class="btn btn-danger" >&larr; BACK</button>	 -->
				<button type="submit" class="btn btn-primary" onclick="validate()">Register </button> 
                				
			</div>
		</form>
		
        </div>

		
        
    
</div>
</div>

<?php include 'footer.php';?>

