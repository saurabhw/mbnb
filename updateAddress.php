  <?php 
	require_once  'db.php';
	
	$newStreet_address = $mysqli->escape_string($_POST['newStreet_address']);
	$newHouse_No = $mysqli->escape_string($_POST['newHouse_No']);	
	$newCity = $mysqli->escape_string($_POST['newCity']);	
	$newState = $mysqli->escape_string($_POST['newState']);	
	$newCountry = $mysqli->escape_string($_POST['newCountry']);		
	$propId = $_POST['propId'];
	
	$sql = "UPDATE property SET addr_street='$newStreet_address', addr_house_no='$newHouse_No', addr_city='$newCity', addr_state='$newState', addr_country='$newCountry'  WHERE property_id='$propId'";
	$mysqli->query($sql);
	
	$mysqli->close();
 ?>