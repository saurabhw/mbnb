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
        
		<link href="css/host.css" rel="stylesheet">
		<link href="css/header.css" rel="stylesheet">

        <!-- CSS Animations -->
        <link href="css/animate.css" rel="stylesheet">

        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.png">

        <!-- Mordernizr -->
        <script src="js/modernizr-2.6.2.min.js"></script>

		
		<!--For multidate selector-->
		 <link href="css/jquery-ui.multidatespicker.css" rel="stylesheet">
		

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
		
		
		<link rel="stylesheet" href="css/style.css">
	
	
    </head>

    <body data-spy="scroll" data-target="#navigation" data-offset="120" >
		
		
		<?php include 'header.php';?>
		
	<div class="container">	
		<div class="row">
			<div class="col-md-4">
				<button type="button" class="btn btn-warning" >Check how your property profile looks to others</button>	
			</div>
			<div class="col-md-1 col-md-offset-6">
				<button type="button" class="btn btn-warning" >Edit your profile page</button>	
			</div>
		</div>
	</div>
	
	<div class="jumbotron main-jumbotron" >
	  <button type="button" class="btn btn-warning top-center" onclick="openTitleImageModal();" >Edit Title Image <i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
      <button type="button" class="btn btn-warning bottom-align-text" onclick="openModal();" >Add More Photos</button>
	  
    </div>



<div id="TitleImageModal" class="modal" onclick="closeTitleImageModal()">
  <div class="modal-content" onclick="event.stopPropagation();">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" onclick="closeTitleImageModal()">&times;</button>
        <h4 class="modal-title">Edit Title Image</h4>
      </div>
      <div class="modal-body">		
        <p> <input type="file"  class="form-control"></p>		
	  </div>
      <div class="modal-footer">
		<button type="button" class="btn btn-primary" >Save changes</button>
        <button type="button" class="btn btn-default" data-dismiss="modal" onclick="closeTitleImageModal()">Close</button>
      </div>
  </div>
</div>	
	
	
<div id="myModal" class="modal" onclick="closeModal()">
  <div class="modal-content" onclick="event.stopPropagation();">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" onclick="closeModal()">&times;</button>
        <h4 class="modal-title">Add more photos</h4>
      </div>
      <div class="modal-body">
		<p> Previous image1 <button type="button" class="btn btn-danger">delete</button></p>
        <p><input type="file"  class="form-control"></p>
		<p><input type="file"  class="form-control"></p>
		<p><input type="file"  class="form-control"></p>
	  </div>
      <div class="modal-footer">
		<button type="button" class="btn btn-primary" >Add</button>
        <button type="button" class="btn btn-default" data-dismiss="modal" onclick="closeModal()">Close</button>
      </div>
  </div>
</div>





<nav class="navbar topbar" id="nav-bar">
	<div id="top">	
	
		<div class="container">
		<div class="row">
            <div class="col-xs-6"> 
                <ul class="menu" style="text-align: left;">                    
                    <li><a href="#booking">Book</a>
                    </li>
                    <li><a href="#About_the_family">About the family</a>
                    </li>
                </ul>
            </div>
			
			
			
            <div class="col-xs-6" >
                <ul class="menu" style="text-align: right;">                    
                    <li><a href="#missionary_served_map">Map</a>
                    </li>
                    <li><a href="#reviews">Reviews</a>
                    </li>
                </ul>
            </div>
        </div>
		</div>
	</div>
	</nav>

	<div class="container">
	<div class="row">
		<div class="col-xs-2 col-xs-offset-5">
			<button type="button" class="btn btn-warning btn-xs" style="z-index:20; position:absolute;top:0;" onclick="openFamilyImageModal();">Edit Family Picture <i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
			<img class="image thumbnail hidden-xs" id="familyPhoto" src="img/no-image.jpg" >
			
			<div class="caption hidden-xs" >
			  <p id="familyPhotoCaption"><button type="button" class="btn btn-warning btn-xs" style="font-family:none;" onclick="openFamilyNameModal();" > Edit <i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>YOUR FAMILY NAME </p>				  
			</div>
			
		</div>
	</div>
	</div>
	<div class="container">
	<div class="row">
		<div class="col-md-12">
			<p id="welcomeMessage" ><button type="button" class="btn btn-warning btn-xs" style="font-family:none;" onclick="openWelcomeMessageModal();">Edit <i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>Your welcome message  </p>
		</div>
	</div>
	</div>
	
<div id="FamilyImageModal" class="modal" onclick="closeFamilyImageModal()">
  <div class="modal-content" onclick="event.stopPropagation();">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" onclick="closeFamilyImageModal()">&times;</button>
        <h4 class="modal-title">Add Family photo</h4>
      </div>
      <div class="modal-body">	
		<p><input type="file"  class="form-control"></p>
	  </div>
      <div class="modal-footer">
		<button type="button" class="btn btn-primary" >Save Changes</button>
        <button type="button" class="btn btn-default" data-dismiss="modal" onclick="closeFamilyImageModal()">Close</button>
      </div>
  </div>
</div>	


