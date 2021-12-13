<!-- // Team Mentor->Mr. Anand kumar 
// Team Name->Harroxx
// Team Members->
// 1-Harsh Tyagi (CSE)
// 2-Kanak goel
// 3-Vaibhav
// 4-Ruchi
// 5-Shreya

// Technology Used->
// Bootstrap 4,Html ,CSS ,CodeIgniter,Javascript  -->'
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Academic Details</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/personal.css">
	<style>
		.clr{
			color: #9d2503;
		}
		.container{
			margin-top: 1px;
		}
	</style>
</head>
<body>
    <div class="container">
        <h3 class="clr">Academic Qualifications</h3>
        <form action="<?php echo base_url('dash/post_academic1');?>" method="POST">
			<div class="form-group row">
				<div class="col-xs-6">
					<label for="validationDefault01">Course</label>
					<select class="form-control" id="validationDefault01" name="course_name">
						<option>Select</option>
						<option>B.Tech</option>
						<option>MCA</option>
						<option>MBA</option>
						<option>M.Tech</option>
					</select>                       
				</div>
				
                <div class="col-xs-6">
				   	<label for="validationDefault01">Branch</label>
				   	<select class="form-control" id="validationDefault01" name="course_branch">
						<option>Select</option>
						<option>CSE</option>
				   		<option>CSIT</option>
                   		<option>CEIT</option>
				   		<option>IT</option>
				   		<option>CE</option>
						<option>Civil</option>
						<option>ME</option>
						<option>ECE</option>
						<option>EN</option>
  				   </select>                       
				</div>
			</div>
				   
			<div class="form-group row">		   
      			<div class="col-xs-6">
				   <label for="validationDefault03">University</label>
                        <input type="text" class="form-control" id="validationDefault03" placeholder="University" required name="course_board">
                </div>
				<div class="col-xs-3">
					<label for="validationDefault04">Passing Year</label>
                        <input type="text" class="form-control" id="validationDefault04" placeholder="Year(YYYY)" required name="course_passing_year">
				</div>
				<div class="col-xs-3">
					<label for="validationDefault04"> Percentage /CGPA</label>
                        <input type="text" class="form-control" id="validationDefault04" placeholder="Percentage/CGPA" required name="course_percentage">
				</div>
			</div>

			<hr>

            <p><h4><b>12 Board</b></h4></p>
            <div class="form-group row">
				<div class="col-xs-6">
					<label for="validationDefault03">Board</label>
						 <input type="text" class="form-control" id="validationDefault03" placeholder="Board" name="12_board">
				 </div>
				 <div class="col-xs-3">
					 <label for="validationDefault04">Passing Year</label>
						 <input type="text" class="form-control" id="validationDefault04" placeholder="Year(YYYY)" name="12_passing_year">
				 </div>
				 <div class="col-xs-3">
					<label for="validationDefault04">Marks</label>
					<input type="text" class="form-control" id="validationDefault04" placeholder="Percentage/CGPA" name="12_percentage">
				 </div>
			</div>
			

			<p><h4><b>10 Board</b> </h4></p>
            <div class="form-group row">
				<div class="col-xs-6">
					<label for="validationDefault03">Board</label>
					<input type="text" class="form-control" id="validationDefault03" placeholder="Board" required name="10_board">
				</div>
				<div class="col-xs-3">
					<label for="validationDefault04">Passing Year</label>
						<input type="text" class="form-control" id="validationDefault04" placeholder="Year(YYYY)" required name="10_passing_year">
				</div>
				<div class="col-xs-3">
					<label for="validationDefault04"> Marks</label>
						<input type="text" class="form-control" id="validationDefault04" placeholder="Percentage/CGPA" required name="10_percentage">
				</div>
			</div>
			
			
			<div class="buttons col-md-12">    
				<button type="submit" class="btn btn-success " style="float: right" onclick="validate()">SAVE & NEXT &rarr;</button>   
			</div>

			<div class="form-group row"></div>

		</form>
    </div>            
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