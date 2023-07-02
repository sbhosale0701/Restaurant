<?php
//session_start();
include('d1.php');
/*if(isset($_SESSION['u_username'])) {
  //echo "Your session is running " . $_SESSION['u_rolecode'];
}*/

	error_reporting (E_ALL ^ E_NOTICE);
	if(isset($_GET['id']) && isset($_GET['table']))
	{
	$id=$_GET['id'];
	$tablename=$_GET['table'];
	$return=$_GET['return'];
	$id=$_GET['id'];
	//$query=mysql_query("DELETE FROM $tablename WHERE id=$id");
	
	
	
	$statement=$con->prepare("DELETE FROM $sample WHERE id=$id ");
	$query=$statement->execute();
	echo $id=$_GET['image'];
	 if($_GET['image'])
	{
		$s=$_GET['image'];
		 echo $s = substr($s, 32); 
		// $s="../uploads/syllabus/"$s;
		unlink($s);
		
                
	}
	echo "<script type='text/javascript'> alert('Recored deleted successfully'); window.location='$return'</script>";
	//header("location:n?msg=Record Deleted Successfully!&id=$id");
	}

?>