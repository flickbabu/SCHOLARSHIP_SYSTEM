<?php

include("../database/dbconnection.php");
$message = "";

if($_POST)
{
   $firstname= $_POST['first'];
   $middlename = $_POST['middle'];
   $lastname = $_POST['last'];
   $email = $_POST['email'];
   $password= $_POST['password'];
   $encrypt = base64_encode($password);
   $cpassword = $_POST['cpassword'];
  
//lets insert

$checkemail = mysqli_query($conn,"select * from student where email ='$email'");

if(mysqli_num_rows($checkemail)==1)
{

         $message = "Email already Exists";
         header("location:../register.php?message=$message");
}
else if($password != $cpassword)
 {
          $message = "Sorry Your password and confirm password don't match!!";
          header("location:../register.php?message=$message");
 }
else
{

     
     $insert = mysqli_query($conn,"insert into student (first_name,middle_name,last_name,email,password) values ('$firstname','$middlename','$lastname','$email','$encrypt')");

      if($insert)
      
       {
 	       $message = "Account Created Successfully .";
	       header("location:../index.php?message=$message");
       }
      else
      {
 	  
 	      $message = "Account Not Created.";
	      header("location:../register.php?message=$message");
      }



}

} 
 ?>