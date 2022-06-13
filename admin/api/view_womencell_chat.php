<?php 
include('conn.php');
$id=$_POST['login_id'];
$query=mysqli_query($conn,"SELECT * FROM chat_womencell_tb WHERE login_id='$id'");

if(mysqli_num_rows($query)>0)
{
    while($row_data=mysqli_fetch_assoc($query)){
        $response[]= $row_data;
    }
    
  }
 echo json_encode($response);
?>
