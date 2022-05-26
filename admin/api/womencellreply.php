<?php
include 'conn.php';
$edit=$_POST['edit_id'];

$msg=$_POST['msg'];

$query=mysqli_query($conn,"UPDATE womencell_tb SET reply='$msg' WHERE login_id='$edit'");

if($query)
{
    echo 'done';
}
else 
{
    echo 'fail';
}

?>