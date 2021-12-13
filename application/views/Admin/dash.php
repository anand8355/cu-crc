<?php include 'header.php';?>
<style>
footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  
  
}
.my-card
{
    position:absolute;
    left:40%;
    top:-20px;
    border-radius:50%;
}
</style>
</head>
<!-- // Team Mentor->Mr. Anand Kumar Srivastav 
// Team Name->AKS
// Team Members->
// 1-Harsh Tyagi (ABES )
// 2-Kanak goel (CSE)
// 3-Vaibhav Kumar Ojha (CSE)
// 4-Ruchi (IT)
// 5-Shreya (IT)

// Technology Used->
// Bootstrap 4,Html ,CSS ,CodeIgniter,Javascript  -->
<body>
<?php include 'navbar.php';?>
<!-- <?php print_r($completed)?> -->
<div class="container-fluid">
    <div class="row">
        <?php include 'leftside.php';?>
        <div class="col-md-7 bg-light" style="margin-top:50px" >
		
		<h3 class="clr text-center">Total No of registered Resume</h3><br>
		<div class="jumbotron">
<div class="row w-100">
        
        <div class="col-md-6">
				<div class="card border-success mx-sm-1 p-3">
					<div class="card border-success shadow text-success p-3 my-card"><span class="fa fa-user" aria-hidden="true"></span></div>
					<div class="text-success text-center mt-3"><h4>Completed</h4></div>
					<div class="text-success text-center mt-2"><h1><?php echo $completed;?></h1></div>
				</div>
        </div>

		<div class="col-md-6">
				<div class="card border-danger mx-sm-1 p-3">
					<div class="card border-danger shadow text-danger p-3 my-card" ><span class="fa fa-user" aria-hidden="true"></span></div>
					<div class="text-danger text-center mt-3"><h4>Incompleted</h4></div>
					<div class="text-danger text-center mt-2"><h1><?php echo $incompleted;?></h1></div>
				</div>
        </div>
		</div>
		</div>
		</div>
		
		
        <?php include 'rightside.php';?>
    
<?php include 'footer.php';?>
<!-- // Team Mentor->Mr. Anand kumar 
// Team Name->AKS
// Team Members->
// 1-Harsh Tyagi (CSE)
// 2-Kanak goel
// 3-Vaibhav
// 4-Ruchi
// 5-Shreya

// Technology Used->
// Bootstrap 4,Html ,CSS ,CodeIgniter,Javascript  -->