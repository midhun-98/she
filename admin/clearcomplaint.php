<?php
include 'conn.php';
$edit=$_GET['edit_id'];
mysqli_query($conn,"UPDATE complaint_tb set status='1' where com_id='$edit'");
header("location: viewcomplaints.php");
?>

