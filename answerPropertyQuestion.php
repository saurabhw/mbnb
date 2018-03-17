  <?php 
	require_once  'db.php';
		
	$propId = $_POST['propId'];
	$questionId = $mysqli->escape_string($_POST['questionId']);
	$ans = $mysqli->escape_string($_POST['ans']);
	
	
	$sql = "UPDATE property_questions SET answer = '$ans', answered='1' WHERE property_questions_id = '$questionId'";
	
	$result=$mysqli->query($sql);

	$mysqli->close();
 ?>