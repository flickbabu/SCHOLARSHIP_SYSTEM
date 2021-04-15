<?php 

include("database/dbconnection.php");

  $application_id = $_REQUEST['application_id'];

$message = "";

$delete = mysqli_query($conn, "update application set status='Rejected' where application_id='$application_id' ");

if($delete)
{
	    $message = "Application Rejected";
	    header("location:pendingapplication.php?message=$message");
}
else
{
	$message = " Application not Rejected";
	header("location:pendingapplication.php?message=$message");
}



 ?>