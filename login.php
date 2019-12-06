<?php 
	session_start();
	require "signal/signal.php";
	
	$_SESSION[Signal::$SESSION_USERID] = 3;
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
	<a href="training.php"> Login </a>
</body>
</html>