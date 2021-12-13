<?php include 'header.php';?>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/css/personal.css">

</head>
<body>
<?php include 'navbar.php';?>


<div class="container-fluid">
    <div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-9 ">
	       <p> <b>Welcome, </b><?php echo $_SESSION['session_user_name']; ?>&nbsp;&nbsp;&nbsp;[<a href="<?php echo base_url('login/logout');?>"  style="padding-top:2px;"><span class="text-danger">Logout</span></a>]</p>
		  
		</div>
        <?php include 'leftside.php';?>
        <div class="col-md-8 bg-light" style="margin-top:50px" >
            <?php  if($msg=$this->session->flashdata('success')) : ?>
                      
                        <div class="col-lg-12">
                          <div class="alert alert-success ">
                            <?php echo $msg;?>
                          </div>
                        </div>
                     
            <?php  endif; ?>
        <h4 >AMCAT Details:</h4>
        
        <form action="<?php echo base_url('dash/post_amcat');?>" method="POST">
           <br>
             <div class="form-row">
				<div class="form-group col-md-3">
					<label for="inputAddress">AMCAT Best-English</label>				
              		<input type="number" class="form-control" id="amcat_e"  value="<?php echo $modify[0]['amcat_e'];?>" name="amcat_e">
				</div>
				<div class="form-group col-md-3">
					<label for="inputAddress">AMCAT Best-Logical</label>				
              		<input type="text" class="form-control" id="amcat_l" value="<?php echo $modify[0]['amcat_l'];?>" name="amcat_l">
				</div>
				<div class="form-group col-md-3">
					<label for="inputAddress">AMCAT Best-Quant</label>				
              		<input type="text" class="form-control" id="amcat_q" value="<?php echo $modify[0]['amcat_q'];?>" name="amcat_q">
				</div>
				<div class="form-group col-md-3">
					<label for="inputAddress">AMCAT Best-CP</label>				
              		<input type="text" class="form-control" id="amcat_c" value="<?php echo $modify[0]['amcat_c'];?>" name="amcat_c">
				</div>
									
            </div> 

            <div class="form-row">
				<div class="form-group col-md-3">
					<label for="inputAddress">AMCAT Best-Automata</label>				
              		<input type="number" class="form-control" id="amcat_a"  value="<?php echo $modify[0]['amcat_a'];?>" name="amcat_a">
				</div>
				<div class="form-group col-md-3">
					<label for="inputAddress">AMCAT  Best-Automata Fix</label>				
              		<input type="text" class="form-control" id="amcat_f" value="<?php echo $modify[0]['amcat_f'];?>" name="amcat_f">
				</div>
				<div class="form-group col-md-3">
					<label for="inputAddress">AMCAT Best-CS</label>				
              		<input type="text" class="form-control" id="amcat_cs" value="<?php echo $modify[0]['amcat_cs'];?>" name="amcat_cs">
				</div>
				<div class="form-group col-md-3">
					<label for="inputAddress">AMCAT Best-ECE</label>				
              		<input type="text" class="form-control" id="amcat_ec" value="<?php echo $modify[0]['amcat_ec'];?>" name="amcat_ec">
				</div>
									
            </div>      			
           
		   
		   <div class="form-row">
				<div class="form-group col-md-3">
					<label for="inputAddress">AMCAT Best-ME</label>				
              		<input type="number" class="form-control" id="amcat_me"  value="<?php echo $modify[0]['amcat_me'];?>" name="amcat_me">
				</div>
				<div class="form-group col-md-3">
					<label for="inputAddress">AMCAT Best-Write-X</label>				
              		<input type="text" class="form-control" id="amcat_x" value="<?php echo $modify[0]['amcat_x'];?>" name="amcat_x">
				</div>
				
									
            </div>      
                
           
            <div class="buttons col-md-12">    
				<!-- <button type="submit" class="btn btn-danger" >&larr; BACK</button>	 -->
				<button type="submit" class="btn btn-info" onclick="validate()">SAVE </button> 
                <button type="button" class="btn btn-info"> 
		        <a href="<?php echo base_url('dash/preview');?>" >PREVIEW&rarr;</a>
			</button>

 		
			</div>
        </form>
        
            
           
        </div>
       
<?php include 'footer.php';?>

