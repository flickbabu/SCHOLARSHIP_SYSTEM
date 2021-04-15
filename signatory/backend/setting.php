<?php 
include("../database/dbconnection.php");
$message = "";

if($_POST)
{
	$password = $_POST['password'];
	$encryptpass = base64_encode($password);
	$cpassword = $_POST['cpassword'];
	$encryptpas = base64_encode($cpassword);
	$epassword = $_POST['epassword'];
	$encryptpa = base64_encode($epassword);
	$ecpassword = $_POST['ecpassword'];
	$encryptp =base64_encode($ecpassword);
	$email = $_POST['email'];
	


//check email

 $checkpassword = mysqli_query($conn, "select * from signatory where password='$encryptpass' and email='$email' ");

if($password != $cpassword)
{
	      $message = "Old password and confirm password don't match!!";
          header("location:../setting.php?message=$message");
}
else if($epassword != $ecpassword)
{
	    $message = "New password and confirm password don't match!!";
         header("location:../setting.php?message=$message");
}
else if(mysqli_num_rows($checkpassword)==1)
{
	 $update = mysqli_query($conn,"update signatory set password='$encryptpa' where email='$email'");

	 if($update)
 	{
 		 $message = "Password Changed.";
         header("location:../setting.php?message=$message");
 	}
 	else
 	{
 		 $message = "Password not Changed.";
         header("location:../setting.php?message=$message");
 	}


}
else
{
	     $message = "Password Do Not Exist";
         header("location:../setting.php?message=$message");
}


}
 ?>