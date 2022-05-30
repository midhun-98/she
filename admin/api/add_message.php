<?php
include 'conn.php';

    $sender=$_POST['sender_id'];
    $recever=$_POST['recever_id'];
    $message=$_POST['message'];

   $query=mysqli_query($conn,"INSERT INTO message_tb(sender_id,recever_id,message)VALUES('$sender','$recever','$message')");
   
   if($query)
   {
       $array['message']='done';
   }
   else
   {
       $array['message']='failed';
   }
   echo json_encode($array);
?>