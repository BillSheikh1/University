<!DOCTYPE html>

<?php

session_start();

$_SESSION['hits'] = [];
$_SESSION['enemy'] = '';
$_SESSION['lives'] = 5;

?>

<html>
	<head>
		<link href="style/style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<h1>Battleship</h1>
		<div id="intro">Welcome to the exciting world of Battleship. If you would like to play, please click below.</div>
		<div id="button"><form action="enemy.php" method="POST">
			<input type="submit" value="Play">
		</form></div>
	</body>
</html>