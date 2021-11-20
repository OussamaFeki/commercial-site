<!DOCTYPE html>
<html lang="en" dir="ltr" >
  <head>
    <meta charset="utf-8">
    <title></title>
    <script type="text/javascript">
      function afiche(){
        alert("the helper is added");
      }
    </script>
  </head>
  <body>
<?php
$name=$_POST['name'];
$email=$_POST['mail'];
$pass=$_POST['mt'];
include_once('conn.php');
$sql = "INSERT INTO helper(name,email,pass)
VALUES ('$name', '$email','$pass')";
if (mysqli_query($conn, $sql)) {
header('location:listhelper.php');
} else
echo "Erreur: " . $sql . "<br>" . mysqli_error($conn);
 ?>
</body>
</html>
