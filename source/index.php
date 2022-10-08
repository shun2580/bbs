<!DOCTYPE html>
<html lang="ja" >
  <head>
    <meta charset="UTF-8">
    <title>MyBBS</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>

    <div class="title">
	  <h1>MyBBS</h1>
    </div>

		<!--投稿機能部分-->
    <section class="toukou">
      <div class="toukou_tape"></div>
      <h2>投稿はこちら</h2>
      <form action="send.php" method="post">
        <div class="name">
          <span class="label">投稿者 <input type="text" name="name" value="">
        </div>
        <div class="honbun">
          <span class="label">本文
				  <textarea name="text" cols="30" rows="3" maxlength="64" wrap="hard" placeholder="64字以内で入力してください。"></textarea>
        </div>
        <button type="submit">投稿</button>
      </form>
    </section>

		<!--投稿一覧部分-->
		<div class="itiran">
      <section>
        <div class="itiran_tape"></div>
	      <h2>投稿一覧</h2>
      </section>

		  <?php
        $pdo = new PDO("mysql:dbname=mybbs;host=localhost","root","");
        $n = $pdo -> query("SELECT * FROM post ORDER BY id DESC");
        while($i = $n -> fetch()) {
          print "<br>{$i['name']} / {$i['time']}<br><br>"
          .nl2br($i['text'])."<hr>";
        }
      ?>
    </div>

  </body>
</html>
