<?php include 'header.php';?>

</head>
<body>
<?php include 'navbar.php';?>


<div class="container-fluid">
    <div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-9 ">
	       <p> <b>Welcome, </b><?php echo $_SESSION['session_user_name']; ?>&nbsp;&nbsp;&nbsp;[<a href="<?php echo base_url('login/logout');?>"  style="padding-top:2px;"><span class="text-danger">Logout</span></a>]</p>
		  
		</div>
        <?php include 'leftside.php';?>
        <div class="col-md-8 bg-light" style="margin-top:40px" >
        	<?php  if($msg=$this->session->flashdata('success')) : ?>
                      
                        <div class="col-lg-12">
                          <div class="alert alert-success ">
                            <?php echo $msg;?>
                          </div>
                        </div>
                     
            <?php  endif; ?>
		<h4 class="clr">Diploma Information</h4>
        <form action="<?php echo base_url('dash/post_academic1');?>" method="POST">
			
			  
			<div class="form-row">
				<div class="form-group col-md-4">
					<label for="inputAddress">College Name</label>				
              		<input type="text" class="form-control" id="dip_school"  value="<?php echo $modify[0]['dip_school'];?>" name="dip_school">
				</div>
				<div class="form-group col-md-4">
					<label for="inputAddress">Board</label>				
              		<input type="text" class="form-control" id="dip_board" value="<?php echo $modify[0]['dip_board'];?>" name="dip_board">
				</div>
				<div class="form-group col-md-2">
					<label for="inputAddress">Passing Yr</label>				
              		<input type="text" class="form-control" id="dip_pass_year"   value="<?php echo $modify[0]['dip_pass_year'];?>" name="dip_pass_year">
				</div>	
				<div class="form-group col-md-2">
					<label for="inputAddress">%age/CGPA</label>				
              		<input type="text" class="form-control" id="dip_per"   value="<?php echo $modify[0]['dip_per'];?>" name="dip_per">
				</div>					
            </div>

			
             <div class="form-row">
				<div class="form-group col-md-4">
					<label for="inputAddress">Stream</label>				
              		<input type="text" class="form-control" id="dip_stream"  value="<?php echo $modify[0]['dip_stream'];?>" name="dip_stream">
				</div>
				
							
            </div>
			
            <h4 class="clr">Graduation Information</h4>
			  
			   <div class="form-row">
				<div class="form-group col-md-4">
					<label for="inputAddress">College Name</label>				
              		<input type="text" class="form-control" id="grad_school"  value="<?php echo $modify[0]['grad_school'];?>" name="grad_school">
				</div>
				<div class="form-group col-md-4">
					<label for="inputAddress">University</label>				
              		<input type="text" class="form-control" id="grad_board" value="<?php echo $modify[0]['grad_board'];?>" name="grad_board">
				</div>
				<div class="form-group col-md-2">
					<label for="inputAddress">Passing Yr</label>				
              		<input type="text" class="form-control" id="grad_pass_year"   value="<?php echo $modify[0]['grad_pass_year'];?>" name="grad_pass_year">
				</div>	
				<div class="form-group col-md-2">
					<label for="inputAddress">%age</label>				
              		<input type="text" class="form-control" id="grad_per"   value="<?php echo $modify[0]['grad_per'];?>" name="grad_per">
				</div>					
            </div>

			
             <div class="form-row">
				<div class="form-group col-md-4">
					<label for="inputAddress">Stream</label>				
              		<input type="text" class="form-control" id="grad_stream"  value="<?php echo $modify[0]['grad_stream'];?>" name="grad_stream">
				</div>
				
				<div class="form-group col-md-4">
					<label for="inputAddress">Course</label>				
              		<input type="text" class="form-control" id="grad_course"  value="<?php echo $modify[0]['grad_course'];?>" name="grad_course">
				</div>
				
							
            </div>


			<div class="buttons col-md-12">    
				<!-- <button type="submit" class="btn btn-danger" >&larr; BACK</button>	 -->
				<button type="submit" class="btn btn-info" onclick="validate()">SAVE </button> 
                <button type="button" class="btn btn-info"> 
		        <a href="<?php echo base_url('dash/academic2');?>" >NEXT SECTION&rarr;</a>
			</button>				
			</div>
					
		</form>
		
            
        
    
<?php include 'footer.php';?>
