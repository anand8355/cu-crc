<?php
 


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

$user_id = $_SESSION['session_user_id'];

$b1=1;

$sq="select status from personal_details where user_id = '$user_id'";
$rs=$con->query($sq);
$rw= $rs->fetch_array();
$x= $rw[0];

$b1= $b1 + $x;

$sq="select q_status from qualification_details where user_id = '$user_id'";
$rs=$con->query($sq);
$rw= $rs->fetch_array();
$x= $rw[0];

$b1= $b1 + $x;

$sq="select a_status from academic_details where user_id = '$user_id'";
$rs=$con->query($sq);
$rw= $rs->fetch_array();
$x= $rw[0];

$b1= $b1 + $x;

$sq="select a2_status from academic2_details where user_id = '$user_id'";
$rs=$con->query($sq);
$rw= $rs->fetch_array();
$x= $rw[0];

$b1= $b1 + $x;

$sq="select amcat_status from amcat_details where user_id = '$user_id'";
$rs=$con->query($sq);
$rw= $rs->fetch_array();
$x= $rw[0];

$b1= (($b1 + $x)-1)*10;


?>

