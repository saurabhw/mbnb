  <?php 
	require_once  'db.php';
	
	$newAdult = $mysqli->escape_string($_POST['newAdult']);
	$newChild = $mysqli->escape_string($_POST['newChild']);
	$newInfant = $mysqli->escape_string($_POST['newInfant']);
	$propId = $_POST['propId'];
	
	$sql = "UPDATE property SET limit_adult='$newAdult', limit_child='$newChild', limit_infants='$newInfant' WHERE property_id='$propId'";
	$mysqli->query($sql);
	
	$mysqli->close();
 ?>