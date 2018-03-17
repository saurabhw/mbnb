 <?php
 require_once  'db.php';
 session_start();
 
 
 $reviewId = $mysqli->escape_string($_GET['reviewId']); 
 
 $sql_count_comments = "SELECT * FROM comments_on_review_for_user WHERE for_which_review_id= $reviewId";
 $result = $mysqli->query($sql_count_comments);
 
 echo mysqli_num_rows($result);
 ?>