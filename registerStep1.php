<?php
require 'db.php';
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
        
		<!--<link href="css/messagesDetail.css" rel="stylesheet">-->
		

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
		
		
		
		<div class="container">
			<div class="row box">
				<h3 class="box-header text-center">General Information</h3>
					<form id="profilePicUpload" action="profilePicUpload.php" method="post">
					<div class="row">
					<div class="col-md-3">
						<div class="thumbnail">
						  
							<img src="img/no-image.jpg"  style="width:100%" id="targetLayer">
							<div class="caption">
								<input type="file" name="profilePic" class="form-control form-group" >
								<button type="submit" class="btn btn-warning" ><i class="fa fa-upload" aria-hidden="true"></i> Upload Profile picture</button>
							</div>
						  
						</div>
					</div>
					</div>
					</form>
					<form action="register.php" method="post">
					<div class="col-md-6">
					<!--This hidden input field is used to determine the role-->
					<?php
						if(isset($_POST['_submit'])){	
							$temp = $_POST['_submit'];
							echo "<input type='text' class='hidden'  name='role' value=$temp>" ; 
						}											
						
						if(isset($_POST['role'])){	
							$temp = $_POST['role'];
							echo "<input type='text' class='hidden'  name='role' value=$temp>" ; 
						}
					?>
						<div>User Name<sup>*</sup></div>
						<input type="text" class="form-control form-group" placeholder="Should be unique" required name="username">
						
						<div>Password<sup>*</sup></div>
						<input type="password" class="form-control form-group" required name="password">
						
						<div>Email<sup>*</sup></div>
						<input type="email" class="form-control form-group" name="email" required>
						
						<div>Phone<sup>*</sup></div>
						<input type="text" class="form-control form-group" name="phone" required>
						
						<fieldset>
						  <legend>Address:<sup>*</sup></legend>
						  <input type="text" class="form-control form-group" placeholder="Street" required name="street">
						  <input type="text" class="form-control form-group" placeholder="Apt No: / House No:" required name="houseNo">
						  <input type="text" class="form-control form-group" placeholder="City" required name="city"> 
						  <input type="text" class="form-control form-group" placeholder="State" required name="state">
						  <input type="text" class="form-control form-group" placeholder="Country" required name="country">
						</fieldset>
												
					</div>
					<div class="col-md-6">
						<div>First Name<sup>*</sup></div>
						<input type="text" class="form-control form-group" required name="firstname">
						
						<div>Middle Name<sup>*</sup></div>
						<input type="text" class="form-control form-group" name="middlename" required >
						
						<div>Last Name<sup>*</sup></div>
						<input type="text" class="form-control form-group" required name="lastname">
						
						<div>Date of birth<sup>*</sup></div>
						<input type="date" class="form-control form-group" required name="dob">
					</div>								
			</div>
			<div class="text-center" style="margin-bottom:1em;"><button type="submit" class="btn btn-success" name="register"><i class="fa fa-user-md" aria-hidden="true"></i> Register</button></div>
			
			</form>
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
		<script src="js/registerStep1.js"></script>
		
		
		
	
		
		
		

    </body>
</html>