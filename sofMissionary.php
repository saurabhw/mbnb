<?php 

require 'db.php';
session_start();

if(isset($_POST['Contunue_to_Identity_verification'])){	
	$home_church = $mysqli->escape_string($_POST['homeChurch']);
	$role_at_church = $mysqli->escape_string($_POST['roleAtChurch']);
	$street = $mysqli->escape_string($_POST['street']);
	$house_no = $mysqli->escape_string($_POST['houseNo']);
	$city = $mysqli->escape_string($_POST['city']);
	$state = $mysqli->escape_string($_POST['state']);
	$country = $mysqli->escape_string($_POST['country']);
	$pastor = $mysqli->escape_string($_POST['pastor']);
	
	
	$current_mission_field = $mysqli->escape_string($_POST['currentMissionField']);
	$reaching = $mysqli->escape_string($_POST['reaching']);
	$sent_from = $mysqli->escape_string($_POST['sentFrom']);
	$church_in_field = $mysqli->escape_string($_POST['churchInField']);
	
	$email = $_SESSION['email'];
	
	if($_POST['acceptance'] == "on"){
		
		$sql = "INSERT INTO common_fields (email, home_church, role_at_church, pastor, home_church_address_street, home_church_address_house_no, home_church_address_city, home_church_address_state, home_church_address_country ) " 
				. "VALUES ('$email','$home_church', '$role_at_church', '$pastor','$street','$house_no', '$city', '$state', '$country')";
		
		$sql2 = "UPDATE users SET statement_of_faith=1 WHERE email='$email'";
		
		$sql3 = "INSERT INTO missionary_fields (email, current_mission_field, group_reaching_for, church_sent_from, church_in_your_field) " 
				. "VALUES ('$email','$current_mission_field', '$reaching', '$sent_from','$church_in_field')";
		
		if ( $mysqli->query($sql) && $mysqli->query($sql2) && $mysqli->query($sql3)){
			$_SESSION['message'] = "Now continue with identity verificationdone by jumio";
			header("location: jumio.php");
		}
		else{
			$_SESSION['message'] = "Statement of Faith acceptance failed";
			header("location: error.php");
		}	
		
		
	}
	else{
		$_SESSION['message'] = "You must accept the statement of faith";
		header("location: error.php");
	}	
}



?>