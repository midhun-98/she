<?php
include 'conn.php';

    $title=$_POST['title'];
    $des=$_POST['des'];
    $query=mysqli_query($conn,"INSERT INTO primarycare_tb(tip_title,tip_description)VALUES('$title','$des')");
    
    if($query)
    {
        echo 'done';
    }
    else
    {
        echo 'failed';
    }
?>