<?php

include 'make_enemy.php';

session_start();

$boardx = 5;
$boardy = 5;

$rowID = 'a';

$horizontal = true;

$validID = [];
$invalidID = [];
$invalidHorz = [];
$invalidVert = [];
$allID = [];
$positions = [];

$id = '';
$enemyPositions = [];

for($r = 0; $r < $boardx; $r++) {
	
	$colID = 1;
	
	for($c = 0; $c < $boardy; $c++) {
		
		$id = $rowID.$colID;		
		if(($r > 2) && !($c > 2)) {
			array_push($invalidVert, $id);
			array_push($allID, $id);
		}
		else if(!($r > 2) && ($c > 2)) {
			array_push($invalidHorz, $id);
			array_push($allID, $id);
		}
		else if($r > 2 && $c > 2) {
			array_push($invalidID, $id);
		}
		else {
			array_push($validID, $id);
			array_push($allID, $id);
		}
		
		$colID++;
	}
	
	$rowID++;
}

shuffle($allID);

$pos = $allID[0];

if(in_array($pos, $invalidHorz)) {
	$horizontal = false;
}
else if (in_array($pos, $invalidVert)) {
	$horizontal = true;
}
else {
	$horizontal = (bool)rand(0,1);
}

$posR = substr($pos, 0, 1);
$posC = substr($pos, 1, 1);

array_push($positions, $pos);

for($i = 0; $i < 2; $i++) {
	if($horizontal == true) {
		$posC++;
		$pos = $posR.$posC;
		array_push($positions, $pos);
	}
	else {
		$posR++;
		$pos = $posR.$posC;
		array_push($positions, $pos);
	}
}

$_SESSION['enemy'] = new Enemy($positions, true);

$location = "game.php";
header("Location: " .$location);

?>
