<?php

$drive= "drive_".$drive_id;
//DB connection
$HOSTNAME = "localhost";
$USERNAME = "root";
$PASSWORD = "";
$DATABASE = "cu-crc-data";
$con = new mysqli($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);
// Check connection
if ($con->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}

$sq = "select * from personal_details inner join $drive on personal_details.user_id = $drive.name inner join qualification_details on qualification_details.user_id = $drive.name inner join academic2_details on academic2_details.user_id = qualification_details.user_id inner join academic_details on academic2_details.user_id = academic_details.user_id";
$rs = $con->query($sq);


$sq1="select * from drive_details where driver_id = $drive_id";
$rs1= $con->query($sq1);

$rw1=$rs1->fetch_assoc();

header('Content-Type:application/xls');
header("Content-Disposition:attachment;filename= studentdata.xls");



?>


<table>
    <tr>
        <td><b>SrNo</b></td>
        <td><b>Roll No</b></td>
        <td><b>Name</b></td>
        <td><b>Institute</b></td>
        <td><b>Course</b></td>
        <td><b>Stream</b></td>
        <td><b>10<sup>th</sup>Percentage/CGPA</b></td>
        <td><b>12<sup>th</sup>Percentage/CGPA</b></td>
        <td><b>Graduation Percentage</b></td>
        <td><b>Diploma Percentage</b></td>
        <td><b>Post Graduation Percentage</b></td>
        <td><b>Mobile No</b></td>
        <td><b>No of Active Backlog</b></td>
        <td><b>College Email Id</b></td>
        <td><b>Personal Email Id</b></td>
        <td><b>Gender</b></td>
        <td><b>DOB</b></td>
        <td><b>Regsitration Status</b></td>

       
        
        
    </tr>
    <?php
	
$i=1;
while($rw=$rs->fetch_assoc())
{	
  if($rw1['tenage'] <= $rw['tenth_per'] && )
  {
?>
    <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $rw['user_id']; ?></td>
        <td><?php echo $rw['user_name']; ?></td>
        <td><?php echo $rw['college']; ?></td>
        <td><?php echo $rw['course']; ?></td>
        <td><?php echo $rw['stream']; ?></td>
        <td><?php echo $rw['tenth_per']; ?></td>
        <td><?php echo $rw['twelve_per']; ?></td>
        <td><?php echo $rw['grad_per']; ?></td>
        <td><?php echo $rw['dip_per']; ?></td>
        <td><?php echo $rw['pg_per']; ?></td>
        <td><?php echo $rw['mob1']; ?></td>
        <td><?php echo $rw['back']; ?></td>
        <td><?php echo $rw['ceid']; ?></td>
        <td><?php echo $rw['peid']; ?></td>
        <td><?php echo $rw['gender']; ?></td>
        <td><?php echo $rw['dob']; ?></td>      
        <td>Registered</td>
       
    </tr>
<?php  $i++;
} 
}?>
