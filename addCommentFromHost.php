<?php
 session_start();
 require 'db.php';
 
 $reviewid = $mysqli->escape_string($_POST['reviewId']);
 $commentText = $mysqli->escape_string($_POST['commentText']); 
 $comment_by = $_SESSION['first_name']." ".$_SESSION['last_name']; 
 $comment_by_email = $_SESSION['email'];

 $sqlAddComment = "INSERT INTO comments_on_review_for_property(comment_text, for_which_review_id, comment_by , comment_by_email, comment_date) VALUES ('$commentText', '$reviewid','$comment_by', '$comment_by_email',NOW())";
 
 $mysqli->query($sqlAddComment);
 
 
 $sql_count_comments = "SELECT * FROM comments_on_review_for_property WHERE for_which_review_id= $reviewid";
 $result = $mysqli->query($sql_count_comments);
 
 echo mysqli_num_rows($result);


$mysqli->close();
 
 ?>