<?php
include_once('conn.php');
$ID=$_POST['ID'];
$name=$_POST['name'];
$state=$_POST['state'];
$prix=$_POST['prix'];
$des=$_POST['des'];
$sql = "UPDATE article SET nom='$name',etat='$state',description='$des',prix='$prix'
WHERE ID='$ID'";
if (mysqli_query($conn, $sql)) {
echo "Record changed";
} else {
echo "Erreur: " . mysqli_error($conn);
}
 ?>
