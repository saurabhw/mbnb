<?php
require 'db.php';
session_start();
?>
<?php
/* User login process, checks if user exists and password is correct */

// Escape email to protect against SQL injections
$email = $mysqli->escape_string($_POST['email']);
$result = $mysqli->query("SELECT * FROM users WHERE email='$email'");

if ( $result->num_rows == 0 ){ // User doesn't exist
    $_SESSION['message'] = "User with that email doesn't exist!";
    header("location: error.php");
}
else { // User exists
    $user = $result->fetch_assoc();

    if ( password_verify($_POST['password'], $user['password']) ) {
        
        $_SESSION['email'] = $user['email'];
        $_SESSION['first_name'] = $user['first_name'];
        $_SESSION['last_name'] = $user['last_name'];
        $_SESSION['active'] = $user['active'];
		$_SESSION['jumio_verified'] = $user['jumio_verified'];
		$_SESSION['host'] = $user['host'];
		$_SESSION['missionary'] = $user['missionary'];
        
        
		
		//checking if the user is activated
		if($user['active'] == 1){
			if($user['suspended'] == 0){
				if($user['statement_of_faith'] == 1){
					//checking if the user is jumio verified
					if($user['jumio_verified'] == 1){
						// This is how we'll know the user is logged in
						$_SESSION['logged_in'] = true;
						$email = $_SESSION['email'];
						$encodedEmail = urlencode(base64_encode($email));
						header("location: profile.php?email=$encodedEmail");
					}
					else{
						header("location: jumioNotVerified.php");
					}
				}
				else{
					if($user['host'] == 1){
						$_SESSION['message'] = "You have not signed the Statement Of Faith";
						header("location: statementOfFaithForHost.php");
					}
					else{
						$_SESSION['message'] = "You have not signed the Statement Of Faith";
						header("location: statementOfFaithForMissionary.php");
					}
				}
			}
			else{
				$_SESSION['message'] = "Your Account has been suspended. Please contact XYZ for more information";
				header("location: accountSuspended.php");
			}	
		}
		else{
			
			$_SESSION['message'] = "Your account is not activated, Please check your email at ".$user['email']. " and click on the activation link.";
			header("location: error.php");
		}	
		
		
			
    }
    else {
        $_SESSION['message'] = "You have entered wrong password, try again!";
        header("location: error.php");
    }
}

