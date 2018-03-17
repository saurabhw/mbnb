 <?php 
	require_once  'db.php';
		
	$propId = $_POST['propId'];
	$sql = "SELECT * FROM missionary_served_map WHERE property_id='$propId'";	
	$result=$mysqli->query($sql);

	while($row = $result->fetch_assoc()){
	echo $row['states_served'].'*';
	
	}	
	
	$mysqli->close();
 ?>