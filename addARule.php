 <?php 
	require_once  'db.php';
	
	$newRule = $mysqli->escape_string($_POST['newRule']);	
	$propId = $_POST['propId'];
	
	$sql = "INSERT INTO house_rules(property_id, rule) VALUES('$propId','$newRule')";
	$mysqli->query($sql);
	
	
	$sql2 = "SELECT * FROM house_rules WHERE property_id = '$propId' AND rule = '$newRule'";
	$result = $mysqli->query($sql2);
	
	while($row = $result->fetch_assoc()){
		$ruleId = $row['house_rules_id'];
	}
	
	
	$mysqli->close();
	
	
	
	echo "<a  class='list-group-item'><i class='fa fa-arrow-right' aria-hidden='true'></i>$newRule<div class='text text-right'><button type='button' class='btn btn-danger'  onclick='deleteRule(this,$ruleId)'>Delete <i class='fa fa-trash' aria-hidden='true'></i></button></div></a>";
 ?>