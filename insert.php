<?php
include_once('conn.php');
$id_f=$_GET['ID'];
$sql = "UPDATE message SET confir='confirmed'
WHERE id_mess='$id_f'";
if (mysqli_query($conn, $sql)) {
header('location:message.php');
} else {
echo "Erreur: " . mysqli_error($conn);
}
 ?>
