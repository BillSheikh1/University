<?php

include 'make_enemy.php';

session_start();

$location = '';

if(isset($_POST['hits'])) {
	array_push($_SESSION['hits'], $_POST['hits']);
	$hit = $_POST['hits'];
	
	if(in_array($hit, $_SESSION['enemy']->getAllPosition())) {
		$_SESSION['enemy']->isHit($hit);
		$_SESSION['lives']--;
	}
	else {
		$_SESSION['lives']--;
	}	
}

if($_SESSION['enemy']->getStatus() == false) {
	$location = "win.php";
	session_destroy();
	header("Location: " .$location);
}
else if($_SESSION['lives'] == 0) {
	$location = "lose.php";
	session_destroy();
	header("Location: " .$location);
}
else {
	$location = "game.php";
	header("Location: " . $location);
}
	

?>