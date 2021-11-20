<?php
include_once('conn.php');
$id_f=$_GET['ID'];
$conf="disconfirmed";
$sql = "UPDATE message SET confir='$conf'
WHERE id_mess='$id_f'";
if (mysqli_query($conn, $sql)) {
header('location:messagetohelp.php');
} else {
echo "Erreur: " . mysqli_error($conn);
}
 ?>
