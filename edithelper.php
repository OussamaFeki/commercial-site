<html>
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
    require_once 'selecthelperbyId.php';
    ?>
    <table align="center">
      <form action="updatehelper.php" method="post">
      <tr>
      <td>
        ID:</td><td><p><?php echo "$ID_f" ?></td></p><input type="hidden" name="ID" value="<?php echo "$ID_f"?>"></tr>
        <tr><td>email:</td><td><input type="email" name="mail" size="20"/></td></tr>
        <tr><td>new passeword:</td><td><input type="password" name="mt"/></td></tr>
        <tr><td><input type="submit" value="edit"/></td><td>
        <input type="reset" value="reset"/></td></tr>
        </form>
      </table>
  </body>
</html>
