<?php
include 'conn.php';
$edit=$_POST['edit_id'];

    $title=$_POST['title'];
    $des=$_POST['des'];
    $query=mysqli_query($conn,"UPDATE primarycare_tb set tip_title='$title', tip_description='$des' WHERE tip_id='$edit'");
    
    if($query)
    {
        echo 'done';
    }
    else
    {
        echo 'fail';
    }

?>