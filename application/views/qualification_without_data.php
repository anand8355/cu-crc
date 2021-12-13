
<?php

if (!isset($_SESSION['session_user_id'])) {
    header('location:landingpage.php');
    }

 ?>

<?php include 'header.php';?>
<?php


 ?>
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
        <div class="col-md-8 bg-light" style="margin-top:50px">
		<?php  if($msg=$this->session->flashdata('success')) : ?>
                      
					  <div class="col-lg-12">
						<div class="alert alert-success ">
						  <?php echo $msg;?>
						</div>
					  </div>
				   
		  <?php  endif; ?>
		<h4 class="clr">10<sup>th</sup> Information</h4>
		
       	<form id= "addRowsHere" action="<?php echo base_url('dash/post_qualfication');?>" method="POST">
			<div class="form-row">
				<div class="form-group col-md-4">
					<label for="inputAddress">School Name</label>				
              		<input type="text" class="form-control" id="tenth_school"  value="<?php echo $modify[0]['tenth_school'];?>" name="tenth_school">
				</div>
				<div class="form-group col-md-4">
					<label for="inputAddress">Board</label>				
              		<input type="text" class="form-control" id="tenth_board" value="<?php echo $modify[0]['tenth_board'];?>" name="tenth_board">
				</div>
				<div class="form-group col-md-2">
					<label for="inputAddress">Passing Yr</label>				
              		<input type="text" class="form-control" id="tenth_pass_year"   value="<?php echo $modify[0]['tenth_pass_year'];?>" name="tenth_pass_year">
				</div>	
				<div class="form-group col-md-2">
					<label for="inputAddress">%age/CGPA</label>				
              		<input type="text" class="form-control" id="tenth_per"   value="<?php echo $modify[0]['tenth_per'];?>" name="tenth_per">
				</div>					
            </div>
			<br>
			<h4 class="clr">12<sup>th</sup> Information</h4>
			

			<div class="form-row">
				<div class="form-group col-md-4">
					<label for="inputAddress">School Name</label>				
              		<input type="text" class="form-control" id="twelve_school"  value="<?php echo $modify[0]['twelve_school'];?>" name="twelve_school">
				</div>
				<div class="form-group col-md-4">
					<label for="inputAddress">Board</label>				
              		<input type="text" class="form-control" id="twelve_board" value="<?php echo $modify[0]['twelve_board'];?>" name="twelve_board">
				</div>
				<div class="form-group col-md-2">
					<label for="inputAddress">Passing Yr</label>				
              		<input type="text" class="form-control" id="twelve_pass_year"   value="<?php echo $modify[0]['twelve_pass_year'];?>" name="twelve_pass_year">
				</div>	
				<div class="form-group col-md-2">
					<label for="inputAddress">%age/CGPA</label>				
              		<input type="text" class="form-control" id="twelve_per"   value="<?php echo $modify[0]['twelve_per'];?>" name="twelve_per">
				</div>					
            </div>
			
			
			<div class="form-row">
				<div class="form-group col-md-4">
					<label for="inputAddress">Stream</label>				
              		<input type="text" class="form-control" id="twelve_stream"  value="<?php echo $modify[0]['twelve_stream'];?>" name="twelve_stream">
				</div>
				<div class="form-group col-md-4">
					<label for="inputAddress">%age Best of 12th/Diploma</label>				
              		<input type="text" class="form-control" id="per_best_twelve_diploma"  value="<?php echo $modify[0]['per_best_twelve_diploma'];?>" name="per_best_twelve_diploma">
				</div>
							
            </div>
				
			
			
			<div id="newElementId" class=""></div>
			

			<div class="buttons col-md-12">    
				<!-- <button type="submit" class="btn btn-danger" >&larr; BACK</button>	 -->
				<button type="submit" class="btn btn-info" onclick="validate()">SAVE </button> 
                <button type="button" class="btn btn-info"> 
		        <a href="<?php echo base_url('dash/academic1');?>" >NEXT SECTION&rarr;</a>
			</button>				
			</div>

		</form>            
           
        </div>

    <?php include 'footer.php';?>

<script type="text/javascript">
	var i=4;
        function add()
		{   
			if(i<=10){
			var name='skill_'+i;
		   	var txtNewInputBox = document.createElement('input');        
		   	txtNewInputBox.setAttribute("type", "text");		
		   	txtNewInputBox.setAttribute("placeholder", "enter your skill");
		   	txtNewInputBox.setAttribute("class", "form-group col-md-3.5 mr-4 ");
		   	txtNewInputBox.setAttribute("name", `${name}`);		
	       	document.getElementById("newElementId").appendChild(txtNewInputBox);
		   	i++;
		   }
		   	// alert(`${name}`);
		}
	</script>

