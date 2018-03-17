 <?php 
	require_once  'db.php';
	
	$ruleId = $mysqli->escape_string($_POST['ruleId']);	
	$propId = $_POST['propId'];
	
	$sql = "DELETE FROM house_rules WHERE property_id='$propId' AND house_rules_id='$ruleId'";
	$mysqli->query($sql);
	
	$mysqli->close();
 ?>