<div id="FamilyNameModal" class="modal" onclick="closeFamilyNameModal()">
  <div class="modal-content" onclick="event.stopPropagation();">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" onclick="closeFamilyNameModal()">&times;</button>
        <h4 class="modal-title">Edit Family Name</h4>
      </div>
      <div class="modal-body">	
		<p><input type="text" placeholder="previous family name"  class="form-control"></p>
	  </div>
      <div class="modal-footer">
		<button type="button" class="btn btn-primary" >Save Changes</button>
        <button type="button" class="btn btn-default" data-dismiss="modal" onclick="closeFamilyNameModal()">Close</button>
      </div>
  </div>
</div>	


<div id="WelcomeMessageModal" class="modal" onclick="closeWelcomeMessageModal()">
  <div class="modal-content" onclick="event.stopPropagation();">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" onclick="closeWelcomeMessageModal()">&times;</button>
        <h4 class="modal-title">Edit Family Name</h4>
      </div>
      <div class="modal-body">	
		<p><input type="text" placeholder="previous welcome message"  class="form-control"></p>
	  </div>
      <div class="modal-footer">
		<button type="button" class="btn btn-primary" >Save Changes</button>
        <button type="button" class="btn btn-default" data-dismiss="modal" onclick="closeWelcomeMessageModal()">Close</button>
      </div>
  </div>
</div>	
	
	
			
<div id="rateModal" class="modal" onclick="closeRateModal()">
  <div class="modal-content" onclick="event.stopPropagation();">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" onclick="closeRateModal()">&times;</button>
        <h4 class="modal-title">Edit Per Night rate</h4>
      </div>
      <div class="modal-body">	
		<p><input type="text" placeholder="previous rate"  class="form-control"></p>
	  </div>
      <div class="modal-footer">
		<button type="button" class="btn btn-primary" >Save Changes</button>
        <button type="button" class="btn btn-default" data-dismiss="modal" onclick="closeRateModal()">Close</button>
      </div>
  </div>
</div>		
	
	

	
	<!--Booking and Features-->
