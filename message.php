<?php
require_once'conn.php';
$sql = "SELECT * FROM message";
$resultat = mysqli_query($conn,$sql);
 ?>
 <html>
   <head>
     <title>messages</title>
     <link rel="stylesheet" href="style.css" type="text/css">
     <style type="text/css" >
     body{ background-image:url("https://www.akamai.com/fr/fr/multimedia/images/article/2019/premium-3-service-overview-image.jpg?imwidth=1366");
     background-repeat: no-repeat;
     background-size: 2000px 900px;
}
ul{
 background-color:#F97D03;
 color: white;
 background-size: 100px 100PX;}

   input{color:white;}

     </style>
     <script>
         function setColor(btn, color) {
             var property = document.getElementById(btn);
             if (property.value=="confirmed") {
                 property.style.backgroundColor = "#FF0000"
                 property.value="disconfirmed"


             }
             else {
                 property.style.backgroundColor = "#00FF00"
                 property.value="confirmed"

             }
         }
     </script>
   </head>
   <body onload="afficher()">
     <header>
       <h1 align='center'>Messages</h1>
     </header>
     <nav align="left">
       <ul align="left">
         <li> <a href="buyline.php">logout</a></li>
         <li><a href='edit.html'>edit</a></li>
         <li><a href='adminpage.php'>list_article</a></li>
         <li><a href='addarticle.html'>addarticle</a></li>
         <li><a href='message.php'>message</a></li>
         <li><a href="listhelper.php">List helper </a></li>
       </ul>

     </nav>
      <table border='1' align="center" width="50%" cellpadding="5" cellspacing="5" class="t2">
 <?php if (mysqli_num_rows($resultat)>0){
   echo "<tr><td>ID:</td> <td>article Name:</td><td>article price:</td><td>Name:</td><td>Email:</td><td>tel:</td><td>country:</td><td>address:</td>
   <td>command conformation:</td></tr>";
   while($row= mysqli_fetch_assoc($resultat))
    {
    echo "<tr><td>".$row["ID"]."</td><td>".$row["art"]."</td><td>".$row["prix"]."dt</td><td>".$row["name"]."</td><td>".$row["mail"]."</td><td>".$row["tel"]."</td><td>".$row["country"]."</td><td>".$row["addresse"];
    echo "</td><td>".$row["confir"]."</td>";
    echo "<td><li><a href=insert.php?ID=".$row["id_mess"].">confirmation</a></td>";
    echo "<td><li><a href=dis.php?ID=".$row["id_mess"].">disconfirmation</a></td>";
    echo "<td><a href=delet.php?ID=".$row["id_mess"].">delete</a></td></tr>";}}
  else
       {
       echo"<tr><td>0 résultats</td></tr>";
        }
 ?>
      </table>
   </body>
 </html>
