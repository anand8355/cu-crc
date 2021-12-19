<?php include 'header.php';?>
<script>
$(function() {
setTimeout(function() { $("#hideDiv").fadeOut(1500); }, 1000)
})	
</script>
</head>

<body>
<?php include 'navbar.php';?>
<div class="container-fluid">
    <div class="container">     
      <div class="row">
	    <div class="col-md-4 ">
	       <p> <b>Welcome, </b><?php echo $_SESSION['session_user_name']; ?></p>		  
		</div>	
		
		<?php include 'progressbar.php';	
		?>
		 <div class="col-md-4 " style="padding-top:6px;" >
		 <div class="progress">
    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $b1; ?>%">
      <?php echo $b1; ?>% Profile Complete...
    </div>
    </div>		 
	</div>
		 
		 
<div class="col-md-4 text-left">
&nbsp;&nbsp;&nbsp;[<a href="<?php echo base_url('login/logout');?>"  style="padding-top:4px;">Change Password </a>]
[<a href="<?php echo base_url('dash/index/');?>"  style="padding-top:4px;">Edit Profile</a>]
[<a href="<?php echo base_url();?>dash/logout/"  style="padding-top:4px;">Logout</a>]

</div>		
		   <hr>
	  </div>
		 
		 <div class="row">
	  <div class="col-md-12"><br>
	  <h4> Recent Openings 
		<span id="hideDiv" style="color:red;"><?php if(isset($_SESSION['session_msg'])){
		echo $_SESSION['session_msg']; unset($_SESSION['session_msg']);}?></span></h4>
	  
	  <?php 
	$r = $drive->num_rows();
	$rw= $drive->result_array();
	$i=0;
	
	
	?>
	<?php while($i<$r){ ?>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-success"><?php  echo $rw[$i]['name'];?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php  echo base_url();?>dash/self_register/<?php  echo $rw[$i]['drive_id'];?>/<?php echo $_SESSION['session_user_id']; ?>" class="btn btn-secondary">Register Your Self</a><a href="<?php  echo base_url();?>dash/student_viewdrive/<?php  echo $rw[$i]['drive_id'];?>" class="btn btn-success"> View Details</a></h5>
      </div>
    </div>
	 <?php $i= $i+1; }?>
  </div> </div>
	  </div>
        

		
       
    
<?php include 'footer.php';?>
