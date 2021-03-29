<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>実用的な例</title>
  </head>
  <body>
    <?php
      echo $_SERVER['HTTP_USER_AGENT'];
    ?> <br />
    <hr>
    <?php
      if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false) {
        echo 'あなたはInternet Explorerを使用しています。<br />';
      } else {
        echo 'あなたはInternet Explorerを使用していません。<br />';
      }
    ?>
    <hr>
    <?php
      if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false) {
    ?>
        <h3>strposが非falseを返しました</h3>
        <center><b>あなたはInternet Explorerを使用しています</b></center>
    <?php
      } else {
    ?>
        <h3>strposがfalseを返しました</h3>
        <center><b>あなたはInternet Explorerを使用していません</b></center>
    <?php
      }
    ?>
  </body>
</html>