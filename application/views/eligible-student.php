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
	
	 </tbody>
	 </table>
	<tr><td></td><td></td><td></td><td></td><td></td><td></td></tr>
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
