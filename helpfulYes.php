<?php

require 'db.php';
session_start();

$reviewId = $mysqli->escape_string($_POST['reviewId']); 

$sql_get_current_count ="SELECT * FROM review_for_user WHERE review_for_user_id = '$reviewId'";
$result = $mysqli->query($sql_get_current_count);
$temp = $result->fetch_assoc();;

$current_help_count = $temp['helpful_count'];


	$count = $current_help_count + 1;
	
	$sql_update_count ="UPDATE review_for_user SET helpful_count=$count WHERE review_for_user_id = '$reviewId'";
	$result = $mysqli->query($sql_update_count);

	echo $count;

	$email = $_SESSION['email'];
	$sql_insert_vote = "INSERT INTO vote_helpful_review_for_user(voted_by_email, for_which_review_id) VALUES ('$email','$reviewId') ";
	$mysqli->query($sql_insert_vote);
?>