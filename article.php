<!DOCTYPE html>
<?php
require_once'selectarticle.php';
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style type="text/css">
      h1{color: green;
        border:thick double #6A5ACD;
        font-family:Arial;
        background-color:orange;
      }
      a:active{color:red;
      }
      a:visited{color:purple;}
      a{font-size: 16pt;
      color:blue;}
      table{border:solid red;
    background-color:#00FFFF;
  padding:10px}
      table#2{border:solid white;
        background-color:white;
      }
      body{background-color:black;}
    </style>
  </head>
  <body>
    <form action="" method="post" enctype="multipart/form-data">
    <table border='1' align="center"width="50%" cellpadding="5" cellspacing="5" class="t2">
<?php if (mysqli_num_rows($resultat)>0){
 echo "<tr><td>ID:</td> <td> Name:</td><td>State:</td> <td>description:</td><td>price:</td><td>name pic:</td><td> pic:</td></tr>";
 while($row= mysqli_fetch_assoc($resultat))
  {
  echo "<tr><td>".$row["id"]."</td><td>".$row["nom"]."</td><td>".$row["etat"]."</td><td>".$row["description"];
  $img_dir=$row['img_dir'];
  $img=$row['pic'];
  echo "</td><td>".$row["prix"]."dt</td><td>".$img_dir."</td><td><img src='data:image;base64,".base64_encode($row['pic'])."'alt='there is no picture' style='width:200px; height: 200px' >";
  echo "</td><td><a href=editarticle.php?ID=".$row['id'].">edit</a></td>";
  echo "<td><a href=deletarticle.php?ID=".$row['id'].">delete</a></td></tr>";}}
else
     {
     echo"0 résultats<br>";
      }
?>
<tr>
  <td><a href="addarticle.html">addarticle</a></td>
</tr>
     </table>
     </form>
  </body>
</html>
