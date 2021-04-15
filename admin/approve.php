<?php 

include("database/dbconnection.php");

 $scholar_id = $_REQUEST['scholar_id'];

$message = "";

$delete = mysqli_query($conn, "update scholar set status='Approved' where scholar_id='$scholar_id' ");

if($delete)
{
	    $message = "Scholarship Approved";
	    header("location:pending.php?message=$message");
}
else
{
	$message = " Scholarship not Approved";
	header("location:pending.php?message=$message");
}



 ?>