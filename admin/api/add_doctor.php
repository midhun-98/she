<?php
include 'conn.php';

    $user=$_POST['username'];
    $pass=$_POST['password'];
    $name=$_POST['name'];
    $address=$_POST['address'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];

   $query=mysqli_query($conn,"INSERT INTO login_tb(username,password,role)VALUES('$user','$pass','doctor')");
    $id=mysqli_insert_id($conn);

   $query1=mysqli_query($conn,"INSERT INTO user_tb(login_id,username,password,name,address,mobile,email)VALUES('$id','$user','$pass','$name','$address','$mobile','$email')");
   
   if($query&&$query1)
   {
       $array['message']='done';
   }
   else
   {
       $array['message']='failed';
   }
   echo json_encode($array);
?>