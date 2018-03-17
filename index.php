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

        <meta property="og:title" content="Short-term lodging for missionaries by missionsbnb.">
        <meta property="og:site_name" content="missionsbnb.com">
        <meta property="og:type" content="website">
        <meta property="og:url" content="">

        <meta property="og:image" content="">  

        <meta name="twitter:card" content="summary">
        <meta name="twitter:creator" content="@bootstrapious">

    </head>

    <body data-spy="scroll" data-target="#navigation" data-offset="120">



	
		<?php include 'autoComplete.php';?>
        <div id="all">
		
		

            <!-- *** INTRO IMAGE ***
        _________________________________________________________ -->
            <div id="intro" class="clearfix">
			
				<div class="mainItem">
				
				    
                <div class="item">
                    <div class="container">
						<div class="row">
						
                            <h1 data-animate="fadeInDown">missionsbnb</h1>							
                            <p  class="message" data-animate="fadeInUp" style="margin-top:-1em;">Short-term lodging for missionaries.</p>
							
						</div>
						<div class="row">	
							<form action="#" method="post" id="frm-landingPage1" class="form-inline">
                                    <div class="form-group">										
                                        <input type="text" class="form-control booking" placeholder="Where" name="where" id="pac-input" required value="">										
									</div>	
									<div class="form-group">
										<input id="checkin" type="text" placeholder="Check-in" class="form-control booking">										
									</div>
									<div class="form-group">		
										<input id="checkout" type="text" placeholder="Check-out" class="form-control booking">										
									</div>
									<div class="form-group">		
										<input type="number" step="1" min="1" class="form-control booking" placeholder="Guests" name="Guests" id="Guests"  value="">
                                    </div>
									<div class="form-group">	
										<button type="submit" class="btn btn-default booking">Search</button>	
									</div>

                                    
                                    
                            </form>
						</div>
						
						
						
						
						
						<div class="row">
						
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						

							<a href="#section2" class="text-center" id="aboutUs">About us</a>
							<p class="text-center" ><i class="fa fa-angle-double-down" aria-hidden="true"></i></p>
						</div>
                    </div>
                </div>
				</div>
            </div>
			       
            <!-- *** INTRO IMAGE END *** -->



            


            <!-- *** ABOUT US ***
        _________________________________________________________ -->

            <div class="section  text-gray" id="section2">
                <div class="container">
					<div class="row">
                    <div class="col-md-12">
                        <h2 class="title" data-animate="fadeInDown">About us</h2>

                        <div class="row">

                            <div class="col-md-8 col-md-offset-2">

                                
								<p class="text-large text-thin"  data-animate="fadeInUp">We believe that laborers deserve their rest, and what better place to have it than in the homes of co-laborers. Missions Bed and Breakfast (also missionsbnb or mbnb) is an online marketplace and hospitality service enabling missionaries to lease or rent short-term lodging through other believers across the world. By this we seek to meet these goals - our purposes - the CROSS (<strong class="green">C</strong>onnect | <strong class="green">R</strong>est | <strong class="green">O</strong>pportunities | <strong class="green">S</strong>upport | <strong class="green">S</strong>pread).</p>
                                <p class="text-large text-thin "  data-animate="fadeInUp">

									<strong class="green">Connect</strong> and unify the church globally<br>
									Provide missionaries a place of <strong class="green">Rest</strong><br>
									Create a platform for <strong class="green">Opportunities</strong><br>
									<strong class="green">Support</strong> missionaries <br>
									<strong class="green">Spread</strong> the Gospel<br>

								</p>
								<p class="text-large text-thin "  data-animate="fadeInUp">Email us at: info@missionsbnb.com</p>

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

            <!-- *** ABOUT US END *** -->

            <!-- *** JOIN US ***
        _________________________________________________________ -->

            
            <div class="section text-gray" id="section3" data-animate="fadeInUp">

                <div class="container">
				<div class="row">
                    <div class="col-md-12">

                        <div class="mb20">
                            <h2 class="title" data-animate="fadeInUp">Survey</h2>

                            <p class="lead text-center" data-animate="fadeInUp">Our recent survey of missionaries showed us 5 things. </p>
							<p class="text-small"><a href="https://www.surveymonkey.com/r/YRF2NZM">Take the survey now</a></p>		
                        </div>

                        <ul class="owl-carousel testimonials same-height-row" data-animate="fadeInUp">
                            <li class="item">
                                <div class="testimonial same-height-always">
                                    <div class="text">
                                        <p>89% of missionaries need short-term lodging.</p>
										<img class="img-responsive" alt="" src="img/often.png">
                                    </div>
									<div class="bottom">
                                        <div class="icon"><i class="fa fa-question"></i></div>
                                        <div class="name-picture">
                                            
                                            <h5>How often do you need short-term lodging as a missionary</h5>
                                            
                                        </div>
                                    </div>
                                    
                                </div>
                            </li>
                            <li class="item">
                                <div class="testimonial same-height-always">
                                    <div class="text">
                                        <p>75% of missionaries use airbnb or hotels during their travels.</p>
										<img class="img-responsive" alt="" src="img/hotel.png">
                                    </div>
									<div class="bottom">
                                        <div class="icon"><i class="fa fa-question"></i></div>
                                        <div class="name-picture">
                                            
                                            <h5>When support raising or speaking at churches, how likely do you use airbnb or hotel services</h5>
                                            
                                        </div>
										
									</div>                                    
                                </div>								
                            </li>
                            <li class="item">
                                <div class="testimonial same-height-always">
                                    <div class="text">
                                        <p>86% would prefer to use mbnb if given the option.</p>
										<img class="img-responsive" alt="" src="img/usembnb.png">
                                        
                                    </div>
									<div class="bottom">
                                        <div class="icon"><i class="fa fa-question"></i></div>
                                        <div class="name-picture">
                                            
                                            <h5>How likely are you to use mbnb as opposed to other lodging options</h5>
                                            
                                        </div>
										
									</div>
                                    
                                </div>
                            </li>
							<li class="item">
                                <div class="testimonial same-height-always">
                                    <div class="text">
                                        <p>Need for short-term lodging is year round.</p>
										<img class="img-responsive" alt="" src="img/month.png">
                                        
                                    </div>
									<div class="bottom">
                                        <div class="icon"><i class="fa fa-question"></i></div>
                                        <div class="name-picture">
                                            
                                            <h5>On average are there certain months you require short-term lodging</h5>
                                            
                                        </div>
										
									</div>
                                    
                                </div>
                            </li>
							<li class="item">
                                <div class="testimonial same-height-always">
                                    <div class="text">
                                        <p>100% of missionaries say they know other missionaries who would prefer using mbnb.</p>
										<img class="img-responsive" alt="" src="img/know.png">
                                        
                                    </div>
									<div class="bottom">
                                        <div class="icon"><i class="fa fa-question"></i></div>
                                        <div class="name-picture">
                                            
                                            <h5>Do you know others who would benefit from this type of service</h5>
                                            
                                        </div>
										
									</div>
                                    
                                </div>
                            </li>	
                        </ul> <!-- /.owl-carousel -->
                    </div> <!-- /.12 -->
					</div>
                </div> <!-- /.container -->

            </div><!-- /.section -->	

			
            <!-- *** TESTIMONIALS END *** -->


			<div class="section text-gray" id="section4" data-animate="fadeInUp">

                <div class="container">
				<div class="row">
                    <div class="col-md-12">

                        <div class="mb20">
                            <h2 class="title" data-animate="fadeInUp">Reviews</h2>

                            <p class="lead text-center" data-animate="fadeInUp">Here is what missionaries across the world are saying. </p> 
                        </div>

                        <ul class="owl-carousel testimonials same-height-row" data-animate="fadeInUp">
                            <li class="item">
                                <div class="testimonial same-height-always">
                                    <div class="text">
                                        <h3>​T​his is a great idea! Missionaries often need a place to stay and many people love hosting missionaries. I am excited to see where this goes.</h3>
                                    </div>
                                    <div class="bottom">
                                        <div class="icon"><i class="fa fa-quote-left"></i></div>
                                        <div class="name-picture">
                                            <img class="text-right" alt="" src="img/BelkisLehmann.jpeg" >
                                            <h5 class="text-right">Belkis Lehmann</h5>
                                            <p class="text-right" style="font-size:.6em"><strong>National Diversity Specialist</strong></p>
											<p class="text-right" style="font-size:.5em"><strong>Chi Alpha Campus Ministries U.S.A.</strong></p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <div class="testimonial same-height-always">
                                    <div class="text">
                                        <img class="img-responsive" alt="" src="img/Review1.png">
                                    </div>
                                    
                                </div>
                            </li>
                            <li class="item">
                                <div class="testimonial same-height-always">
                                    <div class="text">
                                        <img class="img-responsive" alt="" src="img/Review2.png">
                                    </div>
                                    
                                </div>
                            </li>
                            <li class="item">
                                <div class="testimonial same-height-always">
                                    <div class="text">
                                        <img class="img-responsive" alt="" src="img/Review3.png">
                                    </div>
                                    
                                </div>
                            </li>
                            <li class="item">
                                <div class="testimonial same-height-always">
                                    <div class="text">
                                        <img class="img-responsive" alt="" src="img/Review4.png">
                                    </div>
                                    
                                </div>
                            </li>
							<li class="item">
                                <div class="testimonial same-height-always">
                                    <div class="text">
                                        <img class="img-responsive" alt="" src="img/Review5.png">
                                    </div>
                                    
                                </div>
                            </li>
                        </ul> <!-- /.owl-carousel -->
                    </div> <!-- /.12 -->
					</div>
                </div> <!-- /.container -->

            </div><!-- /.section -->	

		
		
		
		
		
		


            <!-- *** FOOTER ***
        _________________________________________________________ -->

            <?php include 'footer.php'; ?>

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