<?php
/* Displays all successful messages */
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
        
		<link href="css/linkSent.css" rel="stylesheet">
		

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
		
		
		
		<div class="container" id="body">
			<div class="row box">
				<h3 class="box-header text-center"><span style="color:green; font-size:2em;"><i class="fa fa-check-circle" aria-hidden="true"></i></span> Success</h3>
				<p>
					<?php 
					if( isset($_SESSION['message']) AND !empty($_SESSION['message']) ):
						echo $_SESSION['message'];    
					else:
						header( "location: index.php" );
					endif;
					?>
				</p>
				<a href="index.php"><button class="button button-block"/>Home</button></a>
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
		<!--<script src="js/profileEdit.js"></script>-->
		
		
		
	
		
		
		

    </body>
</html>