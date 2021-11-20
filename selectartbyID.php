<?php
require_once 'conn.php';
$ID_f=$_GET['ID'];
$req="SELECT * FROM article where ID='$ID_f'";
$resulat=mysqli_query($conn,$req);
$row=mysqli_fetch_assoc($resulat);
?>
