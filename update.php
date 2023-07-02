<?php
//session_start();
include('d1.php');
//$servername="localhost";
//$username="root";
//$password="";
//$dbname="c2c";
//$con=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);

//include('includes/checklogin.php');
//check_login();
if(isset($_POST['submit']))
{

$name = $_POST['name'];
$email = $_POST['email'];
$contactno = $_POST['contactno'];
$message = $_POST['message'];

	   move_uploaded_file($temp_name,$url);

       $s="UPDATE `contact` SET `name`='$name',`email`='$email',`contactno`='$contactno',`message`='$message' WHERE id=".$_GET['id']." ";
       $statement=$con->prepare($s);
       $query=$statement->execute();
   
   if($query)
   {
       echo "<script>alert('Data successfully Updated'); window.location ='view.php'</script>";
   
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
<!--code edited by Ruksar-->
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   

    <!-- Main content -->
    <section class="content">
      <div class="row">
        
        <div class="col-md-6">
          <!-- Horizontal Form -->
        
          <!-- /.box -->
          <!-- general form elements disabled -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Update Course Details</h3>
            </div>
			
            <!-- /.box-header -->
            <div class="box-body">
            <?php
			include('config.php');
	                            $sql="SELECT * FROM 'contact' WHERE id=".$_GET['id']."";
										$statement=$con->prepare($sql);
										$statement->execute();
										$result=$statement->fetchAll();							
										 $cnt=1;
										foreach ($result as $row) {	?>	
              <form role="form" name="form1" method="post" enctype="multipart/form-data" action="" >
                <!-- text input -->
            <div class="form-group">
                  <label>name</label>
                     <input class="form-control" name="name" type="text" id="name" value="<?php echo $row['name']; ?>"  class="validate[required,length[0,100]] text-input">
                </div>

                <div class="form-group">
                  <label>phoneno</label>
                  <textarea id="editor1"  name="contactno" id="contactno"  class="form-control" ><?php echo $row['contactno']; ?>
                            </textarea>
                </div>
               
			   <div class="form-group">
                  <label>email</label>
                     <input class="form-control" value="<?php echo $row['email']; ?>" name="email" type="text" id="email">
                </div>
               <div class="form-group">
                  <label>message</label>
                     <input class="form-control" value="<?php echo $row['message']; ?>" name="message" type="text" id="message">
                </div>
                <?php } ?>
               
			   <div class="box-footer">
			   <button type="submit" name="submit" class="btn btn-primary">Submit </button>
            
                 </div>
               

              </form>
              
         
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
</body>
</html>