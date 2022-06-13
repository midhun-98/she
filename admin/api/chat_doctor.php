<?php
include 'conn.php';

    $id=$_POST['login_id'];
    $msg=$_POST['message'];
    $date=$_POST['date'];
    
    $query=mysqli_query($conn,"INSERT INTO chat_doctor(login_id,message,date) VALUES ('$id','$msg','$date')");
    
    if($query)
    {
        echo 'true';
    }
    else
    {
        echo 'false';
    }
?>