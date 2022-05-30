<?php 
include('conn.php');
$query=mysqli_query($conn,"SELECT * FROM police_tb join login_tb on police_tb.login_id=login_tb.login_id where role='police'");
$data=array();
while($row=mysqli_fetch_assoc($query))
{
    $array['name']=$row['name'];
    $array['location']=$row['location'];
    $array['mobile']=$row['mobile'];
    $array['email']=$row['email'];
    array_push($data,$array);
}
echo json_encode($data);
?>