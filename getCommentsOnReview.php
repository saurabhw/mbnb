  <?php
 require 'db.php';
 $reviewid = $mysqli->escape_string($_POST['reviewId']);	
 
 $sql_comments = "SELECT * FROM comments_on_review_for_property WHERE for_which_review_id = '$reviewid' ORDER BY comment_date DESC";
 
 $result = $mysqli->query($sql_comments);
 
$a=array();
$myObj = new stdClass();

while($row = $result->fetch_assoc()){
		//echo $row['dates'] .','. $row['newStudents'] .','. $row['returning'] .'*';
		
		$myObj->comment_text = $row['comment_text'];
		$myObj->comment_by = $row['comment_by'];
		$myObj->comment_date = $row['comment_date'];
		
		$myObj->comment_by_email_encoded = urlencode(base64_encode($row['comment_by_email']));
		
		
		$myJSON = json_encode($myObj);
		
		array_push($a,$myJSON);
	}	

	echo json_encode($a);

$mysqli->close();
 
 ?>