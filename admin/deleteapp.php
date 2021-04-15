<?php 

include("database/dbconnection.php");

 $scholar_id = $_REQUEST['scholar_id'];

$message = "";

$delete = mysqli_query($conn, "update scholar set sch_del=8 where scholar_id='$scholar_id' ");

if($delete)
{
	    $message = "Scholarship Deleted";
	    header("location:accepted.php?message=$message");
}
else
{
	$message = " Scholarship not Deleted";
	header("location:accepted.php?message=$message");
}



 ?>