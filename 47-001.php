<?php
  $url = $url = filter_input(INPUT_GET,'url');
  if (empty ($url)) {
	       $url = 'http://example.jp/work/47-003.php';
	         }
?>
<html>
<head><title>ログインしてください</title></head>
<body>
<form action="47-002.php" method="POST">
ユーザ名<input type="text" name="id"><BR>
パスワード<input type="password" name="pwd"><BR>
<input type="hidden" name="url" 
value="<?php echo htmlspecialchars($url, ENT_COMPAT, 'UTF-8') ?>">
<input type="submit" value="ログイン">
</form>
</body>
</html>

