<?php
require_once 'selectartbyID.php';
$art=$row['nom'];
$price=$row['prix'];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>identfication client </title>
  </head>
  <body>
    <table align="center">
      <form action="envoyer.php" method="post">
      <tr>
      <td>
        ID:</td><td><p><?php echo "$ID_f" ?></p></td><input type="hidden" name="ID" value="<?php echo "$ID_f"?>"></tr>
        <tr>
        <td>article name:</td><td><p><?php echo "$art" ?></p></td><input type="hidden" name="art" value="<?php echo "$art"?>"></td>
        </tr>
        <td>article price:</td><td><p><?php echo $price."dt" ?></p></td><input type="hidden" name="prix" value="<?php echo "$price" ?>"></td>
        </tr>
        <tr>
        <td>fullname:</td><td><input type="text" name="name" size="20"/></td>
        </tr>
        <tr><td>email:</td><td><input type="email" name="mail" size="20"/></td></tr>
      <tr><td>telephone number:</td><td><input type="tel" name="ph" size="8"/></td></tr>
      <tr><td>country:</td><td><input type="text" name="country" size="10"/></td></tr>
      <tr><td>address:</td><td><input type="text" name="add" size="40"/></td></tr>
        <tr><td><input type="submit" value="buy"/></td><td>
        <input type="reset" value="reset"/></td></tr>
        </form>
      </table>
  </body>
</html>
