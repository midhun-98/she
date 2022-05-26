<?php
include 'conn.php';
$query=mysqli_query($conn,"SELECT * FROM user_tb join womencell_tb on user_tb.login_id=womencell_tb.login_id");
$query1=mysqli_query($conn,"SELECT * FROM womencell_tb");

    $lid=$_POST['l_id'];
    $cid=$_POST['c_id'];
    $ack=$_POST['ack'];
    $date=$_POST['date'];
    $query2=mysqli_query($conn,"INSERT INTO complaint_tb(login_id,cell_id,acknowledgement,date)VALUES('$lid','$cid','$ack','$date')");
    
    if($query2)
    {
        $array['message']= 'done';
    }
    else
    {
        $array['message']='fail';
    }
    echo json_encode($array);
?>