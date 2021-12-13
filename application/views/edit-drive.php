<?php include 'crc-navbar.php';?>

	<div class="container" style="margin-top:1px;">
<?php include 'nav1.php';?>
    <div class="row" style="margin-top:50px;">
	<?php 
	$r = $drive->num_rows();
	$rw= $drive->result_array();
	$i=0;
	?>
	<div class="col-md-12 text-center text-primary">
	<h5> Active Drives</h5>
	<hr>
	</div>
	</div>
	 <div class="row" style="margin-top:5px;">
	<div class="col-md-12">
	<table class="table table-striped table-bordered" style="width:100%" id="myTable">
    <thead>
      <tr>
	    <th> Sr. No. </th>
        <th>Company Name </th>
        <th>Posted On</th>
        <th>Operation</th>
      </tr>
    </thead>
    <tbody>
	<?php while($i<$r){ ?>
      <tr>
	   <td><?php echo $i+1;?></td>
        <td><?php  echo $rw[$i]['name'];?></td>
        <td><?php  echo $rw[$i]['drive_posted'];?></td>
        <td><a href="<?php  echo base_url();?>crc/editdrivedetails/<?php  echo $rw[$i]['drive_id'];?>" class="btn btn-success">Edit Drive</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php  echo base_url();?>crc/trashdrive/<?php  echo $rw[$i]['drive_id'];?>" class="btn btn-danger">Trash</a></td>
      </tr>
       <?php $i= $i+1; }?>
    </tbody>
  </table>
  </div>
	
</div>
</div>
<script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
	</script>
<?php include 'footer.php';?>
</body>
</html>
