<?php 
include('conn.php');
$query=mysqli_query($conn,"SELECT * FROM user_tb join login_tb on user_tb.login_id=login_tb.login_id where role='womencell'");

while($row=mysqli_fetch_assoc($query))

if($query)
{
    $array['msg']='success';
    $array['data']=$row['name'];
    $array['data1']=$row['address'];
    $array['data2']=$row['mobile'];
    $array['data3']=$row['email'];
}
else
{
    $array['msg']='fail';
}
echo json_encode($array);
?>