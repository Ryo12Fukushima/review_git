<?php

if(isset($_POST['signup'])) {
$username = $_POST['username'];
$password = $_POST['password'];
$password = md5($password);
$email = $_POST['email'];

try {
$db = new PDO('mysql:host=localhost;dbname=sample','root','ryo12fuku');
$sql = 'insert into users(username,password,email) values(?, ?, ?)';
$stmt = $db->prepare($sql);
$stmt->execute(array($username,$password,$email));
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
<title>新規作成画面</title>
</head>
<div class="form-wrapper">
  <h1>新規作成画面</h1>
  <form action="" method="post">
  <div class="form-item">
    <label for="username"></label>
    <input type="text" name="username" required="required" placeholder="ニックネーム"></input>
  </div>
    <div class="form-item">
      <label for="email"></label>
      <input type="email" name="email" required="required" placeholder="メールアドレス"></input>
    </div>
    <div class="form-item">
      <label for="password"></label>
      <input type="password" name="password" required="required" placeholder="パスワード"></input>
    </div>
    <div class="button-panel">
      <input type="submit" name="signup" class="button" title="signup" value="新規登録"></input>
    </div>
  </form>
  <div class="form-footer">
    <p><a href="index.php">戻る</a></p>
  </div>
</div>
</html>
