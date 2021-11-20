<?php
include_once('conn.php');
$ID=$_POST['ID'];
$email=$_POST['mail'];
$pass=$_POST['mt'];
$sql = "UPDATE helper SET pass='$pass',email='$email'
WHERE ID='$ID'";
if (mysqli_query($conn, $sql)) {
echo "changed";
} else {
echo "Erreur: " . mysqli_error($conn);
}
 ?>
