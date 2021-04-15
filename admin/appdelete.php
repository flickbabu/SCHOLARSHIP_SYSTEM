<?php 

include("database/dbconnection.php");

 $application_id = $_REQUEST['application_id'];

$message = "";

$delete = mysqli_query($conn, "update application set app_del=7 where application_id='$application_id' ");

if($delete)
{
	    $message = "Application Deleted";
	    header("location:appreject.php?message=$message");
}
else
{
	$message = "Application not Deleted";
	header("location:appreject.php?message=$message");
}



 ?>