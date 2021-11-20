<!DOCTYPE html>
<html>
<head>

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
  <style type="text/css">
    input{color:white;}
  </style>
</head>

<body>

<input type="button" id="button" value = "disconfirmed"   onclick="setColor('button', '#FF0000')"
formaction="insert.php"  />
</body>
</html>
