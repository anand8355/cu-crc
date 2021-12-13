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
        <?php  if($error=$this->session->flashdata('Invalid')) : ?>
                      
                      <div class="col-lg-12">
                        <div class="alert alert-danger ">
                          <?php echo $error;?>
                        </div>
                      </div>
                   
          <?php  endif; ?>
		<h3 class="clr text-center">Search Resume</h3><br>
        <form action="<?php echo base_url('admin/get_search');?>" name="search" method="POST">
        <div class="row">
				<div class="col-md-12">
			   		<label for="validationDefault01">Admission No *</label>
                    <input type="text" class="form-control" id="validationDefault01" placeholder="Enter the valid Admission no" value="" required name="user_id">
				</div>
        </div>
        <div class="buttons col-md-12">    
				
				<button type="submit" class="btn btn-success" style="float:right" onclick="validate()">SEARCH </button>   
			</div>
        </form>
		
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