<?php 
	require_once  'db.php';
	
	$newinHr = $mysqli->escape_string($_POST['newinHr']);
	$newinMin = $mysqli->escape_string($_POST['newinMin']);
	$newinAP = $mysqli->escape_string($_POST['newinAP']);
	$propId = $_POST['propId'];
	
	$sql = "UPDATE property SET check_in_time_hr='$newinHr', check_in_time_mn='$newinMin', check_in_time_AP='$newinAP' WHERE property_id='$propId'";
	$mysqli->query($sql);
	
	$mysqli->close();
 ?>