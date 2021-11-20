<head>
  <meta charset="utf-8">
  <title>edit helper</title>
  <style type="text/css">
   input{border:solid red;}
   h1{font-size:30pt;
    color=blue;}
    body{background-color:#708090; }

  </style>
</head>
<body>
  <?php
  require_once 'selectartbyID.php';
  ?>
  <table align="center">
    <form action="updatearticle.php" method="post">
    <tr>
    <td>
      ID:</td><td><p><?php echo "$ID_f" ?></td></p><input type="hidden" name="ID" value="<?php echo "$ID_f"?>"></tr>
      <tr><td>Name of article:</td><td><input type="text" name="name" size="20"/></td></tr>
      <tr><td>state:</td><td><input type="radio" name="state" value="onstock">onstock</td>
      <td><input type="radio" name="state" value="outstock">outstock</td></tr>
    <tr><td>price:</td><td><input type="number" name="prix" value=""></td><td>DT
    </td></tr>
    <tr><td>description:</td>
      <td><textarea name="des" placeholder="write the decripion here"
         rows="8" cols="80"></textarea></td>
    </tr>
      <tr><td><input type="submit" value="edit"/></td><td>
      <input type="reset" value="reset"/></td></tr>
      </form>
    </table>
</body>
</html>
