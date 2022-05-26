<?php
session_start();
$_SESSION["id"]="";
session_destroy();
header("location: page-login.php");
?>