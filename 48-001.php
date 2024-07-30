<?php
function getToken() {
$s = openssl_random_pseudo_bytes(24);
return base64_encode($s); // base64エンコードして返す
}
session_start();
session_regenerate_id(true); // セッションIDの再生成
$token = getToken(); // トークンの生成
setcookie('token', $token, 0, '', '', true, true);
$_SESSION['token'] = $token;
?>
<body>
認証成功<a href="48-002.php">next</a>
</body>
