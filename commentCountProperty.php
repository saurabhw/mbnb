 <?php
 
 $reviewid = $rowPropertyReviews['property_reviews_id'];
 
 $sql_comment_count = "SELECT * FROM comments_on_review_for_property WHERE for_which_review_id = '$reviewid'";
 
 $result_count = $mysqli->query($sql_comment_count);
 
 echo mysqli_num_rows($result_count);
 
 ?>