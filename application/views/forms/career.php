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
    <title>Career</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/personal.css">
   	<script type="text/javascript">
	var i=3;
        function add()
		{   
			var name='skill_'+i;
		   	var txtNewInputBox = document.createElement('input');        
		   	txtNewInputBox.setAttribute("type", "text");		
		   	txtNewInputBox.setAttribute("placeholder", "enter your skill");
		   	txtNewInputBox.setAttribute("class", "form-group row form-control form-control-lg");
		   	txtNewInputBox.setAttribute("name", `${name}`);		
	       	document.getElementById("newElementId").appendChild(txtNewInputBox);
		   	i++;
		   	// alert(`${name}`);
		}
	</script>
	<style>
		.clr{
			color:#9d2503;
		}
		.container{
			margin-top: 0px;
		}
	</style>
</head>
<body>
	<div class="container">
	<h3 class="clr">Career Objective</h3>
       	<form id= "addRowsHere" action="<?php echo base_url('dash/post_career');?>" method="POST">
			<div class="form-group row">
				<div class="col-xs-12">
              <textarea class="form-control" rows="3" id="cobjective" name="career_objective_description"></textarea>
				</div>				
            </div>
			<br>
			<h3 class="clr">Technical Skills</h3>
			<p> Write your Technical Skills in Domain wise seperated by comma.<br>
				i.e 1. Language: C++, C <br>2. General and graphic application: HTML, JAVA Script

			<div class="form-group row">		   
      			<div class="col-xs-4">
				   <input class="form-control" type="text" placeholder="enter your skill" name="skill_1">
				</div>		
				
				<div class="col-xs-4">
				   <input class="form-control" type="text" placeholder="enter your skill" name="skill_2">                 
				</div>

				<div id="newElementId" class="col-xs-4"></div>

				<div class="col-xs-2">
					<button id="clickMe" type="button" class="btn btn-primary btn-sm btn-block" onclick="add()">Add more skill</button>                                  
				</div>				
			</div>

			
			<div class="form-group row"></div>			
			<div class="buttons col-md-12">    
				<button type="submit" class="btn btn-success" style="float: right" onclick="validate()">SAVE & NEXT &rarr;</button>   
			</div>
			<br>	
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