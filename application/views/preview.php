<html lang="en">
<head>
  <title>Student Profile Preview</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
  
  .bg-c-blue {
     background: #4099ff
 }

  
  </style>
  
</head>
<body>


<div class="container">
    <div class="row">
	   <div class="col-md-12" >
		
		<h5 class="bg-light" style="margin-top:40px; color:blue; ">Personal Information</h5>
		</div>
        </div>
		<div class="row">
	   <div class="col-md-3" >
	   <p><b>Name </b><br><?php echo $personal[0]['user_name']; ?></p>
	   </div>
	   <div class="col-md-3" >
	   <p><b>UID </b><br><?php echo $personal[0]['user_id']; ?></p>
	   </div>
	   <div class="col-md-3" >
	   <p><b>Roll No </b><br><?php echo $personal[0]['roll']; ?></p>
	   </div>
	   <div class="col-md-3" >
	   <p><b>Father's Name </b><br><?php echo $personal[0]['fname']; ?></p>
	   </div>
	   
	   <div class="col-md-3" >
	   <p><b>Father's Occupation </b><br><?php echo $personal[0]['focc']; ?></p>
	   </div>
	   
	   <div class="col-md-3" >
	   <p><b>Mother's Name </b><br><?php echo $personal[0]['mnane']; ?></p>
	   </div>
	   	  
	
			
			

	   <div class="col-md-3" >
	   <p><b>Mother's Occupation </b><br><?php echo $personal[0]['mocc']; ?></p>
	   </div>
	   <div class="col-md-3" >
	   <p><b>College </b><br><?php echo $personal[0]['college']; ?></p>
	   </div>
	   <div class="col-md-3" >
	   <p><b>Current Course </b><br><?php echo $personal[0]['course']; ?></p>
	   </div>
	   <div class="col-md-3" >
	   <p><b>Current Stream </b><br><?php echo $personal[0]['stream']; ?></p>
	   </div>
	   
	   <div class="col-md-6" >
	   <p><b>Address</b><br><?php echo $personal[0]['address']; ?></p>
	   </div>
	   
	   <div class="col-md-3" >
	   <p><b>Native Place-City</b><br><?php echo $personal[0]['native_place_city']; ?></p>
	   </div>
	   	  
		  <div class="col-md-3" >
	   <p><b>State</b><br><?php echo $personal[0]['state']; ?></p>
	   </div>
	   
	   <div class="col-md-3" >
	   <p><b>Pin Code</b><br><?php echo $personal[0]['pin']; ?></p>
	   </div>
	   
	   <div class="col-md-3" >
	   <p><b>Nationality</b><br><?php echo $personal[0]['nationality']; ?></p>
	   </div>
	   
	   <div class="col-md-3" >
	   <p><b>Aadhar No</b><br><?php echo $personal[0]['adhar']; ?></p>
	   </div>
	   
	   
	   <div class="col-md-3" >
	   <p><b>PAN No</b><br><?php echo $personal[0]['pan']; ?></p>
	   </div>
	   
	   
	   <div class="col-md-3" >
	   <p><b>Mobile 1</b><br><?php echo $personal[0]['mob1']; ?></p>
	   </div>
	   
	   
	   <div class="col-md-3" >
	   <p><b>Mobile 2</b><br><?php echo $personal[0]['mob2']; ?></p>
	   </div>
	   
	   <div class="col-md-3" >
	   <p><b>Mobile 3</b><br><?php echo $personal[0]['mob3']; ?></p>
	   </div>
	   
	   <div class="col-md-3" >
	   <p><b>Mobile 4</b><br><?php echo $personal[0]['mob4']; ?></p>
	   </div>
	   
	   
	   <div class="col-md-3" >
	   <p><b>No. of Backlog</b><br><?php echo $personal[0]['back']; ?></p>
	   </div>
	   
	   
	   <div class="col-md-3" >
	   <p><b>DOB</b><br><?php echo $personal[0]['dob']; ?></p>
	   </div>
	   
	   
	   <div class="col-md-3" >
	   <p><b>Personal Email ID</b><br><?php echo $personal[0]['peid']; ?></p>
	   </div>
	   
	   
	   
	   <div class="col-md-3" >
	   <p><b>CU Email ID</b><br><?php echo $personal[0]['ceid']; ?></p>
	   </div>
	   
	   
	   <div class="col-md-3" >
	   <p><b>Landline Phone No</b><br><?php echo $personal[0]['land_line_no']; ?></p>
	   </div>
	   
	   
	   
	   <div class="col-md-3" >
	   <p><b>Gender</b><br><?php echo $personal[0]['gender']; ?></p>
	   </div>
	   
	   
	   <div class="col-md-3" >
	   <p><b>Caste</b><br><?php echo $personal[0]['caste']; ?></p>
	   </div>
	   
	   <div class="col-md-12" >
		
		<h5 class="bg-light" style="margin-top:40px; color:blue; ">10th Information</h5>
		</div>
		
		
		<div class="col-md-3" >
	   <p><b>School Name</b><br><?php echo $qualification[0]['tenth_school']; ?></p>
	   </div>
	   
	   <div class="col-md-3" >
	   <p><b>Board</b><br><?php echo $qualification[0]['tenth_board']; ?></p>
	   </div>
	   
	   
	   <div class="col-md-3" >
	   <p><b>Passing Yr</b><br><?php echo $qualification[0]['tenth_pass_year']; ?></p>
	   </div>
	   
	   
	   <div class="col-md-3" >
	   <p><b>%age/CGPA</b><br><?php echo $qualification[0]['tenth_per']; ?></p>
	   </div>
	   
	   <div class="col-md-12" >
		
		<h5 class="bg-light" style="margin-top:40px; color:blue; ">12th Information</h5>
		</div>
		
	    
	   
	   
	   <div class="col-md-3" >
	   <p><b>School Name</b><br><?php echo $qualification[0]['twelve_school']; ?></p>
	   </div>
	   
	   
	   <div class="col-md-3" >
	   <p><b>Board</b><br><?php echo $qualification[0]['twelve_board']; ?></p>
	   </div>
	   
	   
	   <div class="col-md-3" >
	   <p><b>Passing Yr</b><br><?php echo $qualification[0]['twelve_pass_year']; ?></p>
	   </div>
	   
	   
	   <div class="col-md-3" >
	   <p><b>%age/CGPA</b><br><?php echo $qualification[0]['twelve_per']; ?></p>
	   </div>
	   
	   
	   <div class="col-md-3" >
	   <p><b>Stream</b><br><?php echo $qualification[0]['twelve_stream']; ?></p>
	   </div>
	   
	   
	   <div class="col-md-3" >
	   <p><b>%age Best of 12th/Diploma</b><br><?php echo $qualification[0]['per_best_twelve_diploma']; ?></p>
	   </div>
		
		<div class="col-md-12" >
		
		<h5 class="bg-light" style="margin-top:40px; color:blue; ">Diploma Information</h5>
		</div>
		
		
		<div class="col-md-3" >
	   <p><b>%age/CGPA</b><br><?php echo $academic[0]['dip_per']; ?></p>
	   </div>
	   
	   	<div class="col-md-3" >
	   <p><b>College Name</b><br><?php echo $academic[0]['dip_school']; ?></p>
	   </div>
	   
	   	<div class="col-md-3" >
	   <p><b>Board</b><br><?php echo $academic[0]['dip_board']; ?></p>
	   </div>
	   
	   	<div class="col-md-3" >
	   <p><b>Passing Yr</b><br><?php echo $academic[0]['dip_pass_year']; ?></p>
	   </div>
	   
	   	<div class="col-md-3" >
	   <p><b>Stream</b><br><?php echo $academic[0]['dip_stream']; ?></p>
	   </div>
	   
	   
	   <div class="col-md-12" >
		
		<h5 class="bg-light" style="margin-top:40px; color:blue; ">Graduation Information</h5>
		</div>
		
	   
	   	<div class="col-md-3" >
	   <p><b>College Name</b><br><?php echo $academic[0]['grad_school']; ?></p>
	   </div>
	   
	   <div class="col-md-3" >
	   <p><b>University</b><br><?php echo $academic[0]['grad_board']; ?></p>
	   </div>
	   
	   <div class="col-md-3" >
	   <p><b>Passing Yr</b><br><?php echo $academic[0]['grad_pass_year']; ?></p>
	   </div>
	   
	   <div class="col-md-3" >
	   <p><b>%age</b><br><?php echo $academic[0]['grad_per']; ?></p>
	   </div>
	   
	   <div class="col-md-3" >
	   <p><b>Stream</b><br><?php echo $academic[0]['grad_stream']; ?></p>
	   </div>
	   
	  
	   <div class="col-md-3" >
	   <p><b>Course</b><br><?php echo $academic[0]['grad_course']; ?></p>
	   </div>
		
		
		<div class="col-md-12" >
		
		<h5 class="bg-light" style="margin-top:40px; color:blue; ">Post-Graduation Information</h5>
		</div>
		
		
		 <div class="col-md-3" >
	   <p><b>PG Course</b><br><?php echo $academic2[0]['pg_school']; ?></p>
	   </div>
	   
	    <div class="col-md-3" >
	   <p><b>PG Stream</b><br><?php echo $academic2[0]['pg_stream']; ?></p>
	   </div>
	   
	   
	    <div class="col-md-3" >
	   <p><b>PG %age</b><br><?php echo $academic2[0]['pg_per']; ?></p>
	   </div>
	   
	   
	   <div class="col-md-12" >
		
		<h5 class="bg-light" style="margin-top:40px; color:blue; ">Training Information</h5>
		</div>
	   
	    	   
	    <div class="col-md-3" >
	   <p><b>Details of Additional Course /Certification</b><br><?php echo $academic2[0]['train_det']; ?></p>
	   </div>
	   
	    <div class="col-md-3" >
	   <p><b>Training At(Company name)</b><br><?php echo $academic2[0]['pg_stream']; ?></p>
	   </div>
	   
	   
	    <div class="col-md-3" >
	   <p><b>Duration(in Month)</b><br><?php echo $academic2[0]['duration']; ?></p>
	   </div>
	   
	   
	    <div class="col-md-3" >
	   <p><b>Status</b><br><?php echo $academic2[0]['train_sts']; ?></p>
	   </div>
	   
	    <div class="col-md-3" >
	   <p><b>Project/Training Title</b><br><?php echo $academic2[0]['prj_title']; ?></p>
	   </div>
	   
	   
	   
	   <div class="col-md-12" >
		
		<h5 class="bg-light" style="margin-top:40px; color:blue; ">AMCAT Details</h5>
		</div>
		
		
	    <div class="col-md-3" >
	   <p><b>AMCAT Best-English</b><br><?php echo $amcat[0]['amcat_e']; ?></p>
	   </div>
	   
	   
	    <div class="col-md-3" >
	   <p><b>AMCAT Best-Logical</b><br><?php echo $amcat[0]['amcat_l']; ?></p>
	   </div>
	   
	   
	    <div class="col-md-3" >
	   <p><b>AMCAT Best-Quant</b><br><?php echo $amcat[0]['amcat_q']; ?></p>
	   </div>
	   
	   
	   
	    <div class="col-md-3" >
	   <p><b>AMCAT Best-CP</b><br><?php echo $amcat[0]['amcat_c']; ?></p>
	   </div>
	   
	   
	    <div class="col-md-3" >
	   <p><b>AMCAT Best-Automata</b><br><?php echo $amcat[0]['amcat_a']; ?></p>
	   </div>
	   
	   
	    <div class="col-md-3" >
	   <p><b>AMCAT  Best-Automata Fix</b><br><?php echo $amcat[0]['amcat_f']; ?></p>
	   </div>
	   
	   
	   
	    <div class="col-md-3" >
	   <p><b>AMCAT Best-CS</b><br><?php echo $amcat[0]['amcat_cs']; ?></p>
	   </div>
	   
	   
	   
	    <div class="col-md-3" >
	   <p><b>AMCAT Best-ECE</b><br><?php echo $amcat[0]['amcat_ec']; ?></p>
	   </div>
	   
	   
	    <div class="col-md-3" >
	   <p><b>AMCAT Best-ME</b><br><?php echo $amcat[0]['amcat_me']; ?></p>
	   </div>
	   
	   <div class="col-md-3" >
	   <p><b>AMCAT Best-Write-X</b><br><?php echo $amcat[0]['amcat_x']; ?></p>
	   </div>
	   
	   
	   <div class="col-md-12" >
		
		<a href="index" class="btn btn-primary"> Edit Profile</a>
		</div>
	   
		
	   </div>



		

		
  
   
</div>

<div style="background-color:black;height:40px;margin-top:70px">
        <div class="col-md-12 text-center" style="color:white;padding-top:7px">
        
      <span > Copyright &copy; Chandigarh University - All right reserved. </span>
    </div>
	</div>
</body>
</html>

