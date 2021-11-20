<?php
session_start();
$pass=$_POST['newpass'];
$_SESSION['pass']=$pass;
header('location:adminpage.php')
?>
