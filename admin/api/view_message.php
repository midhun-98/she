<?php 
include('conn.php');
$query=mysqli_query($conn,"SELECT * FROM message_tb");
$data=array();
while($row=mysqli_fetch_assoc($query))
{
    $array['sender_id']=$row['sender_id'];
    $array['recever_id']=$row['recever_id'];
    $array['message']=$row['message'];
    $array['date']=$row['date'];
    array_push($data,$array);
}
echo json_encode($data);
?>