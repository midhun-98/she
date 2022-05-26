<?php
include 'conn.php';

if(isset($_POST['username'])&&isset($_POST['password']))
{
    $username=$_POST['username'];
$password=$_POST['password'];

$query=mysqli_query($conn,"SELECT * FROM login_tb WHERE `username`='$username' AND `password`='$password' AND `role`='women'");

    if(mysqli_num_rows($query)>0)
    {  
       $row=mysqli_fetch_assoc($query);
       $array['message']=True;
       $array['id']=$row['login_id'];
       
     }
     else
     {
      $array['message']=False;
     }
     echo json_encode($array);
}
?>