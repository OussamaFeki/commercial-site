<?php
require_once 'conn.php';
$art=$_POST['art'];
$state=$_POST['state'];
$prix=$_POST['prix'];
$des=$_POST['des'];
$mag=addslashes(file_get_contents($_FILES["pic"]["tmp_name"]));
$file_tmp_name=$_FILES["pic"]["name"];
$sql = "INSERT INTO article (nom,etat,prix,description,pic,img_dir)
VALUES ('$art','$state','$prix','$des','$mag','$file_tmp_name')";
if (mysqli_query($conn, $sql)) {
header('location:article.php');
} else {
echo "Erreur: " . $sql . "<br>" . mysqli_error($conn);
}
 ?>
