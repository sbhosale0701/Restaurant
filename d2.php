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



<!DOCTYPE html>
<html>
<body class="hold-transition skin-blue sidebar-mini">
								
				 <form role="form" name="form1" method="post" enctype="multipart/form-data" action="" >
                <!-- text input -->
              
				<div class="form-group">
                  <label>Name</label>
                     <input class="form-control" name="name" type="text" id="name"  class="validate[required,length[0,100]] text-input">
                </div>
				<div class="form-group">
                  <label>Email</label>
                     <input class="form-control" name="email" type="text" id="email">
                </div>
			   <div class="form-group">
                  <label>Contactno</label>
                     <input class="form-control" name="contactno" type="text" id="contactno">
                </div>

                <div class="form-group">
                  <label>Message</label>
                  <textarea id="editor1"  name="message" id="message" class="form-control" >
                            </textarea>
                </div>
               
			
               
               
			   <div class="box-footer">
			   <input type="submit" name="submit" class="btn btn-primary" value="Submit">
            
                 </div>
               

              </form>
</body>
</html>