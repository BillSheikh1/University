<!DOCTYPE html>

<?php

include 'make_enemy.php';

session_start();

$message = "";

if(!empty($_SESSION['hits'])) {
	$message = "You missed!";
}
else {
	$message = "";
}

//var_dump($_SESSION['enemy']->getStatus());
//var_dump($_SESSION['enemy']->getAllPosition());
//var_dump($_SESSION['lives']);
//var_dump($_SESSION['hits']);

?>

<html>
	<head>
		<link href="style/style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<h1>Battleship</h1>
		<p><div id="intro">Select a cell below and click the button to make an attack.<br>
		<b>Lives: </b><?php echo $_SESSION['lives']; ?><br>
		<b>Enemies: </b><?php echo count($_SESSION['enemy']); ?></div></p>
		<p><form action="validate.php" method="POST">
			<table><tr>
				<?php
				$rid = 'a';
				
					for($r = 0; $r < 5; $r++) {
						echo "</tr><tr>";
						
						$cid = 1;
						
						for($c = 0; $c < 5; $c++) {
							
							$id = $rid.$cid;
							if(in_array($id, $_SESSION['hits']) && in_array($id, $_SESSION['enemy']->getAllPosition())) {
								echo "<td>" . $id . "<br><b>Hit</b></td>";
							}
							else if(in_array($id, $_SESSION['hits']) && !in_array($id, $_SESSION['enemy']->getAllPosition())) {
								echo "<td>" . $id . "<br><b>Miss</b></td>";
							}
							else {
								echo "<td>" . $id .
								"<br><input type='radio' name='hits' value='" .$id. "'></td>";
							}
							
							$cid++;
						}
						$rid++;
					}
				?>
			</tr>
			<tr>
				<td colspan="5"><input type="submit" value="Attack!"></td>
			</tr></table>
		</form></p>
		<h1>
			<?php
				echo $message;
			?>
		</h1>
	</body>
</html>