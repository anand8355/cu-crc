<?php include 'header.php';?>

<div class="container-fluid">
    <div class="row">
        <?php include 'leftside.php';?>
        <div class="col-md-7 bg-light" style="margin-top:50px" >
		
		<h3 class="clr">Academic details</h3><br>
        <form action="<?php echo base_url('dash/post_personal');?>" method="POST">
			<div class="row">
				
			   		<div class="col-md-6">
					<label for="validationDefault01">Course</label>
					<select class="form-control" id="validationDefault01" name="course_name">
						<option>Select</option>
						<option>B.Tech</option>
						<option>MCA</option>
						<option>MBA</option>
						<option>M.Tech</option>
					</select>                       
				</div>
				<div class="col-md-6">
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
				<div class="row">
				<div class="col-md-6">
					<label for="validationDefault03">University</label>
                        <input type="text" class="form-control" id="validationDefault03" placeholder="University" required name="course_board">
			 	</div>
				
				<div class="col-md-3">
					<label for="validationDefault04">Passing Year</label>
                        <input type="text" class="form-control" id="validationDefault04" placeholder="Year(YYYY)" required name="course_passing_year">
			 	</div>
				<div class="col-md-3">
					<label for="validationDefault04"> Percentage /CGPA</label>
                        <input type="text" class="form-control" id="validationDefault04" placeholder="Percentage/CGPA" required name="course_percentage">
			 	</div>
                </div>
                <hr>
			     <h4>12th Details</h4>
				 <div class="row">
				<div class="col-md-6">
					<label for="validationDefault03">Board</label>
						 <input type="text" class="form-control" id="validationDefault03" placeholder="Board" name="12_board">
			 	</div>
				
				<div class="col-md-3">
					<label for="validationDefault04">Passing Year</label>
						 <input type="text" class="form-control" id="validationDefault04" placeholder="Year(YYYY)" name="12_passing_year">
			 	</div>
				<div class="col-md-3">
					<label for="validationDefault04">Marks</label>
					<input type="text" class="form-control" id="validationDefault04" placeholder="Percentage/CGPA" name="12_percentage">
			 	</div>
                </div>
			
			<div class="buttons col-md-12">    
				<!-- <button type="submit" class="btn btn-danger" >&larr; BACK</button>	 -->
				<button type="submit" class="btn btn-success" style="float:right" onclick="validate()">CONFIRM & SAVE </button>   
			</div>
		</form>
            
            <button type="button" class="btn btn-success" style="" onclick="window.location='http://google.com'"> NEXT SECTION&rarr;</button>
        </div>
        <?php include 'rightside.php';?>
    
<?php include 'footer.php';?>
