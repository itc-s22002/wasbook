<?php
ini_set('session.cookie_secure','0');
ini_set('session.cookie_path','/wasbook');
ini_set('session.name','PXPSEDID');

session_start();
$sid = sesssion_id();
?>
<html>
<body>
セッションを開始しました<br>
PXPSESID = 
<?php echo htmlspecialchars($sid, ENT_NOQUOTES, 'UTF-8'); ?>
</body>
</html>
