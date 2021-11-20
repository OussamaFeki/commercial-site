<?php
$ID=$_POST['ID'];
$art=$_POST['art'];
$price=$_POST['prix'];
$name=$_POST['name'];
$mail=$_POST['mail'];
$tel=$_POST['ph'];
$count=$_POST['country'];
$address=$_POST['add'];
include_once('conn.php');
$sql = "INSERT INTO message (ID,art,prix,name,mail,tel,country,addresse,confir)
VALUES ('$ID','$art','$price','$name','$mail','$tel','$count','$address','disconfirmed')";
if (mysqli_query($conn, $sql)) {
echo "commond envoyé attent un appele de l'actioneur";
} else
echo "Erreur: " . $sql . "<br>" . mysqli_error($conn);
 ?>


 ?>
