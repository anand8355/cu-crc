<?php 
error_reporting(0);

session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Corporate Resource Center (CRC)</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>  
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
	<style>
.vl {
  border-left: 3px solid blue;
  height: 500px;
  margin-top: -20px;
}
</style>
</head>
<body>
  <header class="col-md-12 row head fixed-top">
    <div class="title col-md-12">
        <h1>Corporate Resource Center (CRC) Portal</h1>
    </div>
</header>

     <div class="constainer-fluid">
	    <div class="row" style="margin-top:120px">
			<div  class="col-md-6 text-center" style="margin-top:0px" >
			
			<img src="<?php echo base_url();?>assets/img/homepage-logo-6.png"  style="margin-top:100px;"alt="logo"  id="rm"></img>
			<hr style="color:red;">
			<h3> CU - CRC Portal</h3>
			</div>
			<div class="col-md-1 vl"></div>
      
		    <div class="col-md-5 form-holder" style="margin-top:90px;" >
        <?php  if(isset($_SESSION['Login_failed'])) { ?>
                      
                        <div class="col-lg-12">
                          <div class="alert alert-danger ">
                            <?php echo $_SESSION['Login_failed'];?>
                          </div>
                        </div>
                     <hr class="new1">
		<?php unset($_SESSION['Login_failed']); } ?>


			  <div class="col-md-5" id="rm1">
					  <h4> Log in <h4>
					 <form  action="<?php echo base_url();?>Dash/login" class="needs-validation"  method="post"  novalidate>
                            <div class="form-group">
                            
                                <input type="text" class="form-control" id="uname" placeholder="Enter User Name" name="user_id" required>
                                <div class="valid-feedback">Valid.</div>
                              <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control2" id="pswd" placeholder="Enter Password" name="pswd" required>
                                <div class="valid-feedback">Valid.</div>
                              <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div class="link text-primary">
                              <h6><a href="<?php echo base_url();?>dash/newuser" >New User</a></h6>
                              <h6><a href="">Forgot Password?</a>
                                </h6>
                            </div>
                            <button type="submit" class="btn ">LOGIN</button>
                          </form>
						  </div>
			</div>
		</div>
		
		<div class="row">
		<footer class="col-md-12 foot fixed-bottom">
      <p id="f-text">© Copyright 2021, Chandigarh University </p>
  </footer>
		</div>	 
	 </div>
	 <script>
                            // Disable form submissions if there are invalid fields
                            (function() {
                              'use strict';
                              window.addEventListener('load', function() {
                                // Get the forms we want to add validation styles to
                                var forms = document.getElementsByClassName('needs-validation');
                                // Loop over them and prevent submission
                                var validation = Array.prototype.filter.call(forms, function(form) {
                                  form.addEventListener('submit', function(event) {
                                    if (form.checkValidity() === false) {
                                      event.preventDefault();
                                      event.stopPropagation();
                                    }
                                    form.classList.add('was-validated');
                                  }, false);
                                });
                              }, false);
                            })();
                            </script>
							
							
							



    

   
</body>
</html>
