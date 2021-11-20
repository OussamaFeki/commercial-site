<!DOCTYPE html>
<?php
session_start();
require_once'conn.php';
$sql = "SELECT * FROM article";
$resultat = mysqli_query($conn,$sql);
$id_f =$_SESSION['ID'];
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>helper </title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <style type="text/css">
      body{
        background-image: url("https://img.chefdentreprise.com/Img/FICHEPRATIQUE/2020/8/352250/Creation-service-client-comment-marche--F.jpg?_ga=2.176942701.992322980.1620684790-433959318.1620684790");
       background-repeat: no-repeat;
       background-size: 2000px 900px;
      }
      ul{
       background-color:#F97D03;
       color: white;
       background-size: 100px 100PX;

      }
    </style>
  </head>
  <body>
    <nav align="left">
      <ul>
        <?php
      echo "<li> <a href=edithelper.php?ID=".$id_f.">edit</a></li>
          <li> <a href='messagetohelp.php'>message</a></li>
          <li> <a href='buyline.php'>logout</a></li>"
       ?>
     </ul>
    </nav>
<table border='1' align="center" class="t2">
 <?php if (mysqli_num_rows($resultat)>0){
   echo "<tr><td>ID:</td> <td> Name:</td><td>State:</td> <td>description:</td><td>price:</td><td>name pic:</td><td> pic:</td></tr>";
   while($row= mysqli_fetch_assoc($resultat))
    {echo "<tr><td>".$row["id"]."</td><td>".$row["nom"]."</td><td>".$row["etat"]."</td><td>".$row["description"];
      $img_dir=$row['img_dir'];
      $img=$row['pic'];
      echo "</td><td>".$row["prix"]."dt</td><td>".$img_dir."</td><td><img src='data:image;base64,".base64_encode($row['pic'])."'alt='there is no picture' style='width:200px; height: 200px' >";
      echo "</td><td><a href=editarticle.php?ID=".$row['id'].">edit</a></td></tr>";}}
       else
           {
           echo"0 résultats<br>";
            }
  ?>
</table>

  </body>
</html>
