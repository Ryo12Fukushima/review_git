<?php

$dsn = 'mysql:host=localhost;dbname=sample';
$user = 'root';
$pass = 'ryo12fuku';

try {
$dbh = new PDO($dsn,$user,$pass,[
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
]);


$sql = 'SELECT * FROM reviews';
$stmt = $dbh->query($sql);
$result = $stmt->fetchall(PDO::FETCH_ASSOC);
$dbh = null;
} catch(PDOException $e) {
echo '接続失敗'. $e->getMessage();
exit();
};

 ?>


<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
  <link rel="stylesheet" href="main.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<title>エフェクター掲示板</title>
<meta name="keywords" content="ページのキーワードA,B,C" />
<meta name="description" content="ページの説明" />
<link rel="stylesheet" href="main.css" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>  <script>
$(function(){
  // ここに処理を記述
  $('.button').click(function(){
    /*$('.button').removeClass('active')*/
    $(this).addClass('active')
  });
});
</script>
</head>
<body>
<div id="outer">
<div id="header"><h1>エフェクター掲示板</h1>
<p class="description">ギターエフェクターに関するレビューを発信していくサイトです。</p>
</div>
<div id="header2">
  <p><a href="form.php">投稿フォーム</a></p>
</div>
<div id="text">
<h2>質問一覧表</h2>
</div>
<table>
  <tr>
      <th>エフェクター名</th>
      <th>ブランド</th>
      <th>レビュー</th>
      <th>いいね</th>
      <th></th>
      <th></th>
    </tr>
    <?php foreach ($result as $column ): ?>
      <tr>
        <td><?php echo $column['gearname'] ?></td>
        <td><?php echo $column['brandname'] ?></td>
        <td><?php echo $column['review'] ?></td>
        <td><div id="button" class="button">
          <p>♥</p>
        </div></td>
        <td><a href="make1.php">編集</td>
        <td><a href="delete1.php">削除</td>
      </tr>
    <?php endforeach; ?>
  </table>
<div id="list">
<div class="side">
<ul>
</ul>
</div>
</div>
<div id="footer"></div>
</div></body>
</html>
