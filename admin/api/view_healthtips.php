<?php 
include('conn.php');
$query=mysqli_query($conn,"SELECT * FROM primarycare_tb");

while($row=mysqli_fetch_assoc($query))

if($query)
{
    $array['message']='done';
    $array['title']=$row['tip_title'];
    $array['des']=$row['tip_description'];
}
else
{
    $array['message']='fail';
}
echo json_encode($array);
?>