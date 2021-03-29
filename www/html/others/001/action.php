<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>:value !?</title>
  </head>
  <body>
    value = <?php echo htmlspecialchars($_POST['tmp_value']); ?><br>
    :value = <?php echo htmlspecialchars($_POST['tmp_colon_value']); ?><br>
  </body>
</html>