<?php 
include('conn.php');
$query=mysqli_query($conn,"SELECT * FROM womencell_tb join login_tb on womencell_tb.login_id=login_tb.login_id where role='womencell'");
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