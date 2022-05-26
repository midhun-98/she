<?php 
include('conn.php');
$edit=$_POST['edit_id'];
$query=mysqli_query($conn,"SELECT * FROM user_tb where login_id='$edit'");
    
    if(mysqli_num_rows($query)>0)
    {
      while($row_data=mysqli_fetch_assoc($query)){
          $response[]= $row_data;
      }
      
    }
   echo json_encode($response);
?>