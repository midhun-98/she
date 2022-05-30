<?php 
include('conn.php');
$query=mysqli_query($conn,"SELECT * FROM doctor_tb join login_tb on doctor_tb.login_id=login_tb.login_id where role='doctor'");
$data=array();
while($row=mysqli_fetch_assoc($query))
{
    
    $array['name']=$row['doctor_name'];
    $array['spec']=$row['specialisation'];
    $array['hos']=$row['hospital'];
    array_push($data,$array);
}
echo json_encode($data);
?>
