 <?php
 require_once  'db.php';
 session_start();
 
 //print_r($_POST);
 $comment_text = $mysqli->escape_string($_POST['commentText']);
 $reviewId = $mysqli->escape_string($_POST['reviewId']); 
 $comment_by = $_SESSION['first_name']." ".$_SESSION['last_name'];
 $email = $_SESSION['email'];
 
 $sql_insert_comment = "INSERT INTO comments_on_review_for_user(comment_text, for_which_review_id, comment_by, comment_by_email, comment_date) 
						VALUES('$comment_text', '$reviewId', '$comment_by', '$email', NOW()) ";
						
 $mysqli->query($sql_insert_comment);


 
 ?>