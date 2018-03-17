<?php 
	require 'db.php';
	
	$email = $mysqli->escape_string($_GET['email']);
	$oldPwd = $mysqli->escape_string($_GET['oldPwd']);
	$newPwd = $mysqli->escape_string(password_hash($_GET['newPwd'], PASSWORD_BCRYPT));
	
	$sqlGetOldPass ="SELECT * FROM users WHERE email='$email'"; 
	
	$resultGetOldPass = $mysqli->query($sqlGetOldPass);
	
	$userGetOldPass = $resultGetOldPass->fetch_assoc();
	
	if ( password_verify($oldPwd, $userGetOldPass['password']) ) {
		
		$sqlChangPwd = "UPDATE users SET password = '$newPwd' WHERE email='$email'";
		$resultChangPwd = $mysqli->query($sqlChangPwd);
		echo "oldAndNewMatched";
	}
	
	else{
		echo "OldPwdNotMatch";
	}
	
?>