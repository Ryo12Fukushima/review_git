<?php

$err_msg = "";

if(isset($_POST['login'])) {
$password = $_POST['password'];
$password = md5($password);
$email = $_POST['email'];
try {
$db = new PDO('mysql:host=localhost;dbname=sample','root','ryo12fuku');
$sql = 'select  * from users where password=? and email=? ';
$stmt = $db->prepare($sql);
$stmt->execute(array($password,$email));
$result = $stmt->fetch();
$stmt = null;
$db = null;

if(count($result)>0) {
  header('Location:main.php');
  exit;
} else {
  $err_msg = "ユーザ名またはパスワードが誤りです。";
}
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
<title>ログイン画面</title>
</head>
<div class="form-wrapper">
  <h1>ログイン画面</h1>
  <form action="" method="POST">
    <?php if ($err_msg !== null && $err_msg !== ''){echo $err_msg; }?>
    <div class="form-item">
      <label for="email"></label>
      <input type="email" name="email" required="required" placeholder="メールアドレス"></input>
    </div>
    <div class="form-item">
      <label for="password"></label>
      <input type="password" name="password" required="required" placeholder="パスワード"></input>
    </div>
    <div class="button-panel">
      <input type="submit" name="login" class="button" title="ログイン" value="ログイン"></input>
    </div>
  </form>
  <div class="form-footer">
    <p><a href="signup.php">新規登録</a></p>
    <p><a href="reset.php">パスワードをお忘れの方はこちらから</a></p>
  </div>
</div>
</html>

<!--
equired="required":空入力にエラーを出す。
placeholder:フォームなどの入力欄にあらかじめ記入されている薄い灰色のテキスト
type="password":入力した文字内容を非表示にする（●●●みたいに）。
type="submit":入力された内容を送信する。valueで中の文字を記入。
<a href="ooo">xxx</a>:oooのリンクに飛ぶ。xxxはリンク先の説明。
action="" method="post":formの内容を送信する(post:本文としてデータを送信)
-->
