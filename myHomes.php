<?php
session_start();
require_once  'db.php';
$email = $mysqli->escape_string(base64_decode($_GET['email']));


$sql = "SELECT * FROM property WHERE property.owned_by_user_email='$email'";
$resultHomes = $mysqli->query($sql);

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html>
    <!--<![endif]-->

    <head>
        <meta charset="utf-8">
        <meta name="robots" content="all,follow">
        <meta name="googlebot" content="index,follow,snippet,archive">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mbnb</title>

        <meta name="keywords" content="">

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
        <link href="css/propertyListing.css" rel="stylesheet">
		<link href="css/myHomes.css" rel="stylesheet">

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

		<!-- flaticon-->
		<link rel="stylesheet" type="text/css" href="font/flaticon.css"> 
		
		
		
	
	
    </head>

    <body data-spy="scroll" data-target="#navigation" data-offset="120" >
		
		<?php include 'header.php';?>
		
		
		<h2 class="text text-center" id="header"> Your Homes<span id="demo"></span></h2>
		<div class="container">
			<div class="row">	
				<div class="text-center"><h3><a href="emptyHost.php"><button class="btn btn-warning" type="button">Add a new Home here</button></a></h3></div>
			</div>
		</div>
		
		
		<?php $count = 0;?>
		<div class="container">
		<?php for ($x = 0; $x <= mysqli_num_rows($resultHomes)/3; $x++) { ?>
		<div class="row">
		<?php while ($property = $resultHomes->fetch_assoc()) { ?>
		
		  <div class="col-md-4" >
			<div class="thumbnail" >
			  
				<img src="<?php echo $property['mian_img']; ?>" id="property1" alt="Lights" style="width:100%;min-height: 250px;max-height: 250px;">
			  
				<div class="caption">
				  <div class="text text-right strong"><strong>$<?php echo $property['rate']; ?></strong></div>	
				  <p id="shortDescDisplay<?php echo $property['property_id'] ;?>"><?php echo $property['short_desc']; ?></p>
				  <div class="container">
				  <div class="row">
					  <div class="col-xs-6"><input type="button" class="btn btn-success" value="Edit Short Description" onclick="openShortDescModal('<?php echo $property['property_id'] ?>')"></div>
					  <form method="POST" action="host.php">
						<input type="text" value="<?php echo $property['property_id'] ;?>" class="hidden" name="propertyId">
						<div class="col-xs-5 col-xs-offset-1"><input type="submit" class="btn btn-success" value="Edit This Home"></div>
					  </form>
				  </div>
				  </div>
				</div>
			</div>
		  </div>
		<?php 
		$count += 1;
		if ($count == 3){break;}
		} ?>  
		</div>
		<?php } ?>
		</div>
		
		
		
		
		
		<div id="ShortDescModal" class="modal" onclick="closeShortDescModal()">
		  <div class="modal-content" onclick="event.stopPropagation();">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" onclick="closeShortDescModal()">&times;</button>
				<h4 class="modal-title">Edit Short Description</h4>
			  </div>
			  <div class="modal-body">
				
				<p><input type="text"  class="form-control" name="shortDescText" id="shortDescText"></p>
				<span id="propertyID" class="hidden"></span>
			  </div>
			  <div class="modal-footer">
				<input type="button" class="btn btn-primary" value="Save" onclick="changeShortDesc()">
				
				<button type="button" class="btn btn-default" data-dismiss="modal" onclick="closeShortDescModal()">Close</button>
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
		<script src="js/propertyListingCustom.js"></script>
		<script src="js/header.js"></script>
		<script src="js/myHomes.js"></script>
		
		
		<!--For datePicker-->
		 <!--<script src="js/jquery.js"></script>	--><!-- using the jquery from jbase-->
		<script src="js/jquery-ui.js"></script>
	
  
		
		

    </body>
</html>