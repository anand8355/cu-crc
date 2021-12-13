<!-- // Team Mentor->Mr. Anand kumar 
// Team Name->Harroxx
// Team Members->
// 1-Harsh Tyagi (CSE)
// 2-Kanak goel
// 3-Vaibhav
// 4-Ruchi
// 5-Shreya

// Technology Used->
// Bootstrap 4,Html ,CSS ,CodeIgniter,Javascript  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Personal Info</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/personal.css">
	
	
	<style>
		.clr{
			/* background-color: #9d2503; */
			color:#9d2503;
		}
	</style>
</head>
<body>
    <div class="container">
        <h3 class="clr">Personal Information</h3>
        <form action="<?php echo base_url('dash/post_personal');?>" method="POST">
			<div class="form-group row">
				<div class="col-xs-4">
			   		<label for="validationDefault01">Name *</label>
                    <input type="text" class="form-control" id="validationDefault01" placeholder="Name" required name="name">
				</div>
					
				<div class="col-xs-4">
					<label for="validationDefault01">Admission No. *</label>
				 	<input type="text" class="form-control" placeholder="Admission no." required name="user_id" >
			 	</div>

                <div class="col-xs-4">
					<label for="validationDefault03"><span class="glyphicon glyphicon-earphone" aria-hidden="true" ></span> Phone Number *</label>
                    <input type="text" class="form-control" id="validationDefault03" placeholder="Contact number" required name="mobile_no" >
			   	</div>
			</div>
				   
			<div class="form-group row">		   
      			<div class="col-xs-7">
				   	<label for="validationDefault03"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> E-mail *</label>
                        <input type="email" class="form-control" id="validationDefault03" placeholder="email" required name="email_id" >
                        <span class="head"><b>we will create account with this email</b> </span>
				</div>

				<div class="col-xs-5">
					<label for="validationDefault04"> LinkedIn</label>
                    <input type="text" class="form-control" id="validationDefault04" placeholder="LinkedIn ID" name="linkedin" >
				</div>
			</div>
				      
			<div class="form-group row">
			   	<div class="col-xs-6">
			   		<label for="inputAddress">Address</label>
                	<input type="text" class="form-control" id="inputAddress" placeholder="Line-1" name="address_1">
				</div>
				
				<div class="col-xs-6">
					<label for="inputAddress2">Address 2</label>
                	<input type="text" class="form-control" id="inputAddress2" placeholder="Line-2" name="address_2">
				</div>					
			</div>

			<div class="form-group row">
				<div class="col-xs-4">
					<label for="inputCity">City</label>
                    <input type="text" class="form-control" id="inputCity" name="city">
				</div>

				<div class="col-xs-4">
					<label for="inputState">State</label>
                    <input type="text" class="form-control" id="inputState" name="state">
				</div>

				<div class="col-xs-4">
					<label for="inputZip">Zip</label>
                  	<input type="text" class="form-control" id="inputZip" name="zip"> 
				</div>
			</div>
			<div class="form-group row"></div>
			<div class="form-group row"></div>
			<div class="form-group row"></div>
			<div class="buttons col-md-12">    
				<!-- <button type="submit" class="btn btn-danger" >&larr; BACK</button>	 -->
				<button type="submit" class="btn btn-success" style="float: right" onclick="validate()">SAVE & NEXT &rarr;</button>   
			</div>
		</form>
	</div>
	<script>
		<script src="../assets/js/main1.js"></script>
	</script>
	
</body>
</html>

<!-- // Team Mentor->Mr. Anand kumar 
// Team Name->Harroxx
// Team Members->
// 1-Harsh Tyagi (CSE)
// 2-Kanak goel
// 3-Vaibhav
// 4-Ruchi
// 5-Shreya

// Technology Used->
// Bootstrap 4,Html ,CSS ,CodeIgniter,Javascript  -->