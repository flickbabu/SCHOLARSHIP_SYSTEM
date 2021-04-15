<?php 

include("../database/dbconnection.php");
$message = "";

if($_POST)
{
   $firstname= $_POST['first_name'];
   $middlename = $_POST['middle_name'];
   $lastname = $_POST['last_name'];
   $contact= $_POST['contact'];
   $email = $_POST['email'];
   $org = $_POST['org'];
   $location = $_POST['location'];
   $signatory_id = $_POST['signatory_id'];


	$update = mysqli_query($conn,"update signatory set first_name='$firstname',middle_name='$middlename',last_name='$lastname',contact='$contact',email='$email',org='$org',location='$location' where signatory_id='$signatory_id'");

	if($update)
	{
		   $message = "Signatory Updated";
	       header("location:../adminDashboard.php?message=$message");

	       //$change = mysqli_query($conn,"update orders set o_state=5 where order_id='$order_id'");
	}
	else
	{
		 $message = "Error Occred";
	       header("location:../adminDashboard.php?message=$message");
	}
}



 ?>