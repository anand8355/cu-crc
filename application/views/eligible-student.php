<?php include 'crc-navbar.php';?>

<div class="container" style="margin-top:1px;">
<?php include 'nav1.php';?>

    <div class="row" style="margin-top:50px;">
	
	<div class="col-md-12 text-center text-primary">
	<h5> Eligible Students</h5>
	</div>
	</div>
	 <div class="row" style="margin-top:5px;">
	 
	<div class="col-md-12">
	<?php 
	$r = $personal->num_rows();
	$rw= $personal->result_array();
	$i=0;
	
	
	?>
	<table class="table table-striped table-bordered"  id="myTable">
    <thead>
      <tr>
	    <th> Sr. No. </th>
        <th> Student Name</th>
		 <th> UID </th>
		 <th>Institute Name</th>
		 <th>Course Name</th>
		 <th>Stream Name</th>
      </tr>
    </thead>
    <tbody>
	
	 
	 <?php while($i<$r){ ?>
	<tr><td><?php  echo $i;?></td><td><?php  echo $rw[$i]['user_name'];?></td><td><?php  echo $rw[$i]['user_id'];?></td><td><?php  echo $rw[$i]['college'];?></td><td><?php  echo $rw[$i]['course'];?></td><td><?php  echo $rw[$i]['stream'];?></td></tr>
	<?php $i= $i+1; }?>

	</tbody>
	 </table>
	</div>
	
	
	
        
    </div>
	
	

</div>
<?php include 'footer.php';?>
<script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
	</script>
</body>
</html>
