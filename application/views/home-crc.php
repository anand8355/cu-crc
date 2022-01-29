<?php include 'crc-navbar.php';?>
<style>

.counter{
    color: #f27f21;
    font-family: 'Open Sans', sans-serif;
    text-align: center;
    height: 160px;
    width: 160px;
    padding: 30px 25px 25px;
    margin: 0 auto;
    border: 3px solid #f27f21;
    border-radius: 20px 20px;
    position: relative;
    z-index: 1;
}
.counter:before,
.counter:after{
    content: "";
    background: #f3f3f3;
    border-radius: 20px;
    box-shadow: 4px 4px 2px rgba(0,0,0,0.2);
    position: absolute;
    left: 15px;
    top: 15px;
    bottom: 15px;
    right: 15px;
    z-index: -1;
}
.counter:after{
    background: transparent;
    width: 100px;
    height: 100px;
    border: 15px solid #f27f21;
    border-top: none;
    border-right: none;
    border-radius: 0 0 0 20px;
    box-shadow: none;
    top: auto;
    left: -10px;
    bottom: -10px;
    right: auto;
}
.counter .counter-icon{
    font-size: 35px;
    line-height: 35px;
    margin: 0 0 15px;
    transition: all 0.3s ease 0s;
}
.counter:hover .counter-icon{ transform: rotateY(360deg); }
.counter .counter-value{
    color: #555;
    font-size: 20px;
    font-weight: 400;
    line-height: 20px;
    margin: 0 0 20px;
    display: block;
    transition: all 0.3s ease 0s;
}
.counter:hover .counter-value{ text-shadow: 2px 2px 0 #d1d8e0; }
.counter h3{
    font-size: 13px;
    font-weight: 700;
    text-transform: uppercase;
    margin: 0 0 15px;
}
.counter.blue{
    color: #4accdb;
    border-color: #4accdb;
}
.counter.blue:after{
    border-bottom-color: #4accdb;
    border-left-color: #4accdb;
}
@media screen and (max-width:990px){
    .counter{ margin-bottom: 40px; }


</style>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script> 
$(document).ready(function(){
    $('.counter-value').each(function(){
        $(this).prop('Counter',0).animate({
            Counter: $(this).text()
        },{
            duration: 3500,
            easing: 'swing',
            step: function (now){
                $(this).text(Math.ceil(now));
            }
        });
    });
});
</script>
<div class="container" style="margin-top:1px;">
<?php include 'nav1.php';?>

    <div class="row" style="margin-top:50px;">
        <div class="col-md-3 col-sm-6">
            <div class="counter">
                <div class="counter-icon">
                    <i class="fa fa-globe"></i>
                </div>
                <span class="counter-value">1388</span>
                <h3>Total Drives</h3>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="counter blue">
                <div class="counter-icon">
                    <i class="fa fa-rocket"></i>
                </div>
                <span class="counter-value">1311</span>
                <h3>No. of Offer</h3>
            </div>
        </div>
		<div class="col-md-3 col-sm-6">
            <div class="counter">
                <div class="counter-icon">
                    <i class="fa fa-globe"></i>
                </div>
                <span class="counter-value">1388</span>
                <h3>Students Placed</h3>
            </div>
        </div>
		<div class="col-md-3 col-sm-6">
            <div class="counter blue">
                <div class="counter-icon">
                    <i class="fa fa-rocket"></i>
                </div>
                <span class="counter-value">100</span>
                <h3>Premium Offer</h3>
            </div>
        </div>
    </div>
	
	<div class="row">
	    <div class="col-md-8" style="margin-top:30px;">
	
        <hr>
        
        <?php 
        $r = $drive->num_rows();
        $rw= $drive->result_array();
        $i=0;
	
	
	?>
	<h5> Recents Drives</h5>
	<?php while($i<$r){ ?>
	<div class="card" style="margin-top:20px;">
     <div class="card-header"><b><?php  echo $rw[$i]['name'];?></b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>Dated: <?php  echo $rw[$i]['drive_posted'];?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	 <a href="<?php  echo base_url();?>crc/viewdrive/<?php  echo $rw[$i]['drive_id'];?>" class="btn btn-success">View Detail</a></div>
	 </div>
	 <?php $i= $i+1; }?>
	 
	
	
	    </div>

        <div class="col-md-4" style="margin-top:30px;">
        <hr>
        <h6> <i>Notices /Updates</i> (<a href="#">new</a>) </h6>
        <ol>
  <li><i>Placement Drive of Infosys will be on 12th Feb 2022.(<a href="#">edit</a>)(<a href="#">delete</a>)</i></li>
  </ol>
        </div>

	</div>

</div>
<?php include 'footer.php';?>
</body>
</html>
