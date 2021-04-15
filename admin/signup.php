<?php include("database/dbconnection.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 

if(isset($_POST['submit']))
{
	$first = $_POST['first'];
  $last= $_POST['last'];
  $contact = $_POST['contact'];
  $email = $_POST['email'];
	$password = $_POST['password'];
  $encrypt = base64_encode($password);


    $insert = mysqli_query($conn,"insert into admin (first_name,last_name,contact,email,password) values ('$first','$last','$contact','$email','$encrypt')");


   if($insert)
   {
   	 echo "data inserted";
   }
   else
   {
   	echo "error";
   }

}




 ?>
<form action="" method="post">
<label>first name</label>
<input type="text" name="first">
<label>last name</label>
<input type="text" name="last">
<label>contact</label>
<input type="text" name="contact">
<label>email</label>
<input type="email" name="email">
<label>password</label>
<input type="password" name="password">
<input type="submit" name="submit" value="send">
</form>
</body>
</html>