   <?php 
	require_once  'db.php';
	
	$newcharge = $mysqli->escape_string($_POST['newcharge']);	
	$propId = $_POST['propId'];
	
	$sql = "UPDATE property SET cleaning_charges='$newcharge' WHERE property_id='$propId'";
	$mysqli->query($sql);
	
	$mysqli->close();
 ?>