<?php 
include('conn.php');
$query=mysqli_query($conn,"SELECT * FROM complaint_tb JOIN user_tb on user_tb.login_id=complaint_tb.login_id where status='0'");
    
while($row=mysqli_fetch_assoc($query))

if($query)
{
    $array['message']='success';
    $array['data']=$row['login_id'];
    $array['data1']=$row['cell_id'];
    $array['data2']=$row['acknowledgement'];
    $array['data3']=$row['date'];
}
else
{
    $array['message']='false';
}
echo json_encode($array);
?>