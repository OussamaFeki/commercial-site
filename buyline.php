<!DOCTYPE html>
<?php
require_once'selectarticle.php';
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <nav align="left">
      <ul>
        <li><a href="login.html">login As Admin/helper</a></li>
      </ul>
    </nav>
     <html>
       <head>
         <title>buyline</title>
         <link rel="stylesheet" href="style.css" type="text/css">
       </head>
       <body>
         <header>
           <h1 align='center'>buyline</h1>
         </header>
         <table border='1' align="center" class="t2">
     <?php if (mysqli_num_rows($resultat)>0){
      echo "<tr><td>ID:</td> <td> Name:</td><td>State:</td> <td>description:</td><td>price:</td><td>name pic:</td><td> pic:</td></tr>";
      while($row= mysqli_fetch_assoc($resultat))
       {
       echo "<tr><td>".$row["id"]."</td><td>".$row["nom"]."</td><td>".$row["etat"]."</td><td>".$row["description"];
       $img_dir=$row['img_dir'];
       $img=$row['pic'];
       echo "</td><td>".$row["prix"]."dt</td><td>".$img_dir."</td><td><img src='data:image;base64,".base64_encode($row['pic'])."'alt='there is no picture' style='width:200px; height: 200px' >";
       echo "</td><td><a href=buy.php?ID=".$row['id'].">buy</a></td>";}}
       else
            {
            echo"0 résultats<br>";
             }
       ?>
     </table>
  </body>
</html>
