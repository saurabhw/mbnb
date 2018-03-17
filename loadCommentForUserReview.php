 <?php
 require_once  'db.php';
 session_start();
 
 
 $reviewId = $mysqli->escape_string($_GET['reviewId']); 
 
 $sql_load_comments = "SELECT * FROM comments_on_review_for_user WHERE for_which_review_id= $reviewId ORDER BY comment_date DESC";
 $result = $mysqli->query($sql_load_comments);
 
 
 while ($comment = $result->fetch_assoc()) {
 ?>
 
	<blockquote>
			<?php echo $comment['comment_text'];?>
			<?php $encodedEmail = urlencode(base64_encode($comment['comment_by_email']))?>
			<footer>comment by <a href="<?php echo "profile.php?email=".$encodedEmail;?>"><?php echo $comment['comment_by'];?></a> on <?php echo $comment['comment_date'];?> </footer>
	</blockquote>
 
 
 <?php } ?> 