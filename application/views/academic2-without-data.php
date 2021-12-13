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
        <div class="col-md-8 bg-light" style="margin-top:50px" >
        	<?php  if($msg=$this->session->flashdata('success')) : ?>
                      
                        <div class="col-lg-12">
                          <div class="alert alert-success ">
                            <?php echo $msg;?>
                          </div>
                        </div>
                     
            <?php  endif; ?>
		<form action="<?php echo base_url('dash/post_academic2');?>" method="POST">
            <p><h4 class="clr">Post Graduation Details:</h4></p>
            
            
             <div class="form-row">
				<div class="form-group col-md-4">
					<label for="inputAddress">PG Course</label>				
              		<input type="text" class="form-control" id="pg_school"  value="<?php echo $modify[0]['pg_school'];?>" name="pg_school">
				</div>
				<div class="form-group col-md-4">
					<label for="inputAddress">PG Stream</label>				
              		<input type="text" class="form-control" id="pg_stream" value="<?php echo $modify[0]['pg_stream'];?>" name="pg_stream">
				</div>
				<div class="form-group col-md-4">
					<label for="inputAddress">PG %age</label>				
              		<input type="text" class="form-control" id="pg_per"   value="<?php echo $modify[0]['pg_per'];?>" name="pg_per">
				</div>	
									
            </div>
			<h4 class="clr">Training Details:</h4>
			<div class="form-row">
				<div class="form-group col-md-12">
					<label for="inputAddress">Details of Additional Course /Certification</label>				
              		<input type="text" class="form-control" id="train_det"  value="<?php echo $modify[0]['train_det'];?>" name="train_det">
				</div>
				</div>
				<div class="form-row">
				<div class="form-group col-md-4">
					<label for="inputAddress">Training At(Company name)</label>				
              		<input type="text" class="form-control" id="train_com" value="<?php echo $modify[0]['pg_stream'];?>" name="train_com">
				</div>
				<div class="form-group col-md-4">
					<label for="inputAddress">Duration(in Month)</label>				
              		<input type="number" class="form-control" id="duration"   value="<?php echo $modify[0]['duration'];?>" name="duration">
				</div>	
				
				<div class="form-group col-md-4">
					<label for="inputAddress">Status</label>				
              		<input type="text" class="form-control" id="train_sts"   value="<?php echo $modify[0]['train_sts'];?>" name="train_sts">
				</div>	
									
            </div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<label for="inputAddress">Project/Training Title</label>				
              		<input type="text" class="form-control" id="prj_title"  value="<?php echo $modify[0]['prj_title'];?>" name="prj_title">
				</div>
				</div>
				
            
         

       
		
            
            			
			<div class="buttons col-md-12">    
				<!-- <button type="submit" class="btn btn-danger" >&larr; BACK</button>	 -->
				<button type="submit" class="btn btn-info" onclick="validate()">SAVE </button> 
                <button type="button" class="btn btn-info"> 
		        <a href="<?php echo base_url('dash/amcat');?>" >NEXT SECTION&rarr;</a>
			</button>

 		
			</div>
			</form>	
			
	</div>

       
    
<?php include 'footer.php';?>
