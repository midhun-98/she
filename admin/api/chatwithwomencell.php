<?php 
session_start();
include('conn.php');
$query=mysqli_query($conn,"SELECT * FROM womencell_tb join user_tb on womencell_tb.login_id=user_tb.login_id");
while($row=mysqli_fetch_assoc($query))

if($query)
{
    $array['message']='done';
    $array['data']=$row['name'];
    $array['data1']=$row['chat'];
    $array['data2']=$row['discussion_date'];
}
else
{
    $array['message']='fail';
}
echo json_encode($array);
?>