<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="sample.css">
<title>パスワードリセット画面</title>
</head>
<div class="form-wrapper">
  <h1>パスワードリセット</h1>
  <form>
    <div class="form-item">
      <label for="email"></label>
      <input type="email" name="email" required="required" placeholder="メールアドレス"></input>
    </div>
    <div class="form-item">
      <label for="password"></label>
      <input type="password" name="password" required="required" placeholder="パスワード"></input>
    </div>
    <div class="form-item">
      <label for="password"></label>
      <input type="password" name="password" required="required" placeholder="確認用パスワード"></input>
    </div>
    <div class="button-panel">
      <input type="submit" class="button" title="Sign In" value="リセット"></input>
    </div>
  </form>
  <div class="form-footer">
    <p><a href="index.php">戻る</a></p>
  </div>
</div>
</html>
