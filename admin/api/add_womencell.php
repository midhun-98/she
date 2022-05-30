<?php
include 'conn.php';

    $user=$_POST['username'];
    $pass=$_POST['password'];
    $name=$_POST['name'];
    $address=$_POST['location'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
   
    $query=mysqli_query($conn,"INSERT INTO login_tb(username,password,role)VALUES('$user','$pass','womencell')");
    $id=mysqli_insert_id($conn);

    $query1=mysqli_query($conn,"INSERT INTO womencell_tb(login_id,name,location,mobile,email)VALUES('$id','$name','$location','$mobile','$email')");
    
    if($query&&$query1)
    {
        $array['message']='success';
    }
    else
    {
        $array['message']='failed';
    }
    echo json_encode($array);
?>