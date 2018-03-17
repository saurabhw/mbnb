<?php
session_start();
require 'db.php';

$review_for_email = $mysqli->escape_string($_POST['reviewFor']); 
$review = $mysqli->escape_string($_POST['review']);
$starRating =  $mysqli->escape_string($_POST['starRating']);
$review_by = $_SESSION['first_name']." ".$_SESSION['last_name'];
$email = $_SESSION['email'];


$sql_insert_review = "INSERT INTO review_for_user (review_for_email,review_text,rating_stars,review_by_email,review_by,review_date) values ('$review_for_email', '$review',  $starRating,'$email','$review_by',NOW())";
						
$mysqli->query($sql_insert_review);						
?>