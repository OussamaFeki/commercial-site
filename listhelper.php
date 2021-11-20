<?php
require_once'conn.php';
$sql = "SELECT * FROM helper";
$resultat = mysqli_query($conn,$sql);
?>
<html>
  <head>
    <title>list of helpers</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <style type="text/css">
      body{
        background-image: url("https://static.cotemaison.fr/medias_11959/w_1939,h_1085,c_crop,x_109,y_246/w_2000,h_1125,c_fill,g_north/v1610462621/comment-fabriquer-une-bibliotheque-sur-mesure-3_6123174.jpeg");
       background-repeat: no-repeat;
       background-size: 2000px 900px;
      }
    </style>
    <script type="text/javascript">
      function affiche() {
        alert("table ressouce modified");
      }
    </script>
  </head>
  <body onchange="affiche()" >
    <header>
      <h1 align='center'>List of Helpers</h1>
    </header>
     <table border='1' align="center" class="t2">
<?php if (mysqli_num_rows($resultat)>0){
  echo "<tr><td>ID:</td> <td> Name:</td><td>Email</td> <td>password:</td></tr>";
  while($row= mysqli_fetch_assoc($resultat))
   {
   echo "<tr><td>".$row["ID"]."</td><td>".$row["name"]."</td><td>".$row["email"]."</td><td>".$row["pass"];
   echo "</td><td><a href=edithelper.php?ID=".$row["ID"].">edit</a></td>";
   echo "<td><a href=delethelper.php?ID=".$row["ID"].">delete</a></td></tr>";}}
 else
      {
      echo"0 résultats<br>";
       }
?>
<tr>
  <td><a href="addhelper.html">addhelper</a></td>
</tr>
     </table>
  </body>
</html>