<section class="candy-wrapper" id="booking">
  <article class="main">
	<div class="box">
					<div class="box-header">
                            <h6 class="text-center"><span style="font-size:2em;">Features</span></h6>
                    </div>
					<div class="panel-body" >
						
						
						
						
						
						<div class="panel panel-warning">
						  <div class="panel-heading text-center ">Type of Property/Area</div>
						  <div class="panel-body">
						  <strong>Type:</strong>
							<div class="row">
								<div class="col-md-6"><input type="checkbox" checked name="Shared_Place" value="Shared_Place" onclick="strike('Shared_Place');"><i class="flaticon-home"></i> 
                               <span data-animate="fadeInDown" id="Shared_Place"> Shared Place</span></div>
								
								<div class="col-md-6"><input type="checkbox" checked name="Vacant_House" value="Vacant_House" onclick="strike('Vacant_House');"><i class="flaticon-home-1"></i>
								<span data-animate="fadeInDown" id="Vacant_House" >Vacant House</span></div>
								
								<div class="col-md-6"><input type="checkbox" checked name="Guest_House" value="Guest_House" onclick="strike('Guest_House');"><i class="flaticon-guest-house"></i>
								<span data-animate="fadeInDown" id="Guest_House" >Guest_House</span></div>
								
								<div class="col-md-6"><input type="checkbox" checked name="Apartment" value="Apartment" onclick="strike('Apartment');"><i class="flaticon-apartment"></i>
								<span data-animate="fadeInDown" id="Apartment" >Apartment</span></div>
							</div>
						  <strong>Area:</strong>		
							<div class="row">
								<div class="col-md-6"><input type="checkbox" checked name="City" value="City" onclick="strike('City');"><i class="flaticon-cityscape"></i>
								<span data-animate="fadeInDown" id="City" >City</span></div>
								<div class="col-md-6"><input type="checkbox" checked name="Suburb" value="Suburb" onclick="strike('Suburb');"><i class="flaticon-suburb"></i>
								<span data-animate="fadeInDown" id="Suburb">Suburb</span></div>
								<div class="col-md-6"><input type="checkbox" checked name="Country" value="Country" onclick="strike('Country');"><i class="flaticon-rural-house"></i>
								<span data-animate="fadeInDown" id="Country">Country/Rural</span></div>
							</div>
						  </div>
						</div>
						
						
						<div class="panel panel-warning">
						  <div class="panel-heading text-center">Occupancy</div>
						  <div class="panel-body">
							<strong>Bed:</strong>
							<div class="row">								
								<div class="col-md-6"><i class="flaticon-twin-beds"></i><span data-animate="fadeInDown" >2 Twin</span> </div>
								<div class="col-md-6"><i class="flaticon-bed"></i><span data-animate="fadeInDown" >3 Full</span></div>
								<div class="col-md-6"><i class="flaticon-queen-size-bed"></i><span data-animate="fadeInDown" >1 Queen</span> </div>
								<div class="col-md-6"><i class="flaticon-king-size-bedroom"></i><span data-animate="fadeInDown" >1 King</span> </div>
							</div>
							<br>
							<strong>Other beds:</strong>
							<div class="row">								
								<div class="col-md-6"><input type="checkbox" checked name="Air_mattress" value="Air_mattress" onclick="strike('Air_mattress');"><i class="flaticon-air-mattress"></i>
								<span data-animate="fadeInDown" id="Air_mattress">Air mattress</span></div>
								
								<div class="col-md-6"><input type="checkbox" checked name="Futon" value="Futon" onclick="strike('Futon');"><i class="flaticon-bed-1"></i>
								<span data-animate="fadeInDown" id="Futon">Futon</span></div>
								
								<div class="col-md-6"><input type="checkbox" checked name="Hide_a_bed" value="Hide_a_bed" onclick="strike('Hide_a_bed');"><i class="flaticon-double-bed"></i>
								<span data-animate="fadeInDown" id="Hide_a_bed">Hide-a-bed</span></div>
								
								<div class="col-md-6"><input type="checkbox" checked name="Murphy_bed" value="Murphy_bed" onclick="strike('Murphy_bed');"><i class="flaticon-bed-2"></i>
								<span data-animate="fadeInDown" id="Murphy_bed" >Murphy bed</span></div>
								
								<div class="col-md-6"><input type="checkbox" checked name="Couch" value="Couch" onclick="strike('Couch');"><i class="flaticon-long-sofa"></i>
								<span data-animate="fadeInDown" id="Couch" >Couch</span></div>
							</div>													
						  </div>
						</div>
						
						
						<div class="panel panel-warning">
						  <div class="panel-heading text-center">Rest and Relaxation</div>
						  <div class="panel-body">
							<strong>At Home:</strong>
							<div class="row">								
								<div class="col-md-6"><input type="checkbox" checked name="Cable_TV" value="Cable_TV" onclick="strike('Cable_TV');"><i class="flaticon-cable-tv-sign-with-monitor"></i>
								<span data-animate="fadeInDown" id="Cable_TV">Cable TV</span></div>
								
								<div class="col-md-6"><input type="checkbox" checked name="Yard" value="Yard" onclick="strike('Yard');"><i class="flaticon-fence"></i>
								<span data-animate="fadeInDown" id="Yard">Yard</span></div>
								
								<div class="col-md-6"><input type="checkbox" checked name="Swimming_Pool" value="Swimming_Pool" onclick="strike('Swimming_Pool');"><i class="flaticon-pool"></i>
								<span data-animate="fadeInDown" id="Swimming_Pool">Swimming Pool</span></div>								
								
								<div class="col-md-6"><input type="checkbox" checked name="Library" value="Library" onclick="strike('Library');"><i class="flaticon-study"></i>
								<span data-animate="fadeInDown" id="Library">Library/Reading room</span></div>
								
								<div class="col-md-6"><input type="checkbox" checked name="Video_games" value="Video_games" onclick="strike('Video_games');"><i class="flaticon-gamepad"></i>
								<span data-animate="fadeInDown" id="Video_games">Video games</span></div>
								
								<div class="col-md-6"><input type="checkbox" checked name="TrailAtHome" value="TrailAtHome" onclick="strike('TrailAtHome');"><i class="flaticon-river-trail"></i>
								<span data-animate="fadeInDown"id="TrailAtHome" >Trail</span></div>
								
								<div class="col-md-6"><input type="checkbox" checked name="Picnic_area" value="Picnic_area" onclick="strike('Picnic_area');"><i class="flaticon-picnic-table"></i>
								<span data-animate="fadeInDown" id="Picnic_area">Picnic area</span></div>
								
								<div class="col-md-6"><input type="checkbox" checked name="Basketball" value="Basketball" onclick="strike('Basketball');"><i class="flaticon-basketball-player-scoring"></i>
								<span data-animate="fadeInDown" id="Basketball">Basketball</span></div>
								
								<div class="col-md-6"><input type="checkbox" checked name="Pool_table" value="Pool_table" onclick="strike('Pool_table');"><i class="flaticon-billiards-table"></i>
								<span data-animate="fadeInDown" id="Pool_table">Pool table</span></div>
								
								<div class="col-md-6"><input type="checkbox" checked name="Soccer" value="Soccer" onclick="strike('Soccer');"><i class="flaticon-football"></i>
								<span data-animate="fadeInDown" id="Soccer">Soccer</span></div>
								
								<div class="col-md-6"><input type="checkbox" checked name="Porch" value="Porch" onclick="strike('Porch');"><i class="flaticon-flowers-pot-of-yard"></i>
								<span data-animate="fadeInDown" id="Porch">Porch</span></div>
								
								<div class="col-md-6"><input type="checkbox" checked name="Board_games" value="Board_games" onclick="strike('Board_games');"><i class="flaticon-economy-games"></i>
								<span data-animate="fadeInDown" id="Board_games">Card/Board games</span></div>
								
								<div class="col-md-6"><input type="checkbox" checked name="Sauna" value="Sauna" onclick="strike('Sauna');"><i class="flaticon-person-silhouette-in-sauna"></i>
								<span data-animate="fadeInDown" id="Sauna">Sauna</span></div>
								
								<div class="col-md-6"><input type="checkbox" checked name="Hottub" value="Hottub" onclick="strike('Hottub');"><i class="flaticon-sauna-bucket"></i>
								<span data-animate="fadeInDown" id="Hottub">Hottub</span></div>								
								
								<div class="col-md-6"><input type="checkbox" checked name="Piano" value="Piano" onclick="strike('Piano');"><i class="flaticon-piano-top-view"></i>
								<span data-animate="fadeInDown" id="Piano">Piano</span></div>
								
								<div class="col-md-6"><input type="checkbox" checked name="Guitar" value="Guitar" onclick="strike('Guitar');"><i class="flaticon-guitar"></i>
								<span data-animate="fadeInDown" id="Guitar">Guitar</span></div>
								
								<div class="col-md-6"><input type="checkbox" checked name="Gym" value="Gym" onclick="strike('Gym');"><i class="flaticon-exercise"></i>
								<span data-animate="fadeInDown" id="Gym">Gym</span></div>
								
								<div class="col-md-6"><input type="checkbox" checked name="Patio" value="Patio" onclick="strike('Patio');"><i class="flaticon-patio"></i>
								<span data-animate="fadeInDown" id="Patio">Patio</span></div>
								
							</div>
							<br>
							<strong>In the area:</strong>
							<div class="row"><!--Expalin this by reducing the screen size then change to 6col-->								
								<div class="col-md-6"><input type="checkbox" checked name="Mall" value="Mall" onclick="strike('Mall');"><i class="flaticon-mall"></i>
								<span data-animate="fadeInDown" id="Mall">Mall</span></div>
								
								<div class="col-md-6"><input type="checkbox" checked name="Local_events" value="Local_events" onclick="strike('Local_events');"><i class="flaticon-man-in-a-party-dancing-with-people"></i>
								<span data-animate="fadeInDown" id="Local_events">Local events</span></div>
								
								<div class="col-md-6"><input type="checkbox" checked name="Park" value="Park" onclick="strike('Park');"><i class="flaticon-park"></i>
								<span data-animate="fadeInDown" id="Park">Park</span></div>								
								
								<div class="col-md-6"><input type="checkbox" checked name="TrailInArea" value="TrailInArea" onclick="strike('TrailInArea');"><i class="flaticon-mountain-running-silhouette"></i>
								<span data-animate="fadeInDown" id="TrailInArea">Trail</span></div>
								
								<div class="col-md-6"><input type="checkbox" checked name="Bike_share" value="Bike_share" onclick="strike('Bike_share');"><i class="flaticon-bicycle"></i>
								<span data-animate="fadeInDown" id="Bike_share">Bike-share</span></div>
								
								<div class="col-md-6"><input type="checkbox" checked name="Skiing" value="Skiing" onclick="strike('Skiing');"><i class="flaticon-skiing-man"></i>
								<span data-animate="fadeInDown" id="Skiing">Skiing</span></div>
								
								<div class="col-md-6"><input type="checkbox" checked name="Beach" value="Beach" onclick="strike('Beach');"><i class="flaticon-sun-umbrella"></i>
								<span data-animate="fadeInDown" id="Beach">Beach</span></div>
								
								<div class="col-md-6"><input type="checkbox" checked name="Lake" value="Lake" onclick="strike('Lake');"><i class="flaticon-reed"></i>
								<span data-animate="fadeInDown" id="Lake">Lake</span></div>
								
								<div class="col-md-6"><input type="checkbox" checked name="Fishing" value="Fishing" onclick="strike('Fishing');"><i class="flaticon-fishing-rod-and-fisher"></i>
								<span data-animate="fadeInDown" id="Fishing">Fishing</span></div>
								
								<div class="col-md-6"><input type="checkbox" checked name="Lra" value="Lra" onclick="strike('Lra');"><i class="flaticon-surf"></i>
								<span data-animate="fadeInDown" id="Lra">Local recreational activities</span></div>
								
							</div>													
						  </div>
						</div>
						
						
						<div class="panel panel-warning">
						  <div class="panel-heading text-center ">Interior</div>
						  <div class="panel-body">
							<div class="row">
								<div class="col-md-6"><input type="checkbox" checked name="Air_condition" value="Air_condition" onclick="strike('Air_condition');"><i class="flaticon-air-conditioner"></i>
								<span data-animate="fadeInDown" id="Air_condition">Air condition</span></div>
								
								<div class="col-md-6"><input type="checkbox" checked name="Bathroom_Basics" value="Bathroom_Basics" onclick="strike('Bathroom_Basics');"><i class="flaticon-hanger-with-a-towel"></i>
								<span data-animate="fadeInDown" id="Bathroom_Basics">Bathroom Basics</span></div>
								
								<div class="col-md-6"><input type="checkbox" checked name="Heating" value="Heating" onclick="strike('Heating');"><i class="flaticon-heating-black-tool"></i>
								<span data-animate="fadeInDown" id="Heating">Heating</span></div>
								
								<div class="col-md-6"><input type="checkbox" checked name="Kitchen" value="Kitchen" onclick="strike('Kitchen');"><i class="flaticon-chef"></i>
								<span data-animate="fadeInDown" id="Kitchen">Kitchen</span></div>							
								
								<div class="col-md-6"><input type="checkbox" checked name="Bathrooms" value="Bathrooms" onclick="strike('Bathrooms');"><i class="flaticon-bathtub"></i>
								<span data-animate="fadeInDown" id="Bathrooms">Bathrooms</span></div>
								
								<div class="col-md-6"><input type="checkbox" checked name="Wifi" value="Wifi" onclick="strike('Wifi');"><i class="flaticon-wifi-connection-signal-symbol"></i>
								<span data-animate="fadeInDown" id="Wifi">Wifi</span></div>
								
								<div class="col-md-6"><input type="checkbox" checked name="Computer" value="Computer" onclick="strike('Computer');"><i class="flaticon-monitor"></i>
								<span data-animate="fadeInDown" id="Computer">Computer</span></div>
								
							</div>
						  </div>
						</div>
						
						
						<div class="panel panel-warning">
						  <div class="panel-heading text-center ">Exterior</div>
						  <div class="panel-body">
							<div class="row">
								<div class="col-md-6"><input type="checkbox" checked name="Lawn" value="Lawn" onclick="strike('Lawn');"><i class="flaticon-lawn-mower"></i>
								<span data-animate="fadeInDown" id="Lawn">Lawn</span></div>
								
								<div class="col-md-6"><input type="checkbox" checked name="Fire_pit" value="Fire_pit" onclick="strike('Fire_pit');"><i class="flaticon-fire"></i>
								<span data-animate="fadeInDown" id="Fire_pit">Fire-pit</span></div>
								
								<div class="col-md-6"><input type="checkbox" checked name="Garden" value="Garden" onclick="strike('Garden');"><i class="flaticon-vegetables"></i>
								<span data-animate="fadeInDown" id="Garden">Garden</span></div>
								
								<div class="col-md-6"><input type="checkbox" checked name="Barbeque" value="Barbeque" onclick="strike('Barbeque');"><i class="flaticon-barbecue"></i>
								<span data-animate="fadeInDown" id="Barbeque">Barbeque</span></div>							
								
								<div class="col-md-6"><input type="checkbox" checked name="Lawn_games" value="Lawn_games" onclick="strike('Lawn_games');"><i class="flaticon-sack-race"></i>
								<span data-animate="fadeInDown" id="Lawn_games">Lawn games</span></div>
								
								<div class="col-md-6"><input type="checkbox" checked name="Basketball_court" value="Basketball_court" onclick="strike('Basketball_court');"><i class="flaticon-basketball-court"></i>
								<span data-animate="fadeInDown" id="Basketball_court">Basketball court</span></div>
								
								<div class="col-md-6"><input type="checkbox" checked name="Soccer" value="Soccer" onclick="strike('Soccer');"><i class="flaticon-soccer-ball-in-front-of-the-arch"></i>
								<span data-animate="fadeInDown" id="SoccerExterior">Soccer</span></div>
								
								<div class="col-md-6"><input type="checkbox" checked name="volleyball_area" value="volleyball_area" onclick="strike('volleyball_area');"><i class="flaticon-volleyball-player"></i>
								<span data-animate="fadeInDown" id="volleyball_area">volleyball_area</span></div>
								
							</div>
						  </div>
						</div>
						
						
						<div class="panel panel-warning">
						  <div class="panel-heading text-center ">Appliances</div>
						  <div class="panel-body">
							<div class="row">
								<div class="col-md-6"><input type="checkbox" checked name="Washer_and_Dryer" value="Washer_and_Dryer" onclick="strike('Washer_and_Dryer');"><i class="flaticon-washing-machine"></i>
								<span data-animate="fadeInDown" id="Washer_and_Dryer">Washer and Dryer</span></div>
								
								<div class="col-md-6"><input type="checkbox" checked name="Oven" value="Oven" onclick="strike('Oven');"><i class="flaticon-microwave-oven"></i>
								<span data-animate="fadeInDown" id="Oven">Oven</span></div>
								
								<div class="col-md-6"><input type="checkbox" checked name="Stove" value="Stove" onclick="strike('Stove');"><i class="flaticon-stove"></i>
								<span data-animate="fadeInDown" id="Stove">Stove</span></div>
								
								<div class="col-md-6"><input type="checkbox" checked name="Iron" value="Iron" onclick="strike('Iron');"><i class="flaticon-iron"></i>
								<span data-animate="fadeInDown" id="Iron">Iron</span></div>							
								
								<div class="col-md-6"><input type="checkbox" checked name="Ironing_board" value="Ironing_board" onclick="strike('Ironing_board');"><i class="flaticon-ironing-board"></i>
								<span data-animate="fadeInDown" id="Ironing_board">Ironing board</span></div>
								
								<div class="col-md-6"><input type="checkbox" checked name="Toaster" value="Toaster" onclick="strike('Toaster');"><i class="flaticon-toast"></i>
								<span data-animate="fadeInDown" id="Toaster">Toaster</span></div>
								
								<div class="col-md-6"><input type="checkbox" checked name="Hair_dryer" value="Hair_dryer" onclick="strike('Hair_dryer');"><i class="flaticon-hair-dryer-on"></i>
								<span data-animate="fadeInDown" id="Hair_dryer">Hair dryer</span></div>
								
								<div class="col-md-6"><input type="checkbox" checked name="Microwave" value="Microwave" onclick="strike('Microwave');"><i class="flaticon-microwaves"></i>
								<span data-animate="fadeInDown" id="Microwave">Microwave</span></div>
								
								<div class="col-md-6"><input type="checkbox" checked name="Cooking_Basics" value="Cooking_Basics" onclick="strike('Cooking_Basics');"><i class="flaticon-hot-pot"></i>
								<span data-animate="fadeInDown" id="Cooking_Basics">Cooking Basics (pots, pans etc)</span></div>
								
								<div class="col-md-6"><input type="checkbox" checked name="Baking_basics" value="Baking_basics" onclick="strike('Baking_basics');"><i class="flaticon-cupcake-dessert"></i>
								<span data-animate="fadeInDown" id="Baking_basics">Baking basics</span></div>
								
								<div class="col-md-6"><input type="checkbox" checked name="Coffee_maker" value="Coffee_maker" onclick="strike('Coffee_maker');"><i class="flaticon-coffee-maker"></i>
								<span data-animate="fadeInDown" id="Coffee_maker">Coffee maker</span></div>
								
								<div class="col-md-6"><input type="checkbox" checked name="Coffee_grinder" value="Coffee_grinder" onclick="strike('Coffee_grinder');"><i class="flaticon-coffee-grinder"></i>
								<span data-animate="fadeInDown" id="Coffee_grinder">Coffee grinder</span></div>
								
								<div class="col-md-6"><input type="checkbox" checked name="blender" value="blender" onclick="strike('blender');"><i class="flaticon-blender"></i>
								<span data-animate="fadeInDown" id="blender">blender</span></div>
								
							</div>
						  </div>
						</div>
						
						
						<div class="panel panel-warning">
						  <div class="panel-heading text-center ">Children Friendly</div>
						  <div class="panel-body">
							<div class="row">
								<div class="col-md-6"><input type="checkbox" checked name="Crib" value="Crib" onclick="strike('Crib');"><i class="flaticon-baby-crib-bedroom-furniture"></i>
								<span data-animate="fadeInDown" id="Crib">Crib</span></div>
								
								<div class="col-md-6"><input type="checkbox" checked name="Swing" value="Swing" onclick="strike('Swing');"><i class="flaticon-swing"></i>
								<span data-animate="fadeInDown" id="Swing">Swing</span></div>
								
								<div class="col-md-6"><input type="checkbox" checked name="Slide" value="Slide" onclick="strike('Slide');"><i class="flaticon-slide"></i>
								<span data-animate="fadeInDown" id="Slide">Slide</span></div>
								
								<div class="col-md-6"><input type="checkbox" checked name="Baby_Monitor" value="Baby_Monitor" onclick="strike('Baby_Monitor');"><i class="flaticon-baby-monitor"></i>
								<span data-animate="fadeInDown" id="Baby_Monitor">Baby Monitor</span></div>							
								
								<div class="col-md-6"><input type="checkbox" checked name="High_chair" value="High_chair" onclick="strike('High_chair');"><i class="flaticon-high-chair"></i>
								<span data-animate="fadeInDown" id="High_chair">High chair</span></div>
								
								<div class="col-md-6"><input type="checkbox" checked name="Sand_box" value="Sand_box" onclick="strike('Sand_box');"><i class="flaticon-sand-box"></i>
								<span data-animate="fadeInDown" id="Sand_box">Sand box</span></div>
								
								<div class="col-md-6"><input type="checkbox" checked name="Stair_gates" value="Stair_gates" onclick="strike('Stair_gates');"><i class="flaticon-man-climbing-stairs"></i>
								<span data-animate="fadeInDown" id="Stair_gates">Stair gates</span></div>
								
								<div class="col-md-6"><input type="checkbox" checked name="Children_silverware" value="Children_silverware" onclick="strike('Children_silverware');"><i class="flaticon-cutlery"></i>
								<span data-animate="fadeInDown" id="Children_silverware">Children_silverware</span></div>
								
								<div class="col-md-6"><input type="checkbox" checked name="Window_guards" value="Window_guards" onclick="strike('Window_guards');"><i class="flaticon-stained-glass-window"></i>
								<span data-animate="fadeInDown" id="Window_guards">Window guards</span></div>
								
								<div class="col-md-6"><input type="checkbox" checked name="Outlet_guards" value="Outlet_guards" onclick="strike('Outlet_guards');"><i class="flaticon-socket"></i>
								<span data-animate="fadeInDown" id="Outlet_guards">Outlet guards</span></div>
								
								<div class="col-md-6"><input type="checkbox" checked name="Child_proof" value="Child_proof" onclick="strike('Child_proof');"><i class="flaticon-glass-warning-sign-for-shopping-packages"></i>
								<span data-animate="fadeInDown" id="Child_proof">Child-proof (hardly any breakables)</span></div>
								
								<div class="col-md-6"><input type="checkbox" checked name="Books" value="Books" onclick="strike('Books');"><i class="flaticon-books-stack-of-three"></i>
								<span data-animate="fadeInDown" id="Books">Books</span></div>
								
								<div class="col-md-6"><input type="checkbox" checked name="Toys" value="Toys" onclick="strike('Toys');"><i class="flaticon-mobile"></i>
								<span data-animate="fadeInDown" id="Toys">Toys</span></div>
							</div>
						  </div>
						</div>
						
						<div class="panel panel-warning">
						  <div class="panel-heading text-center ">Accessibility</div>
						  <div class="panel-body">
							<div class="row">
							
								<div class="col-md-6"><input type="checkbox" checked name="Wheelchair" value="Wheelchair" onclick="strike('Wheelchair');"><i class="flaticon-wheelchair"></i>
								<span data-animate="fadeInDown" id="Wheelchair">Wheelchair</span></div>
								
								<div class="col-md-6"><input type="checkbox" checked name="Elevator" value="Elevator" onclick="strike('Elevator');"><i class="flaticon-elevator"></i>
								<span data-animate="fadeInDown" id="Elevator">Elevator</span> </div>
								
								<div class="col-md-6"><input type="checkbox" checked name="Stairs" value="Stairs" onclick="strike('Stairs');"><i class="flaticon-ascending-stairs-signal"></i>
								<span data-animate="fadeInDown" id="Stairs">Stairs</span></div>
								
								<div class="col-md-6"><input type="checkbox" checked name="Handicap_bathrooms" value="Handicap_bathrooms" onclick="strike('Handicap_bathrooms');"><i class="flaticon-bathtub"></i>
								<span data-animate="fadeInDown" id="Handicap_bathrooms">Handicap accessible bathrooms</span></div>
								
								</div>
								<br>
								<strong>Parking:</strong>
								<div class="row">																							
								<div class="col-md-6"><input type="checkbox" checked name="Street_parking" value="Street_parking" onclick="strike('Street_parking');"><i class="flaticon-parking"></i>
								<span data-animate="fadeInDown" id="Street_parking">Street parking</span></div>
								
								<div class="col-md-6"><input type="checkbox" checked name="Carport" value="Carport" onclick="strike('Carport');"><i class="flaticon-car-garage"></i>
								<span data-animate="fadeInDown" id="Carport">Carport</span></div>
								
								<div class="col-md-6"><input type="checkbox" checked name="Garage" value="Garage" onclick="strike('Garage');"><i class="flaticon-garage"></i>
								<span data-animate="fadeInDown" id="Garage">Garage</span></div>
								
								<div class="col-md-6"><input type="checkbox" checked name="Driveway" value="Driveway" onclick="strike('Driveway');"><i class="flaticon-parking-1"></i>
								<span data-animate="fadeInDown" id="Driveway">Driveway</span></div>
								
							</div>
						  </div>
						</div>
						
						<div class="panel panel-warning">
						  <div class="panel-heading text-center ">Security and Safety</div>
						  <div class="panel-body">
							<div class="row">
								<div class="col-md-6"><input type="checkbox" checked name="Smoke_detector" value="Smoke_detector" onclick="strike('Smoke_detector');"><i class="flaticon-smoke-detector"></i>
								<span data-animate="fadeInDown" id="Smoke_detector">Smoke detector</span></div>
								
								<div class="col-md-6"><input type="checkbox" checked name="Fire_alarm" value="Fire_alarm" onclick="strike('Fire_alarm');"><i class="flaticon-fire-alarm"></i>
								<span data-animate="fadeInDown" id="Fire_alarm">Fire alarm</span></div>
								
								<div class="col-md-6"><input type="checkbox" checked name="Carbon_monoxide_detector" value="Carbon_monoxide_detector" onclick="strike('Carbon_monoxide_detector');"><i class="flaticon-smoke"></i>
								<span data-animate="fadeInDown" id="Carbon_monoxide_detector">Carbon monoxide detector</span></div>
								
								<div class="col-md-6"><input type="checkbox" checked name="Private_entrance" value="Private_entrance" onclick="strike('Private_entrance');"><i class="flaticon-opened-filled-door"></i>
								<span data-animate="fadeInDown" id="Private_entrance">Private entrance</span></div>							
								
								<div class="col-md-6"><input type="checkbox" checked name="Shared_entrance" value="Shared_entrance" onclick="strike('Shared_entrance');"><i class="flaticon-entrance"></i>
								<span data-animate="fadeInDown" id="Shared_entrance">Shared entrance</span></div>
								
								<div class="col-md-6"><input type="checkbox" checked name="Buzzer" value="Buzzer" onclick="strike('Buzzer');"><i class="flaticon-joker-buzzer"></i>
								<span data-animate="fadeInDown" id="Buzzer">Buzzer/Wireless Intercom</span></div>								
								
							</div>
						  </div>
						</div>
						
						<div class="panel panel-warning">
						  <div class="panel-heading text-center ">Unique/Other Qualities</div>
						  <div class="panel-body">
							<div class="row">
								<div class="col-md-6"><input type="checkbox" checked name="have_pets" value="have_pets" onclick="strike('have_pets');"><i class="flaticon-pet"></i>
								<span data-animate="fadeInDown" id="have_pets">We have pets</span></div>
								
								<div class="col-md-6"><input type="checkbox" checked name="Pets_Allowed" value="Pets_Allowed" onclick="strike('Pets_Allowed');"><i class="flaticon-pet"></i>
								<span data-animate="fadeInDown" id="Pets_Allowed">Pets Allowed</span></div>														
							</div>
						  </div>
						</div>
						
						
						
						
						
						
						
						
						
						

					</div>		
				</div>
  </article><!-- Leave No Space 
  --><aside class="sidebar fixedsticky">
	<div class="box ">
					<div class="box-header" >
                            <h6 class="text-center" ><span style="font-size:2em;">Booking</span></h6>
                    </div>
					<form>
						<div class="panel-body" >							
							<p class="text-center" id="rate" style="margin-top:-1em;">$60 Per Night</p>
							<div class="row">
								<div class=" col-sm-12 col-xs-12">
									<p class="text text-center">Select availability</p>
									<div id="mdp-demo" style="line-height:1.1em; margin-left:1em;" ></div>									
								</div>
							</div>	
							
							<div class="container">
								<div class="row">
									<div class="col-md-12">
									<p class="text text-center"><a href="#houseRules">Check-in Check-out timings?</a></p>
									</div>
								</div>
							</div>
							
							<div class="container">
								<div class="row">
									<!-- Open a modal for this -->
									<div class="text-center col-xs-12"><input type="button" class="btn btn-warning btn-block" value="Limit number of missionaries"></div>
								</div>
							</div>
							&nbsp;
							<div class="container">
								<div class="row">
									<!-- Open a modal for this -->
									<div class="text-center col-xs-12"><input type="button" class="btn btn-warning btn-block" value="Additional charges"></div>
								</div>
							</div>
							
							&nbsp;
							
							<div class="row">
								<div class="col-md-12">
								<p class="text-center" ><span class="btn btn-primary btn-block">Save</span></p>
								
								</div>
							</div>			
						</div>
					</form>
				</div>
  </aside>
