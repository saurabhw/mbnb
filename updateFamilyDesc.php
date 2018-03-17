 <?php 
	require_once  'db.php';
	
	$newDesc = $mysqli->escape_string($_POST['newDesc']);	
	$propId = $_POST['propId'];
	
	$sql = "UPDATE property SET family_desc='$newDesc' WHERE property_id='$propId'";
	$mysqli->query($sql);
	
	$mysqli->close();
 ?>