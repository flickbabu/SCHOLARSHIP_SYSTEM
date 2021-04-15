<?php 

include("database/dbconnection.php");

 $signatory_id = $_REQUEST['signatory_id'];

$message = "";

$delete = mysqli_query($conn, "update signatory set sign_del=2 where signatory_id='$signatory_id' ");

if($delete)
{
	    $message = "Signatory Deleted";
	    header("location:adminDashboard.php?message=$message");
}
else
{
	$message = " Signatory not deleted";
	header("location:adminDashboard.php?message=$message");
}



 ?>