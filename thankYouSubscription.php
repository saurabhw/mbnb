 <?php 
	if(isset($_POST['email'])){	
		
		//mail to the site owner
		$to = "info@missionsbnb.com";
		$subject = "Missionsbnb has a new subscriber";
		$txt = $_POST['email'];
		$headers = "From: Missionsbnb.com" . "\r\n";
		
		
		mail($to,$subject,$txt,$headers);
		
		//mail to the subscriber
		$to = $_POST['email'];
		$subject = "Missionsbnb Subscription";
		
		
		$txt = "<p>Hello friend,</p><br>".

		"<p>Thank you for subscribing to missionsbnb. As a subscriber, we consider you family. </p><br>".

		"<p>So please share with us your suggestions, ideas or thoughts at info@missionsbnb.com, and we will always have a listening ear. </p><br>".

		"<p>Also consider doing the following:</p>".
		"<p>- Share this new exciting opportunity with other missionaries</p>".
		"<p>- Like our <a href='https://www.facebook.com/missionsbnb/'>Facebook page</a></p>".
		"<p>- Invite us to share this vision at your church, organization or community</p><br><br>".

		"<p>Sincerely,</p>".
		"<p>Mbnb Team - Your Co-laborers</p>";
		$headers = "From: Missionsbnb.com" . "\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		
		mail($to,$subject,$txt,$headers);
	}

?>

<?php
require 'db.php';
session_start();
require 'checkIf.php';
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

        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700,900' rel='stylesheet' type='text/css'>

        <!-- Bootstrap and Font Awesome css -->
        <link href="css/font-awesome.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- owl carousel css -->

        <link href="css/owl.carousel.css" rel="stylesheet">
        <link href="css/owl.theme.css" rel="stylesheet">	        

        <!-- Theme stylesheet -->
        <link href="css/style.default.css" rel="stylesheet" id="theme-stylesheet">

        <!-- Custom stylesheet - for your changes -->
        <link href="css/index.css" rel="stylesheet">
		<link href="css/custom.css" rel="stylesheet">

        <!-- CSS Animations -->
        <link href="css/animate.css" rel="stylesheet">

        <!-- Favicon -->
        <link rel="shortcut icon" href="img/brandBlack_old.jpg">

        <!-- Mordernizr -->
        <script src="js/modernizr-2.6.2.min.js"></script>
		
		<!-- For datePicker -->
		<link href="css/jquery-ui.css" rel="stylesheet">

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

    <body data-spy="scroll" data-target="#navigation" data-offset="120">



	
		
        <div id="all">
		
		

            


            


            <!-- *** Thank You ***
        _________________________________________________________ -->

            <div class="section  text-gray" id="section1">
                <div class="container">
					<div class="row">
                    <div class="col-md-12">
                        <h2 class="title" data-animate="fadeInDown">Thank you for subscribing to mbnb.</h2>

                        <div class="row">

                            <div class="col-md-8 col-md-offset-2">

                                <p class="text-large text-thin"  data-animate="fadeInUp">A subscription email has been sent to <?php echo $_POST['email'];?></p>
                                <p class="text-large text-thin "  data-animate="fadeInUp">
									If you do not receive the email. Kindly check if the above email you have entered is correct.									 
								</p>
								<p class="text-large text-thin "  data-animate="fadeInUp">If the above email is incorrect. Go back to our main page and subscribe again.</p>
								<p class="text-large text-thin "  data-animate="fadeInUp">Click <a href="index.php">here</a> to go back to main page.</p>

                                <!--<p   data-animate="fadeInUp"><img src="img/team.jpg" alt="" class="img-circle img-responsive ondra-michal"></p>-->

                            </div>

                        </div>
					</div>
                    </div>
                    <!-- /.12 -->
                </div>
                <!-- /.container -->
            </div>
            <!-- /.section -->

            <!-- *** Thank You END *** -->

            <!-- *** JOIN US ***
        _________________________________________________________ -->

            
            

		
		
		


            <!-- *** FOOTER ***
        _________________________________________________________ -->

            <?php //include 'footer.php'; ?>

            <!-- *** FOOTER END *** -->
        </div>
		

        <!-- js base -->
        <script src="js/jquery-1.11.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script>


        <!-- waypoints for scroll spy -->
        <script src="js/waypoints.min.js"></script>

        <!-- owl carousel -->
        <script src="js/owl.carousel.min.js"></script>        

        <!-- jQuery scroll to -->
        <!--<script src="js/jquery.scrollTo.min.js"></script>-->

        <!-- main js file -->

        <script src="js/front.js"></script> <!--Do not remove this-->

		<!-- Custom js -->
		<script src="js/scroll.js"></script>
		<script src="js/index.js"></script>	

		<!--For datePicker-->
		 <!--<script src="js/jquery.js"></script>	--><!-- using the jquery from jbase-->
		<script src="js/jquery-ui.js"></script>
		
		
	

    </body>
</html>