<?php
session_start();
require_once'conn.php';
$mail=$_POST['mail'];
$mt=$_POST['mt'];
$sql = "SELECT * FROM helper where email='$mail'and pass='$mt'";
$resultat = mysqli_query($conn,$sql);
if($mail=="oussama@gmail.com"){
  if (!empty($_SESSION['pass'])){$newpass=$_SESSION['pass'];
    if($mt==$newpass){
    header('location:adminpage.php');}}
elseif ($_POST['mt']=="hello"){
      header('location:adminpage.php');
  }
    else {
      echo"wrong password";
  }}
elseif($resultat){
  $row=mysqli_fetch_assoc($resultat);
  $_SESSION['ID']=$row['ID'];
header('location:helper.php');
}
else {
  echo"fault go back ";
}
?>
