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
    <title>Academic details</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="../assets/css/personal.css"> -->
    <style>
		.clr{
			color: #9d2503;
		}
	</style>
</head>
<body>
    <div class="container">
        <form action="<?php echo base_url('dash/post_academic2');?>" method="POST">
            <p><h3 class="clr">Diploma</h3></p>
            <div class="form-group row">
				<div class="col-xs-5">
					<label for="validationDefault03">University</label>
						 <input type="text" class="form-control" id="validationDefault03" placeholder="Board/University" name="diploma_university" >
				 </div>
				 <div class="col-xs-2">
					 <label for="validationDefault04">Passing Year</label>
						 <input type="text" class="form-control" id="validationDefault04" placeholder="Year(YYYY)" name="diploma_passing_year">
				 </div>
				 <div class="col-xs-3">
					 <label for="validationDefault04">Marks</label>
						 <input type="text" class="form-control" id="validationDefault04" placeholder="Percentage/CGPA" name="diploma_percentage">
				 </div>
            </div>
            
            <p><h3 class="clr">Other Graduation</h3></p>
				
            <div class="form-group row">
				<div class="col-xs-5">
					<label for="validationDefault03"> Graduation Course</label>
					<input type="text" class="form-control" id="validationDefault03" placeholder="B.Sc/B.A." name="other_graduation_course">
				</div>
				<div class="col-xs-5">
					<label for="validationDefault03">University</label>
					<input type="text" class="form-control" id="validationDefault03" placeholder="University" name="other_university">
				</div>
				
            </div>
            <div class="form-group row">
                <div class="col-xs-5">
					<label for="validationDefault04">Passing Year</label>
						<input type="text" class="form-control" id="validationDefault04" placeholder="Year(YYYY)" name="other_passing_year">
				</div>
				<div class="col-xs-5">
					<label for="validationDefault04">Marks</label>
					<input type="text" class="form-control" id="validationDefault04" placeholder="Percentage/CGPA" name="other_percentage">
				</div>
            </div>
            <div class="form-group row"></div>
            <div class="form-group row"></div>
            <div class="form-group row"></div>
            <div class="form-group row"></div>
            <div class="form-group row"></div>
            <div class="form-group row"></div>
            <div class="form-group row"></div>
            <div class="form-group row"></div>
            <div class="form-group row"></div>
            <div class="buttons col-md-12">    
				<button type="submit" class="btn btn-success " style="float: right" onclick="validate()">SAVE & NEXT &rarr;</button>   
			</div>

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