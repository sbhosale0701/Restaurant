<html>
<body>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
              <thead style="background-color:#3173AD; color: white;">
                                 <tr>
                                    <th>Sr. No</th>
                                   
                                   
                                    
                                   <!-- <th>Color</th>-->
                                   
                                      <th>Name</th> 
									  <th>Email</th>  
									  <th>Contact</th>
                                   <th>Message</th>
                                    <th>Update</th>
                                     <th>Delete</th>
                                 </tr>
                              </thead>
                              <tbody>
	
	
	
    <?php
   include('d1.php');
   
	                            $sql="SELECT * FROM contact";
										$statement=$con->prepare($sql);
										$statement->execute();
										$result=$statement->fetchAll();							
										 $cnt=1;
										foreach ($result as $row) {	?>									
										<tr>
					 <td><?php echo $cnt; ?></td>
					
					  <td><?php echo $row['name']; ?></td>
					  <td><?php echo $row['email']; ?></td>
					  <td><?php echo $row['contact']; ?></td>
					  <td><?php echo $row['message']; ?></td>
					  
			
					  <td>
 <a href="update.php?id=<?php echo $row['id'];?>">update</a>


<td align="center"><a onclick="return confirm('Are you sure you want to delete this page?')" href="delete.php?id=<?php echo $row['id']; ?>&table=online_course&return=view_course.php">delete</a></td>
                                                                
</td>
										</tr>
										<?php $cnt=$cnt+1; } ?>
							   </tbody>
              </table>
			  
            </div>
            <!-- /.box-body -->
   
</body>

</html>