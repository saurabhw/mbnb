<?php
 require 'db.php';
 $propertyId = $mysqli->escape_string($_POST['propId']);	
 
 $sql_comments = "SELECT * FROM property_reviews WHERE property_id = $propertyId ORDER BY helpful_count DESC LIMIT 3,99999999999999999";
 
 $result = $mysqli->query($sql_comments);
 
$a=array();
$myObj = new stdClass();

while($row = $result->fetch_assoc()){
		//property_reviews_id, property_id, review_text, helpful_count, rating_Stars, review_by_email, review_by, review_date
		
		$myObj->review_text = $row['review_text'];			
		$myObj->helpful_count = $row['helpful_count'];
		$myObj->rating_Stars = $row['rating_Stars'];
		$myObj->review_by = $row['review_by'];
		$myObj->review_date = $row['review_date'];
		$myObj->reviewId = $row['property_reviews_id'];
		$myObj->helpful_count = $row['helpful_count'];
		$myObj->review_by_email_encoded = urlencode(base64_encode($row['review_by_email']));
		
		
		$email = $row['review_by_email'];
		$sqlImgPath = "SELECT * FROM users WHERE email = '$email' ";
		$resultImgPath = $mysqli->query($sqlImgPath);
		$rowImgPath = $resultImgPath->fetch_assoc();
		
		
		$myObj->img_path = $rowImgPath['profile_pic_path'];
		
		
		$reviewid = $row['property_reviews_id'];;
 
		$sql_comment_count = "SELECT * FROM comments_on_review_for_property WHERE for_which_review_id = '$reviewid'";

		$result_count = $mysqli->query($sql_comment_count);
		
		
		$myObj->commentCount = mysqli_num_rows($result_count);
		
		$myJSON = json_encode($myObj);
		
		array_push($a,$myJSON);
	}	

	echo json_encode($a);

$mysqli->close();
 
 ?>