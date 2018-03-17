<?php 
	require_once  'db.php';
	
	$newoutHr = $mysqli->escape_string($_POST['newoutHr']);
	$newoutMin = $mysqli->escape_string($_POST['newoutMin']);
	$newoutAP = $mysqli->escape_string($_POST['newoutAP']);
	$propId = $_POST['propId'];
	
	$sql = "UPDATE property SET check_out_time_hr='$newoutHr', check_out_time_mn='$newoutMin', check_out_time_AP='$newoutAP' WHERE property_id='$propId'";
	$mysqli->query($sql);
	
	$mysqli->close();
 ?> 