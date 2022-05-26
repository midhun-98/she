<?php
include 'conn.php';
$edit=$_POST['edit_id'];

$msg=$_POST['msg'];

$query=mysqli_query($conn,"UPDATE chat_doctor SET reply='$msg' WHERE chat_id='$edit'");

if($query)
{
    echo 'done';
}
else
{
    echo 'fail';
}

?>