</section>

	
	<div class="container" id="About_the_family">
		<div class="row box">
			<div class="col-md-6" style="margin-bottom:2em;">
				<h3 class="box-header" >About the family</h3>
				<div class="thumbnail">
				<img class="image thumbnail hidden-xs" id="familyPhotoAbout" src="img/no-image.jpg" >
				<button type="button" class="btn btn-warning "  onclick="openFamilyImageModal();">Edit Family Picture <i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
				<div class="caption">
				  <p class="text text-center" style="font-family:Algerian; "><button type="button" class="btn btn-warning btn-xs" style="font-family:none;" onclick="openFamilyNameModal();" > Edit <i class="fa fa-pencil-square-o" aria-hidden="true"></i></button> YOUR FAMILY NAME </p>
				</div>
				</div>
				<div>
				<textarea class="box" placeholder="Describe your family here." style="width:100%;"></textarea>
				<p class="text text-center"><button type="button" class="btn btn-warning">Save Description</button></p>
				</div>
			</div>
			
			<div class="col-md-6">
				<h3 class="box-header" id="houseRules">House rules</h3>
				<div class="list-group">
				  <a  class="list-group-item"><i class="fa fa-arrow-right" aria-hidden="true"></i> Check-in time <input type="time"> check-out time <input type="time"></a>
				  <a  class="list-group-item"><i class="fa fa-arrow-right" aria-hidden="true"></i> Must treat my little apartment and belongings with respect as if it was your own. Be mindful and treat the space as we should all treat ourselves - with love, kindness, gratitude. <div class="text text-right"><button type="button" class="btn btn-danger"  onclick="">Delete <i class="fa fa-trash" aria-hidden="true"></i></button></div></a>				  
				  <p class="text text-center"><button type="button" class="btn btn-warning" onclick="openRulesModal();"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add more rules</button></p>
				</div>
			</div>
		</div>	
	</div>


