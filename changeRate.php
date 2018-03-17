 <?php 
	require_once  'db.php';
	
	$newRate = $mysqli->escape_string($_POST['newRate']);
	$propId = $_POST['propId'];
	
	$sql = "UPDATE property SET rate='$newRate' WHERE property_id='$propId'";
	$mysqli->query($sql);
	
	$mysqli->close();
 ?>