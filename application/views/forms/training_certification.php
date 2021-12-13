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
    <title>training_certification</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/personal.css">
    <style>
		.clr{
			color: #9d2503;
		}
	</style>
</head>
<body>
    <div class="container">
        <h3 class="clr">EXPERIENTIAL LEARNING</h3>
        <p> Enter your Summer Internship Program Details</p>
        <form action="<?php echo base_url('dash/post_training_certification');?>" method="POST">
			<div class="form-group row">
	    	    <div class="col-xs-11">
		            <label for="validationDefault01">Company Name</label>
                    <input type="text" class="form-control" id="validationDefault01" placeholder="Company Name" name="company_name">
			    </div>
            </div>
                
			<div class="form-group row">
                <div class="col-xs-11">
				    <label for="validationDefault03">Project Title</label>
                    <input type="text" class="form-control" id="validationDefault03" placeholder="Project Title" name="project_title">
				</div>
			</div>
				   
	        <div class="form-group row">		   
                <div class="col-xs-11">
			        <label for="validationDefault03">Duration(In Month)</label>
                    <input type="email" class="form-control" id="validationDefault03" placeholder="Duration(in Month)" name="duration">
                </div>
            </div>
        
		    <div class="form-group row">
				<div class="col-xs-11">
					<label for="validationDefault04"> Project Discription(In max 50 words)</label>
                    <textarea class="form-control" rows="3" id="cobjective" name="project_description"></textarea>
			   </div>
            </div>
                
            <div class="form-group row"></div>
            <div class="buttons col-md-12">    
				<!-- <button type="submit" class="btn btn-danger " >&larr; BACK</button>	 -->
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