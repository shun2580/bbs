<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>MyBBS</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>

  <body>
    <div class="title">
	    <h1>MyBBS</h1>
    </div>

    <div class="kekka">
      <div class="kekka_tape"></div>
      <?php
        if(!empty($_POST["name"]) && !empty($_POST["text"])) {
          $id = null;
          $name = $_POST["name"];
          date_default_timezone_set('Asia/Tokyo');
          $time = date("Y-m-d H:i:s");
          $text = $_POST["text"];

          $pdo = new PDO("mysql:dbname=mybbs;host=localhost","root","");

          $stmt = $pdo->prepare("INSERT INTO post(id, name, time, text) VALUES (:id,:name,:time,:text)");
          $stmt->bindParam(":id", $id);
          $stmt->bindParam(":name", $name);
          $stmt->bindParam(":time", $time);
          $stmt->bindParam(":text", $text);
          $stmt->execute();

          print "<h2>登録が完了しました</h2>";
          print "<h3><a href=index.php>掲示板へ戻る</a></h3>";

        } else {
          print "<h2>※登録に失敗しました</h2>";
          print "<h3><a href=index.php>掲示板へ戻る</a></h3>";
        }
      ?>
    </div>
  </body>
</html>
