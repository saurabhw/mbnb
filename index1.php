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
        <link href="css/custom.css" rel="stylesheet">

        <!-- CSS Animations -->
        <link href="css/animate.css" rel="stylesheet">

        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.png">

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



	
		<?php include 'autoComplete.php';?>
        <div id="all">
		
		

            <!-- *** INTRO IMAGE ***
        _________________________________________________________ -->
            <div id="intro" class="clearfix">
			
				<div class="mainItem">
				<video autoplay loop id="video-background" muted plays-inline>
				  <source src="img/backgroundTest.mp4" type="video/mp4">
				</video>
				    <div class="container">
					<div class="row">
						<p class="text text-right topRightText">
							<?php if(checkIfLoginThenDoNotCreate()){ ?>
								<span id="logIn" data-toggle="modal" data-target="#login-modal" ><span id="login" ><i class="fa fa-sign-in" aria-hidden="true"></i> Login</span></span>
							<?php } ?>
							<?php if(checkIfNotLoginThenDoNotCreate()){ ?>
								<span><i class="fa fa-magic" aria-hidden="true"></i> Blessings <?php if(isset($_SESSION['first_name'])){ echo $_SESSION['first_name']; }?></span>
							<?php } ?>
							<?php if(checkIfNotLoginThenDoNotCreate()){ ?>
								<a href="logout.php" style="color:white;margin-left:1em;"><i class="fa fa-lock" aria-hidden="true"></i> LogOut</a>
							<?php } ?>
						</p>
					</div>
					</div>
                <div class="item">
                    <div class="container">
						<div class="row">
						
                            <h1 data-animate="fadeInDown">missionsbnb</h1>							
                            <p  class="message" data-animate="fadeInUp" style="margin-top:-1em;">Short-term lodging for missionaries.</p>
							
						</div>
						<div class="row">	
							<form action="#" method="post" id="" class="form-inline">
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
						
						<div class="row" id="whatToBe">
                            <div class="col-md-6 col-md-offset-3" data-animate="fadeInUp">
							
                                <form action="#" method="post" id="frm-landingPage1" class="form">
                                    <div class="input-group">

										
                                        <span class="input-group-btn" >
											
                                            <input class="text-center above1"  value="I want to be a" name="_submit" id="frm-landingPage1-text" disabled>

                                        </span>
										
										<span class="input-group-btn" >

                                            <input class="text-center above2"  value="I am a" name="_submit" id="frm-landingPage1-text2" disabled>

                                        </span>
										
										
										

                                    </div>
                                    <!-- /input-group -->
                                </form>

                                <p class="text-small"></p>
                            </div>

                        </div>
						
						
						
						<div class="row">
                            <div class="col-md-6 col-md-offset-3" data-animate="fadeInUp">
							
                                <form action="registerStep1.php" method="post"  class="form">
                                    <div class="input-group">

										
                                        <span class="input-group-btn" >
											
                                            <input class="btn btn-default" type="submit" value="HOST" name="_submit" id="frm-landingPage1-submit">

                                        </span>
										
										<span class="input-group-btn" >

                                            <input class="btn btn-default" type="submit" value="MISSIONARY" name="_submit" id="frm-landingPage1-submit2">

                                        </span>
										
										
										

                                    </div>
                                    <!-- /input-group -->
                                </form>

                                <p class="text-small"></p>
                            </div>

                        </div>
						<div class="row">
							<a href="#section2" class="text-center" id="aboutUs">About us</a>
							<p class="text-center" ><i class="fa fa-angle-double-down" aria-hidden="true"></i></p>
						</div>
                    </div>
                </div>
				</div>
            </div>
			        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
            <div class="modal-dialog modal-sm">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title text-center" id="Login">login</h4>
                    </div>
                    <div class="modal-body">
                        <form action="login.php" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" id="email-modal" placeholder="email" name="email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password-modal" placeholder="password" name="password">
                            </div>
							
							<div>
							<p class="text-right"><a href ="forgot.php" class="text-warning">Forgot Password?</a></p>
							</div>
							
							<div>
                            <p class="text-center">
                                <button class="btn btn-warning" name="login"><i class="fa fa-sign-in"></i> Log in</button>
                            </p>
							</div>												

                        </form>

                        <p class="text-center text-muted">Not registered yet?</p>
                        <p class="text-center text-muted"><a href="chooseRole.php"><strong class="text-warning">Register now</strong></a>! It is easy and done in 1&nbsp;minute and gives you access to special discounts and much more!</p>
						
						<div>
                            <p class="text-center">
                                 Or Login Using
                            </p>
						</div>
						
						
						<div>
                            <p class="text-center social">
                                <a href="#" class="external facebook"   ><i class="fa fa-facebook"></i></a>
                                <a href="#" class="external instagram"  ><i class="fa fa-instagram"></i></a>
                                <a href="#" class="external twitter"  ><i class="fa fa-twitter"></i></a>                                
                            </p>
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

                                <p class="text-large text-thin"  data-animate="fadeInUp">We believe that laborers deserve their rest, and what better place to have it than in the homes of co-laborers. Missions Bed and Breakfast (also missionsbnb or mbnb) is an online marketplace, and hospitality service enabling missionaries to lease or rent short-term lodging through other believers across the world. And by this we serve to meet these goals - our purposes - called RUCS (<strong>R</strong>est | <strong>U</strong>nify | <strong>C</strong>onnect | <strong>S</strong>pread).</p>
                                <p class="text-large text-thin "  data-animate="fadeInUp">
									Providing missionaries a place of <strong>Rest</strong><br>
									<strong>Unifying</strong> the Body of Christ<br>
									<strong>Connecting</strong> the church globally<br>
									<strong>Spreading</strong> the Gospel<br>									 
								</p>

                                <p   data-animate="fadeInUp"><img src="img/team.jpg" alt="" class="img-circle img-responsive ondra-michal"></p>

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
                            <h2 class="title" data-animate="fadeInUp">Customers said about us</h2>

                            <p class="lead text-center" data-animate="fadeInUp">Quick, Baz, get my woven flax jodhpurs! "Now fax quiz Jack!" my brave ghost pled. </p> 
                        </div>

                        <ul class="owl-carousel testimonials same-height-row" data-animate="fadeInUp">
                            <li class="item">
                                <div class="testimonial same-height-always">
                                    <div class="text">
                                        <p>One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections.</p>
                                    </div>
                                    <div class="bottom">
                                        <div class="icon"><i class="fa fa-quote-left"></i></div>
                                        <div class="name-picture">
                                            <img class="" alt="" src="img/person-1.jpg">
                                            <h5>John McIntyre</h5>
                                            <p>CEO, TransTech</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <div class="testimonial same-height-always">
                                    <div class="text">
                                        <p>The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. "What's happened to me? " he thought. It wasn't a dream.</p>
                                    </div>
                                    <div class="bottom">
                                        <div class="icon"><i class="fa fa-quote-left"></i></div>
                                        <div class="name-picture">
                                            <img class="" alt="" src="img/person-2.jpg">
                                            <h5>John McIntyre</h5>
                                            <p>CEO, TransTech</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <div class="testimonial same-height-always">
                                    <div class="text">
                                        <p>His room, a proper human room although a little too small, lay peacefully between its four familiar walls.</p>

                                        <p>A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame.</p>
                                    </div>
                                    <div class="bottom">
                                        <div class="icon"><i class="fa fa-quote-left"></i></div>
                                        <div class="name-picture">
                                            <img class="" alt="" src="img/person-3.jpg">
                                            <h5>John McIntyre</h5>
                                            <p>CEO, TransTech</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <div class="testimonial same-height-always">
                                    <div class="text">
                                        <p>It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull weather. Drops of rain could be heard hitting the pane, which made him feel quite sad.</p>
                                    </div>

                                    <div class="bottom">
                                        <div class="icon"><i class="fa fa-quote-left"></i></div>
                                        <div class="name-picture">
                                            <img class="" alt="" src="img/person-4.jpg">
                                            <h5>John McIntyre</h5>
                                            <p>CEO, TransTech</p>
                                        </div>
                                    </div>
                                </div> 
                            </li>
                            <li class="item">
                                <div class="testimonial same-height-always">
                                    <div class="text">
                                        <p>It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull weather. Drops of rain could be heard hitting the pane, which made him feel quite sad. Gregor then turned to look out the window at the dull weather. Drops of rain could be heard hitting the pane, which made him feel quite sad.</p>
                                    </div>

                                    <div class="bottom">
                                        <div class="icon"><i class="fa fa-quote-left"></i></div>
                                        <div class="name-picture">
                                            <img class="" alt="" src="img/person-4.jpg">
                                            <h5>John McIntyre</h5>
                                            <p>CEO, TransTech</p>
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

            <!-- *** CONTACT ***
        _________________________________________________________ -->

            



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