<div id="RulesModal" class="modal" onclick="closeRulesModal()">
  <div class="modal-content" onclick="event.stopPropagation();">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" onclick="closeRulesModal()">&times;</button>
        <h4 class="modal-title">Add a rule</h4>
      </div>
      <div class="modal-body">	
		<p><textarea name="text" style="height:7em; width:100%;" wrap="soft"> </textarea></p>
	  </div>
      <div class="modal-footer">
		<button type="button" class="btn btn-primary" >Add</button>
        <button type="button" class="btn btn-default" data-dismiss="modal" onclick="closeRulesModal()">Close</button>
      </div>
  </div>
</div>		


	
	
	<div class="container">
		<div class="row box">
			<div class="col-md-12">
				<h3 class="box-header text-center">House Address</h3>
				<p><input type="text" class="form-control form-group" placeholder="Address line1"></p> 
				<p><input type="text" class="form-control form-group" placeholder="Address line2"></p> 
				<p><input type="text" class="form-control form-group" placeholder="Address line3"></p> 
				<p><input type="text" class="form-control form-group" placeholder="City"></p>
				<p><input type="text" class="form-control form-group" placeholder="State"></p>
				<p><input type="text" class="form-control form-group" placeholder="Country"></p>
				<p class="text-center"><button type="button" class="btn btn-warning">Save Address</button></p>	
			</div>
			<div class="col-md-6 hidden" >
				<h3 class="box-header text-center">Map</h3>
				<div id="map"></div>
				
				<script src="js/googleMaps.js"></script>
				
				
				
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
		<script src="js/host.js"></script>
		<script src="js/scrollPropertyDetails.js"></script>
		
		<!--For date picker-->
		<script src="js/jquery-ui.js"></script>
		<script src="js/header.js"></script>
		
		<!--For multi date picker-->
		<script src="js/jquery-ui.multidatespicker.js"></script>
		
		
		
	<!-- Requirements for map -->	
	<script src="raphael.js"></script>
	<script src="color.jquery.js"></script>
	<script src="jquery.usmap.js"></script>
	<script src="js/missionariesServedMapHosts.js"></script>
		
	<!--For sticky left-->		
	<script src='js/reqForStickyLeft.js'></script>
	<script  src="js/stickyLeft.js"></script>	
		

    </body>
</html>