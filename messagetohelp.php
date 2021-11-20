<!DOCTYPE html>
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
      body{ background-image:url("https://itsocial.fr/wp-content/uploads/2020/06/os_uzunidis_235135786-2.jpg");
      background-repeat: no-repeat;
      background-size: 2000px 900px;
}
ul{
 background-color:#F97D03;
 color: white;

}
    </style>
  </head>
  <body>
    <nav align="left">
      <ul>
        <?php
      echo "<li> <a href=edithelper.php?ID=".$id_f.">edit</a></li>
          <li> <a href='#'>message</a></li>";
      echo "<li> <a href='helper.php'>list of article</a></li>
      <li> <a href='buyline.php'>logout</a></li>";
       ?>
     </ul>
    </nav>
    <table border='1' align="center" width="50%" cellpadding="5" cellspacing="5" class="t2">
<?php
require_once'conn.php';
$sql = "SELECT * FROM message";
$resultat = mysqli_query($conn,$sql);
if (mysqli_num_rows($resultat)>0){
 echo "<tr><td>ID:</td> <td>article Name:</td><td>Name:</td><td>Email</td><td>tel:</td></tr>";
 while($row= mysqli_fetch_assoc($resultat))
  {
  echo "<tr><td>".$row["ID"]."</td><td>".$row["art"]."</td><td>".$row["name"]."</td><td>".$row["mail"]."</td><td>".$row["tel"];
   echo "</td><td>".$row["confir"]."</td>";
    echo "<td><a href=insertohelp.php?ID=".$row["id_mess"].">confirmation</a></td>";
      echo "<td><a href=dishelp.php?ID=".$row["id_mess"]." >disconfirmation</a></td></tr>";}}
else
     {
     echo"0 résultats<br>";
      }
?>
  </body>
</html>
