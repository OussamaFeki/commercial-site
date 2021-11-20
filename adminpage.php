<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>adminpage</title>
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
    <script type="text/javascript">
    function hello(){
      alert("welcom admin")
    }


    </script>
  </head>
  <body onload="hello()">
    <header align="center">
      <h1>adminpage</h1>
    </header>
    <nav>
    <table align="left">
      <tr><td>
    <a href='addhelper.html'>addhelper</a></td>
    <tr><td><a href='edit.html'>edit</a></td></tr>
    <tr><td><a href='#'>list_article</a></td></tr>
    <tr><td><a href='addarticle.html'>addarticle</a></td></tr>
    <tr><td><a href='message.php'>message</a></td></tr>
    <tr><td><a href="listhelper.php">List helper </a></td></tr>
    <tr><td> <a href="buyline.php">logout</a></td></tr>
  </table><br>
</nav><br>
  <section>
    <article>
<?php
include_once('article.php');

 ?>
    </article>
  </section>
  </body>
</html>
