<?php

//session_start();
include('d1.php');
//include('includes/checklogin.php');
//check_login();
if(isset($_POST['submit']))

{

 $name=$_POST['name'];
 $email=$_POST['email'];
 $contactno=$_POST['contactno'];
 $message=$_POST['message'];


 $query="INSERT INTO `contact` (`id`, `name`, `email`, `contactno`, `message`) VALUES (NULL, '$name', '$email', '$contactno', '$message')";
$statement=$con->prepare($query);
	$query=$statement->execute([$name,$email,$contactno,$message]);

		//$statement->execute([$title,$description,$url]);

if($query)
{
	echo "<script>alert('Data are saved successfully');</script>";

}
else
{
	echo "<script>alert('something gose wrong');</script>";
}
}
?>