<?php include 'header.php';?>
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
<div class="container-fluid">
    <div class="row">
        <?php include 'leftside.php';?>
        <div class="col-md-7 bg-light" style="margin-top:50px" >
		
		
        <form action="<?php echo base_url('dash/post_personal');?>" method="POST">
			
			
			<div class="row"><br><br>
            
      			<div class="col-md-9">
				<h3 class="clr">Technical Skills</h3>
			<p> Write your Technical Skills in Domain wise seperated by comma.<br>
				i.e 1. Language: C++, C <br>2. General and graphic application: HTML, JAVA Script
<br>	   			</p>
				   	<input class="form-control" type="text" placeholder="enter your skill" name="skill_1">
				</div>
               </div><br>
			   <div class="row"> &
				<div class="col-md-9">
					<input class="form-control" type="text" placeholder="enter your skill" name="skill_2">
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-9">
					<input class="form &-control" type="text" placeholder="enter your skill" name="skill_3">
				</div> &
			</div><br>
				<div class="row">
				<div class="col-md-9">
					<input class="form-control" type="text" placeholder="enter your skill" name="skill_4">
				</div>
			</div>    <br>  
			<div class="row">
				<div class="col-md-9">
					<input class="form-control" type="text" placeholder="enter your skill" name="skill_5">
				</div>
			</div>

			
			
			<div class="buttons col-md-12">    
				<!-- <button type="submit" class="btn btn-danger" >&larr; BACK</button>	 -->
				<button type="submit" class="btn btn-success" style="float:right" onclick="validate()">CONFIRM & SAVE </button>   
			</div>
		</form>
            
            <button type="button" class="btn btn-success"> 
                <a href="<?php echo base_url('dash/career');?>" >NEXT SECTION&rarr;</a>
			</button>
        </div>
<?php include 'rightside.php';?>
    
<?php include 'footer.php';?>
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