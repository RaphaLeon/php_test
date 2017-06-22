<!DOCTYPE HTML">
<html>
<head>
	<meta charset="utf-8">
	<title>home</title>
</head>

<body>
	<h2>Welcome</h2>
	<?php session_start();
		  echo $_SESSION["user"]; ?>
</body>
</html>
