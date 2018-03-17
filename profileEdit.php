<?php 
session_start();
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
    <!--<![endif]-->

    <head>
        <meta charset="utf-8">
        <meta name="robots" content="all,follow">
        <meta name="googlebot" content="index,follow,snippet,archive">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mbnb</title>

        <meta name="keywords" content="">
		
		<!--Flaticon-->
		<link rel="stylesheet" type="text/css" href="css/flaticon/flaticon.css"> 
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700,900' rel='stylesheet' type='text/css'>

        <!-- Bootstrap and Font Awesome css -->
        <!--<link href="css/font-awesome.css" rel="stylesheet">-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!--<link href="css/bootstrap.min.css" rel="stylesheet">-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- owl carousel css -->

        <link href="css/owl.carousel.css" rel="stylesheet">
        <link href="css/owl.theme.css" rel="stylesheet">	        

        <!-- Theme stylesheet -->
        <link href="css/style.default.css" rel="stylesheet" id="theme-stylesheet">

        <!-- Custom stylesheet - for your changes -->
        
		<link href="css/header.css" rel="stylesheet">
		<link href="css/profileEdit.css" rel="stylesheet">

        <!-- CSS Animations -->
        <link href="css/animate.css" rel="stylesheet">

        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.png">

        <!-- Mordernizr -->
        <script src="js/modernizr-2.6.2.min.js"></script>

        <!-- Responsivity for older IE -->
        <!--[if lt IE 9]>
        <script src="js/respond.min.js"></script>
    <![endif]-->

        <meta property="og:title" content="Landing Page | Landing Page Bootstrap Theme by Bootstrapious.com!">
        <meta property="og:site_name" content="Landing Page | Landing Page Bootstrap Theme by Bootstrapious.com!">
        <meta property="og:type" content="website">
        <meta property="og:url" content="">

        <meta property="og:image" content="">  

        <meta name="twitter:card" content="summary">
        <meta name="twitter:creator" content="@bootstrapious">

		
		
		
		
		
	
	
    </head>

    <body data-spy="scroll" data-target="#navigation" data-offset="120" >
		
		
		<?php include 'header.php';?>
		
		<?php 
			$count_support=1;
			$count_tes=1;
			
			$email = $_SESSION['email'];
			
			$sql = "SELECT * FROM users,common_fields WHERE users.email='$email' AND common_fields.email='$email'";
			$result = $mysqli->query($sql);
			
			$user = $result->fetch_assoc();
			
			if($_SESSION['missionary'] == 1){
				$sql2 = "SELECT * FROM users,missionary_fields WHERE users.email='$email' AND missionary_fields.email='$email'";
				$result2 = $mysqli->query($sql2);
				$missionary = $result2->fetch_assoc();
				
				$sql_supports = "SELECT * FROM users, others_i_have_supported WHERE users.email='$email' AND others_i_have_supported.email='$email'";
				$result3 = $mysqli->query($sql_supports);
				
				$sql_testimony = "SELECT * FROM users, testimony WHERE users.email='$email' AND testimony.email='$email'";
				$result4 = $mysqli->query($sql_testimony);
				
			}
		?>
		
		<form action="profileEditBackend.php" method="POST">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<img src="<?php if($path!='' or $path!=null){ echo $path;} else{ echo 'img/no-image.jpg';} ?>" class="img-thumbnail profilePic" id="targetLayer">
					<button type="button" class="btn btn-warning" id="editProfilePic" onclick="openProfilePicModal();">Edit Profile Picutre<i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
					<div id="verified" class="text text-center"><i class="fa fa-check" aria-hidden="true"></i> Verified</div>
					
						<!--<div class="box">
							<div class="box-header text text-center"><h4>Add your expectations From Host</h4></div>						
							<div id="expectationForm">
								<input type="text" class="form-control form-group expextation" placeholder="Enter your expectation" name="exp1">
								
							</div>
							<p id="addMoreExpectation" class="text text-center" onclick="addMoreExpectation();"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add more expectation</p>
							
						</div>-->
					</div>
					<div class="col-md-8 box" id="profileDetails">
						<!--<div id="" >Name  <input type="text" class="blackText  form-group form-control" name="userName"></div>-->
						<div><button type="button" class="btn btn-warning  form-group" onclick="openChangePasswordModal();">Change Password</button></div>
						<!--<div>Missionary Id No  <input type="text" class="blackText  form-group form-control" name="missionaryId"></div>-->
						<div>Home Church  <input type="text" class="blackText  form-group form-control" name="homeChurch" value="<?php echo $user['home_church']; ?>"></div>
						<div>Pastor / Leader  <input type="text" class="blackText  form-group form-control" name="pastor" value="<?php echo $user['pastor']; ?>"></div>
						<div>Role at home Church  <input type="text" class="blackText  form-group form-control" name="role" value="<?php echo $user['role_at_church']; ?>"></div>					
						<?php if(checkIfNotMissionaryThenDoNotCreate()){ ?>
							<div>Current mission field  <input type="text" class="blackText  form-group form-control" name="currentMissionField" value="<?php if(isset($missionary)) {echo $missionary['current_mission_field'];} ?>"></div>
							<div>Churchs in my field <input type="text" class="blackText  form-group form-control" name="churchInField" value="<?php if(isset($missionary)) {echo $missionary['church_in_your_field'];} ?>"></div>
							<div>Church I am sent from  <input type="text" class="blackText  form-group form-control" name="sentFrom" value="<?php if(isset($missionary)) { echo $missionary['church_sent_from'];} ?>"></div>
							<div>Group I am reaching for the kingdom  <input type="text" class="blackText  form-group form-control" name="groupReaching" value="<?php if(isset($missionary)) { echo $missionary['group_reaching_for'];} ?>"></div>
							
							
							
							<div>Others I have supported </div>
							<ul class="list-group blackText" >							
							  <div id="supports"><li class="list-group-item">
							  <?php  while ($row = $result3->fetch_assoc()) {
								  $hasSupport = true;?>
								<input type="text" class="form-control form-group supported" name="sup<?php echo $count_support;?>" value="<?php echo $row['support']; ?>">
							  <?php $count_support+=1;
									}
									
									if(!isset($hasSupport)){ echo "<input type='text' class='form-control form-group supported' name='sup1' placeholder='Enter support here'>";}	
								?>
							  </li></div>					  
							  
							</ul>
							<p id="addMoreSupported" class="text text-center" onclick="addMoreSupported();"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add more </p>
							
							
							<div>My Testimony </div>
							<div class="box blackText" id="Testimony">
							<?php while ($row = $result4->fetch_assoc()) {
								$hasTestimony = true;?>
								<input type="text" class="form-control form-group testimony" name="tes<?php echo $count_tes;?>" value="<?php echo $row['testimony']?>">
							<?php $count_tes+=1;
							} 

							if(!isset($hasTestimony)){echo "<input type='text' class='form-control form-group testimony' name='tes1' placeholder='Enter testimony here'>";}	
							?>		
							</div>
							<p id="addMoreTestimony" class="text text-center" onclick="addMoreTestimony();"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add more </p>
						<?php } ?>
						
						<div>
							<p><i class="fa fa-cutlery" aria-hidden="true"></i> Favorite food  <input type="text" class="blackText form-control form-group" name="food" value="<?php echo $user['favorite_food']; ?>" ></p>
						</div>
						
						<div>
							<p><i class="flaticon-prayer" id="flaticon"></i>Prayer request  <input type="text" class="blackText form-control form-group" name="prayer" value="<?php echo $user['prayer_request']; ?>"> </p>
						</div>
						
						<fieldset>
							  <legend style="color:white;">Home Church Address:</legend>
							  <input type="text" class="form-control form-group" name="street" placeholder="Street" value="<?php echo $user['home_church_address_street']; ?>">
							  <input type="text" class="form-control form-group" name="houseNo" placeholder="House No:" value="<?php echo $user['home_church_address_house_no']; ?>">	
							  <input type="text" class="form-control form-group" name="city" placeholder="City" value="<?php echo $user['home_church_address_city']; ?>">
							  <input type="text" class="form-control form-group" name="state" placeholder="State" value="<?php echo $user['home_church_address_state']; ?>">
							  <input type="text" class="form-control form-group" name="country" placeholder="Country" value="<?php echo $user['home_church_address_country']; ?>">
							</fieldset>
																				
					</div>
				</div>
			</div>
			
			<div class="text text-center" style="margin-bottom:1em;">
				<button type="submit" class="btn btn-warning btn-lg" ><i class="fa fa-floppy-o" aria-hidden="true"></i> Save profile</button>	
			</div>
		</form>
		
		
		<div id="ProfilePicModal" class="modal" onclick="closeProfilePicModal()">
		  <div class="modal-content" onclick="event.stopPropagation();">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" onclick="closeProfilePicModal()">&times;</button>
				<h4 class="modal-title">Add a profile picture</h4>
			  </div>
			  <div class="modal-body">
				<form id="profilePicUpload"  method="post">
				<p><input type="file"  class="form-control" name="profilePic"></p>
			  </div>
			  <div class="modal-footer">
				<button type="submit" class="btn btn-primary"  >Save</button>
				</form>
				<button type="button" class="btn btn-default" data-dismiss="modal" onclick="closeProfilePicModal()">Close</button>
			  </div>
		  </div>
		</div>	
		
		
		<div id="ChangePasswordModal" class="modal" onclick="closeChangePasswordModal()">
		  <div class="modal-content" onclick="event.stopPropagation();">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" onclick="closeChangePasswordModal()">&times;</button>
				<h4 class="modal-title">Change Password</h4>
			  </div>
			  <div class="modal-body">	
				<p><input type="password"  class="form-control" placeholder="Old Password" id="oldPass"></p>
				<p><input type="password"  class="form-control" placeholder="New Password" id="newPass"></p>
				<p><input type="password"  class="form-control" placeholder="Confirm Password" id="newPassConfirm"></p>
				<div id="successfulPasswordChangeDIV" class="hidden"><p class="box text text-center" id="successfulPasswordChange">Password changed successfully.</p></div>
				<div id="unsuccessfulPasswordChangeDIV" class="hidden"><p class="box text text-center " id="unsuccessfulPasswordChange">Password changed unsuccessful. Wrong old password. Try again.</p></div>
				<div id="newOldNoMatchDIV" class="hidden"><p class="box text text-center" id="newOldNoMatch">Password changed unsuccessful. New password does not match. Try again.</p></div>
				<div id="newEmptyDIV" class="hidden"><p class="box text text-center" id="newEmpty">Password changed unsuccessful. New password cannot be empty. Try again.</p></div>
			  </div>
			  <div class="modal-footer">
				<input type="button" class="btn btn-primary" value="Save" onclick="channgePassword('<?php echo $email; ?>')">
				<button type="button" class="btn btn-default" data-dismiss="modal" onclick="closeChangePasswordModal()">Close</button>
			  </div>
		  </div>
		</div>	
		
		<?php include 'footer.php'; ?>
		
        <!-- js base -->
        <script src="js/jquery-1.11.0.min.js"></script>
		
        <!--<script src="js/bootstrap.min.js"></script>-->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		


        <!-- waypoints for scroll spy -->
        <script src="js/waypoints.min.js"></script>

        <!-- owl carousel -->
        <script src="js/owl.carousel.min.js"></script>        

        <!-- jQuery scroll to -->
        
		<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
		<!--<script src="js/jquery.scrollTo.min.js"></script>-->

        <!-- main js file -->

        <script src="js/front.js"></script>

		<!-- Custom js -->
		<script src="js/profileEdit.js"></script>
		
		
		
	
		
		
		

    </body>
</html>