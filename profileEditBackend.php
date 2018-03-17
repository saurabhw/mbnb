<?php

session_start();
require 'db.php';

$email = $_SESSION['email'];

$homeChurch = $mysqli->escape_string($_POST['homeChurch']);
$role = $mysqli->escape_string($_POST['role']);
$pastor = $mysqli->escape_string($_POST['pastor']);
$food = $mysqli->escape_string($_POST['food']);
$prayer = $mysqli->escape_string($_POST['prayer']);
$street = $mysqli->escape_string($_POST['street']);
$houseNo = $mysqli->escape_string($_POST['houseNo']);
$city = $mysqli->escape_string($_POST['city']);
$state = $mysqli->escape_string($_POST['state']);
$country = $mysqli->escape_string($_POST['country']);


$sql_update_common_fields = "UPDATE common_fields SET home_church='$homeChurch', role_at_church='$role', pastor='$pastor', favorite_food='$food', prayer_request='$prayer', home_church_address_street='$street', home_church_address_house_no='$houseNo', home_church_address_city='$city', home_church_address_state='$state', home_church_address_country='$country'   WHERE email='$email'";
$mysqli->query($sql_update_common_fields);

$profilePicPath = $_SESSION['profilePicPath'];
$sql_update_profile_pic = "UPDATE users SET profile_pic_path='$profilePicPath' WHERE email='$email'";
$mysqli->query($sql_update_profile_pic);

function addSupport($value,$key)
{
	if(strpos($key,"sup") === 0){
		//echo "The key $key has the value $value<br>";
		$email = $_SESSION['email'];
		$sql_insert_support = "INSERT INTO others_i_have_supported (email, support) VALUES('$email', '$value')";
		$GLOBALS['mysqli']->query($sql_insert_support);
	}

}

function addTestimony($value,$key)
{
	if(strpos($key,"tes") === 0){
		//echo "The key $key has the value $value<br>";
		$email = $_SESSION['email'];
		$sql_insert_tes = "INSERT INTO testimony (email, testimony) VALUES('$email', '$value')";
		$GLOBALS['mysqli']->query($sql_insert_tes);
	}

}


if($_SESSION['missionary'] == '1'){
	
	
	$currentMissionField = $mysqli->escape_string($_POST['currentMissionField']);	
	$groupReaching = $mysqli->escape_string($_POST['groupReaching']);
	$sentFrom = $mysqli->escape_string($_POST['sentFrom']);
	$churchInField = $mysqli->escape_string($_POST['churchInField']);
	
	$sql_update_missionary_fields = "UPDATE missionary_fields SET current_mission_field='$currentMissionField', group_reaching_for='$groupReaching', church_sent_from='$sentFrom', church_in_your_field='$churchInField' WHERE email='$email'";
	$mysqli->query($sql_update_missionary_fields);
	
	//How to put in the supports and testimonies
	
	
	$sql_del_sup="DELETE FROM others_i_have_supported WHERE email='$email'";
	$mysqli->query($sql_del_sup);
	
	$sql_del_tes="DELETE FROM testimony WHERE email='$email'";
	$mysqli->query($sql_del_tes);
	
	array_walk($_POST,"addSupport");
	array_walk($_POST,"addTestimony");
	

}

$encodedEmail = urlencode(base64_encode($email));
header("location: profile.php?email=$encodedEmail");


?>