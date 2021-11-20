<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "articl";
// Création de la connexion
$conn = mysqli_connect($servername, $username, $password,$dbname);
// Vérification de la connexion
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
?>
