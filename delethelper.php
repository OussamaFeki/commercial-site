<?php
include_once('conn.php');
$id_f=$_GET['ID'];
$sql = "DELETE FROM helper WHERE id='$id_f'";
if (mysqli_query($conn,$sql)) {
header('location:listhelper.php');
} else {
echo "Erreur: " . mysqli_error($conn);
}

 ?>
