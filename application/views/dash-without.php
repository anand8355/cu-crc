


<?php include 'header.php';?>
</head>

<body>
<?php include 'navbar.php';?>

<div class="container-fluid">
    <div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-9 ">
	       <p> <b>Welcome, </b><?php echo $modify[0]['user_name'];?>&nbsp;&nbsp;&nbsp;[<a href="<?php echo base_url('login/logout');?>"  style="padding-top:2px;"><span class="text-danger">Logout</span></a>]</p>
		  
		</div>
        <?php include 'leftside.php';?>

        <div class="col-md-8 bg-light" style="margin-top:50px" >
		<?php  if($msg=$this->session->flashdata('success')) : ?>
                      
                        <div class="col-lg-12">
                          <div class="alert alert-success ">
                            <?php echo $msg;?>
                          </div>
                        </div>
                     
            <?php  endif; ?>
		<h4 >Personal Information</h4>
		
        <form action="<?php echo base_url('dash/post_personal/');?>" name="personal" method="POST">
		
			<div class="form-row">
				<div class=" form-group col-md-4">
			   		<label for="validationDefault01">Name *</label>
                    <input type="text" class="form-control" id="validationDefault01"  value="<?php echo $modify[0]['user_name'];?>" required name="user_name">
				</div>
					
				<div class="form-group col-md-4">
					<label for="validationDefault01">UID *</label>
					<span id="user_id2" style="color:green;"><br><b><?php echo $modify[0]['user_id'];?></b></span>
				 	<input type="text" class="form-control"  value="<?php echo $modify[0]['user_id'];?>"id="user_id" required name="user_id" >
			 	</div>

                <div class="form-group col-md-4">
					<label for="validationDefault03"><span class="glyphicon glyphicon-earphone" aria-hidden="true" ></span> Roll No *</label>
                    <input type="text" class="form-control" id="validationDefault03" value="<?php echo $modify[0]['roll'];?>" required name="roll" >
			   	</div>
			</div>
				   
			<div class="form-row">		   
      			<div class="form-group col-md-7">
				   	<label for="validationDefault03"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Father's Name*</label>
                        <input type="text" class="form-control" id="validationDefault03"  value="<?php echo $modify[0]['fname'];?>" required name="fname" >
                        
				</div>

				<div class="form-group col-md-5">
					<label for="validationDefault04"> Father's Occupation </label>
                    <input type="text" class="form-control" id="validationDefault04" value="<?php echo $modify[0]['focc'];?>" name="focc" >
				</div>
			</div>
				      
			<div class="form-row">
			   	<div class="form-group col-md-7">
			   		<label for="inputAddress">Mother's Name</label>
                	<input type="text" class="form-control" id="inputAddress"  value="<?php echo $modify[0]['mnane'];?>" name="mname">
				</div>
				
				<div class="form-group col-md-5">
					<label for="inputAddress2">Mother's Occupation</label>
                	<input type="text" class="form-control" id="inputAddress2" value="<?php echo $modify[0]['mocc'];?>"  name="mocc">
				</div>					
			</div>

			<div class="form-row">
				<div class="form-group col-md-4">
					<label for="inputCity">College*</label>
                    <input type="text" class="form-control" id="inputCity" required value="<?php echo $modify[0]['college'];?>" name="college">
				</div>

				<div class="form-group col-md-4">
					<label for="inputState">Current Course*</label>
                    <input type="text" class="form-control" id="inputState" required value="<?php echo $modify[0]['course'];?>" name="course">
				</div>

				<div class="form-group col-md-4">
					<label for="inputZip">Current Stream*</label>
                  	<input type="text" class="form-control" id="inputZip" required value="<?php echo $modify[0]['stream'];?>" name="stream"> 
				</div>
			</div>
			
			<div class="form-row">
				<div class="form-group col-md-8">
					<label for="inputCity">Address*</label>
                    <input type="text" class="form-control" id="address" required value="<?php echo $modify[0]['address'];?>" name="address">
				</div>

				<div class="form-group col-md-4">
					<label for="inputState">Native Place-City*</label>
                    <input type="text" class="form-control" id="native_place_city" required value="<?php $modify[0]['native_place_city'];?>" name="native_place_city">
				</div>

				
			</div>
			
			<div class="form-row">
				<div class="form-group col-md-3">
					<label for="inputCity">State*</label>
                    <input type="text" class="form-control" id="state" required value="<?php echo $modify[0]['state'];?>" name="state">
				</div>

				<div class="form-group col-md-3">
					<label for="inputState">Pin Code*</label>
                    <input type="text" class="form-control" id="pin" required value="<?php echo $modify[0]['pin'];?>" name="pin">
				</div>

				<div class="form-group col-md-3">
					<label for="inputZip">Nationality*</label>
                  	<input type="text" class="form-control" id="nationality" required value="<?php echo $modify[0]['nationality'];?>" name="nationality"> 
				</div>
				
				<div class="form-group col-md-3">
					<label for="inputZip">Aadhar No*</label>
                  	<input type="text" class="form-control" id="adhar" required value="<?php echo $modify[0]['adhar'];?>" name="adhar"> 
				</div>
			</div>
			
			<div class="form-row">
				<div class="form-group col-md-3">
					<label for="inputCity">PAN No*</label>
                    <input type="text" class="form-control" id="pan" required value="<?php echo $modify[0]['pan'];?>" name="pan">
				</div>

				<div class="form-group col-md-3">
					<label for="inputState">Mobile 1*</label>
                    <input type="text" class="form-control" id="mob1"  required value="<?php echo $modify[0]['mob1'];?>" name="mob1">
				</div>

				<div class="form-group col-md-2">
					<label for="inputZip">Mobile 2</label>
                  	<input type="text" class="form-control" id="mob2"  value="<?php echo $modify[0]['mob2'];?>" name="mob2"> 
				</div>
				
				<div class="form-group col-md-2">
					<label for="inputZip">Mobile 3</label>
                  	<input type="text" class="form-control" id="mob3"  value="<?php echo $modify[0]['mob3'];?>" name="mob3"> 
				</div>
				<div class="form-group col-md-2">
					<label for="inputZip">Mobile 4</label>
                  	<input type="text" class="form-control" id="mob4"  value="<?php echo $modify[0]['mob4'];?>" name="mob4"> 
				</div>
			</div>
			
			
			<div class="form-row">
				
				<div class="form-group col-md-3">
					<label for="inputState">No. of Backlog*</label>
                    <input type="number" class="form-control" id="back"  required value="<?php echo $modify[0]['back'];?>" name="back">
				</div>

				<div class="form-group col-md-3">
					<label for="inputZip">DOB* <?php echo $modify[0]['dob'];?></label>
                  	<input type="date" class="form-control" id="dob"  value="<?php echo $modify[0]['dob'];?>" name="dob"> 
				</div>
				
				<div class="form-group col-md-6">
					<label for="inputZip">Personal Email ID*</label>
                  	<input type="text" class="form-control" id="pemail"  value="<?php echo $modify[0]['peid'];?>" name="peid"> 
				</div>
				
			</div>
			
				
			<div class="form-row">
			
			     <div class="form-group col-md-4">
					<label for="inputZip">CU Email ID*</label>
                  	<input type="text" class="form-control" id="cemail"  value="<?php echo $modify[0]['ceid'];?>" name="ceid"> 
				</div>
				<div class="form-group col-md-3">
					<label for="inputCity">Landline Phone No</label>
                    <input type="text" class="form-control" id="land_line_no"  value="<?php echo $modify[0]['land_line_no'];?>" name="land_line_no">
				</div>

				<div class="form-group col-md-3">
					<label for="inputState">Select Gender*- <?php echo $modify[0]['gender'];?></label>
                    <select id="gender" name="gender" value= "<?php echo $modify[0]['gender'];?>" class="form-control" required>
					<option value=""></option>
					<option value="M">Male</option>
					<option value="F">Female</option><option value="O">Other</option></select>
				</div>

				<div class="form-group col-md-2">
					<label for="inputZip">GEN/SC/ST/BC*</label>
                  	<input type="text" class="form-control" id="caste" required value="<?php echo $modify[0]['caste'];?>" name="caste"> 
				</div>
				
				
			</div>
			
			<div class="buttons col-md-12">    
				<!-- <button type="submit" class="btn btn-danger" >&larr; BACK</button>	 -->
				<button type="submit" class="btn btn-info" onclick="validate()">SAVE </button> 
                <button type="button" class="btn btn-info"> 
		        <a href="<?php echo base_url('dash/qualfication');?>" >NEXT SECTION&rarr;</a>
			</button>				
			</div>
		</form>
		
        </div>

		<script>
		var user_id = document.forms["personal"]["user_id"].value;

			if (user_id == "")
			{
				
				document.getElementById("user_id2").style.visibility = "hidden";
				document.getElementById("user_id").style.visibility = "visible";
			}
			else 
			{
				
				document.getElementById("user_id2").style.visibility = "visible";
				document.getElementById("user_id").style.visibility = "hidden";
			}
		</script>
        
    
<?php include 'footer.php';?>
