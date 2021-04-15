<?php 

include("database/dbconnection.php");

 $application_id = $_REQUEST['application_id'];

$message = "";

$delete = mysqli_query($conn, "update application set status='Approved' where application_id='$application_id' ");

if($delete)
{
	    $message = "Application Approved";
	    header("location:pendingapplication.php?message=$message");


	    $retrieve = mysqli_query($conn, "select * from scholar join application on scholar.scholar_id=application.scholar_id where application.application_id='$application_id'");

	    $chose=mysqli_fetch_array($retrieve);

	    $num1 = $chose['total_student'];

	    $answer = $num1 - 1;

	    $take = mysqli_query($conn, "select * from application where application_id='$application_id'");

	    $chosen=mysqli_fetch_array($take);

	    $sch_id = $chosen['scholar_id'];


	    $update = mysqli_query($conn, "update scholar set total_student=' $answer' where scholar_id='$sch_id'");
}
else
{
	$message = " Application not Approved";
	header("location:pendingapplication.php?message=$message");
}



 ?>