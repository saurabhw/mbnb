<?php
/* Registration process, inserts user info into the database 
   and sends account confirmation email message
 */
 
require_once  'db.php';
session_start();

if (isset($_POST['register'])) { //user registering
	
	// Set session variables to be used on profile.php page
	$_SESSION['email'] = $_POST['email'];
	$_SESSION['first_name'] = $_POST['firstname'];
	$_SESSION['middle_name'] = $_POST['middlename'];
	$_SESSION['last_name'] = $_POST['lastname'];
	

	// Escape all $_POST variables to protect against SQL injections
	$first_name = $mysqli->escape_string($_POST['firstname']);
	$middle_name = $mysqli->escape_string($_POST['middlename']);
	$last_name = $mysqli->escape_string($_POST['lastname']);
	$email = $mysqli->escape_string($_POST['email']);
	$password = $mysqli->escape_string(password_hash($_POST['password'], PASSWORD_BCRYPT));
	$hash = $mysqli->escape_string( md5( rand(0,1000) ) );
	
	$role = $mysqli->escape_string($_POST['role']);
	$street = $mysqli->escape_string($_POST['street']);
	$houseNo = $mysqli->escape_string($_POST['houseNo']);
	$city = $mysqli->escape_string($_POST['city']);
	$state = $mysqli->escape_string($_POST['state']);
	$country = $mysqli->escape_string($_POST['country']);
	$dob = $mysqli->escape_string($_POST['dob']);
	$phone = $mysqli->escape_string($_POST['phone']);
	
	// Check if user with that email already exists
	$result = $mysqli->query("SELECT * FROM users WHERE email='$email'") or die($mysqli->error);

	// We know user email exists if the rows returned are more than 0
	if ( $result->num_rows > 0 ) {
		
		$_SESSION['message'] = 'User with this email already exists!';
		header("location: error.php");
		
	}
	else { // Email doesn't already exist in a database, proceed...
		
		if(isset($_SESSION['profilePicPath'])){
			$path = $_SESSION['profilePicPath'];
		}
		else{
			$path = "";
		}
		
		if($role=="HOST"){
			// active is 0 by DEFAULT (no need to include it here)
			$sql = "INSERT INTO users (profile_pic_path, first_name, middle_name, last_name, email, password, hash, host, address_street, address_house_no, address_city, address_state, address_country, dob, phone) " 
				. "VALUES ('$path','$first_name', '$middle_name', '$last_name','$email','$password', '$hash', 1, '$street', '$houseNo', '$city', '$state', '$country', '$dob', '$phone')";
				
				
		}
		if($role=="MISSIONARY"){
			// active is 0 by DEFAULT (no need to include it here)				
			$sql = "INSERT INTO users (profile_pic_path, first_name, middle_name, last_name, email, password, hash, missionary, address_street, address_house_no, address_city, address_state, address_country, dob, phone) " 
				. "VALUES ('$path' ,'$first_name', '$middle_name', '$last_name','$email','$password', '$hash', 1, '$street', '$houseNo', '$city', '$state', '$country', '$dob', '$phone')";	
		}
		
		//print_r($_POST);
		//echo $sql;
		//die;
		// Add user to the database
		if ( $mysqli->query($sql) ){

			$_SESSION['active'] = 0; //0 until user activates their account with verify.php
			//$_SESSION['logged_in'] = true; // So we know the user has logged in
			$_SESSION['message'] =
					
					 "Confirmation link has been sent to $email, please verify
					 your account by clicking on the link in the message!";

			// Send registration confirmation link (verify.php)
			$to      = $email;
			//print_r($to);die;
			$subject = 'Account Verification ( mbnb.com )';
			if($role=="HOST"){
				$message_body = '
				Hello '.$first_name.',

				Thank you for signing up!

				Please click this link to activate your account:

				http://www.missionsbnb.com/Mbnb/verify.php?email='.$email.'&hash='.$hash.'&host=1';  //will have to change localhost after hosting
			}
			
			if($role=="MISSIONARY"){
				$message_body = '
				Hello '.$first_name.',

				Thank you for signing up!

				Please click this link to activate your account:

				http://www.missionsbnb.com/Mbnb/verify.php?email='.$email.'&hash='.$hash.'&missionary=1';  //will have to change localhost after hosting
			}
			mail( $to, $subject, $message_body,'from:Mbnb' );

			//mail($to, $subject, 'MESSAGE', 'from:cosc631project');
			
			header("location: linkSent.php"); 

		}

		else {
			$_SESSION['message'] = 'Registration failed!';
			header("location: error.php");
		}

	}
}

?>