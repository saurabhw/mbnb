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
        
		<link href="css/statementOfFaithForMissionary.css" rel="stylesheet">
		

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
			<p class="text-center"><i class="fa fa-check-circle" aria-hidden="true" style="color:green;font-size:2em;"></i><?php echo " ". $_SESSION['message']." Now sign the Statement Of Faith"; ?></p>
			</div>
		</div>	
		
		<div class="container">
			<div class="row box">
				<h3 class="box-header text-center">Statement Of Faith</h3>
				<form method="post" action="sofMissionary.php"  onsubmit="checkTheForm(event)">					
					<div class="col-md-6">
						<div>Current Mission field</div>
						<input type="text" class="form-control form-group" id="currentMissionField" name="currentMissionField">
						
						<div>Group you are reaching for the kingdom</div>
						<input type="text" class="form-control form-group" id="reaching" name="reaching">
						
						<div>Home Church</div>
						<input type="text" class="form-control form-group" id="homeChurch" name="homeChurch">
						
						<fieldset>
						  <legend>Home Church Address:</legend>
						  <input type="text" class="form-control form-group" placeholder="Street" id="street" name="street">
						  <input type="text" class="form-control form-group" placeholder="House No:" id="houseNo" name="houseNo">		
						  <input type="text" class="form-control form-group" placeholder="City" id="city" name="city">
						  <input type="text" class="form-control form-group" placeholder="State" id="state" name="state">
						  <input type="text" class="form-control form-group" placeholder="Country" id="country" name="country">
						</fieldset>
												
					</div>
					<div class="col-md-6">
						<div>Church you were sent from</div>
						<input type="text" class="form-control form-group" id="sentFrom" name="sentFrom">
						
						<div>Role at home Church</div>
						<input type="text" class="form-control form-group" id="roleAtChurch" name="roleAtChurch">
						
						<div>Church in your missions field</div>
						<input type="text" class="form-control form-group" id="churchInField" name="churchInField">

						<div>Pastor / Leader<sup>*</sup></div>
						<input type="text" class="form-control form-group" id="pastor" name="pastor">	
					</div>								
			</div>
			<div class="box">
				<p id="statement">I believe in God, the Father Almighty. I believe in the promised Holy Spirit, the Spirit of God, who is with me and resides in me. I believe in Jesus Christ, God's only Son, my Lord and Savior, who died on the cross for the forgiveness of my sins and to give opportunity for the whole world to be brought back into right relationship with God the Father. I believe in His resurrection and that He is the only way to the Father. I believe that all who confess with their mouth that Jesus is Lord and believe in their hearts that God raised Him from the dead will be saved thereby making them a part of the Body of Christ. 
To this end I embrace all those who make this confession as they are my brothers and sister in Christ. I commit to love them as Christ loves me and care for them as they are. </p>
				<input type="checkbox" id="accept" name="acceptance"> I Accept
			</div>
			
			<div class="text-center"style="margin-bottom:1em;"><input type="submit" value="Contunue to Identity verification" name="Contunue_to_Identity_verification" class="btn btn-success"></div>
			</form>
		</div>
		
		
		
		
		<div id="Modal" class="modal" onclick="closeModal()">
		  <div class="modal-content" onclick="event.stopPropagation();">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" onclick="closeModal()">&times;</button>				
			  </div>
			  <div class="modal-body">
				<p class="text-center" style="font-size:2em;color:red;"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></p>
				<p class="text-danger text-center" id="outputTextDisplay"></p>
			  </div>
			  <div class="modal-footer">
				
				<button type="button" class="btn btn-default" data-dismiss="modal" onclick="closeModal()">Close</button>
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
		<script src="js/statementOfFaithForMissionary.js"></script>
		
		
		
	
		
		
		

    </body>
</html>