 <?php
 
 $reviewid = $rewiews['review_for_user_id'];
 
 $sql_comment_count = "SELECT * FROM comments_on_review_for_user WHERE for_which_review_id = '$reviewid'";
 
 $result_count = $mysqli->query($sql_comment_count);
 
 echo mysqli_num_rows($result_count);
 
 ?>