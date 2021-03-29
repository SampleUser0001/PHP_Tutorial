<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Formの処理</title>
  </head>
  <body>
    こんにちは、<?php echo htmlspecialchars($_POST['name']); ?>さん。
    あなたは、<?php echo (int)$_POST['age']; ?> 歳です。
  </body>
</html>