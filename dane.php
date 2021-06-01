<?php
	session_start();
	
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: index.php');
		exit();
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="style_dane.css" />
</head>
<body>
<div class="container"

<?php

echo "<p>Witaj ".$_SESSION['user'];

echo "<p><b>user</b>: ".$_SESSION['user'];
echo "<p><b>E-mail</b>: ".$_SESSION['email'];
?>
<br>
<a href="logout.php">Wyloguj się</a>

</div>

</body>
</html>





