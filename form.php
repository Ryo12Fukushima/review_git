<?php

if(isset($_POST['send'])) {
$gearname = $_POST['gearname'];
$brandname = $_POST['brandname'];
$review = $_POST['review'];

try {
$db = new PDO('mysql:host=localhost;dbname=sample','root','ryo12fuku');
$sql = 'insert into reviews(gearname,brandname,review) values(?, ?, ?)';
$stmt = $db->prepare($sql);
$stmt->execute(array($gearname,$brandname,$review));
$stmt = null;
$db = null;
}catch (PDOException $e){
  echo $e->getMessage();
  exit;
}
}
 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="sample.css">
<title>投稿フォーム</title>
</head>
<div class="form-wrapper">
  <h1>投稿フォーム</h1>
  <form action="" method="post">
    <div class="form-item">
      <label for="gearname"></label>
      <input type="text" name="gearname" required="required" placeholder="機材名"></input>
    </div>
    <div class="form-item">
      <label for="brandname"></label>
      <input type="text" name="brandname" required="required" placeholder="ブランド名"></input>
    </div>
    <div class="form-item">
      <label for="review"></label>
      <textarea name="review" cols="40" rows="20" placeholder="レビュー内容"></textarea>
    </div>
    <div class="button-panel">
      <input type="submit" name="send" class="button" title="このボタンを押すと送信されます。" value="送信"></input>
    </div>
  </form>
  <div class="form-footer">
    <p><a href="main.php">メインページに戻る</a></p>
  </div>
</div>
</html>
