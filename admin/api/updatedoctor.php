<?php 
include 'conn.php';
$edit=$_POST['edit_id'];
    $name=$_POST['name'];
    $address=$_POST['address'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];

    $query=mysqli_query($conn,"UPDATE user_tb set name='$name',address='$address',mobile='$mobile',email='$email' where login_id='$edit'");

    if($query)
    {
        echo 'done';
    }
    else
    {
        echo 'fail';
    }
?>