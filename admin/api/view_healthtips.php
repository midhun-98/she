<?php 
include('conn.php');
$query=mysqli_query($conn,"SELECT * FROM primarycare_tb");
$data=array();
while($row=mysqli_fetch_assoc($query))
{
    $array['title']=$row['tip_title'];
    $array['des']=$row['tip_description'];
    array_push($data,$array);
}
echo json_encode($data);
?>