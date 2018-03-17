<?php
session_start();
require_once  'db.php';

$propertyId = $_GET['propertyId'];

$sqlPropertyDetail = "SELECT * FROM property WHERE property_id='$propertyId'";

$resultPropertyDetail = $mysqli->query($sqlPropertyDetail);

$property = $resultPropertyDetail->fetch_assoc();
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
        <link href="css/propertyDetail.css" rel="stylesheet">
		<link href="css/header.css" rel="stylesheet">

        <!-- CSS Animations -->
        <link href="css/animate.css" rel="stylesheet">

        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.png">

        <!-- Mordernizr -->
        <script src="js/modernizr-2.6.2.min.js"></script>
		
		<!--For date Picker-->
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

		<!-- flaticon -->
		<link rel="stylesheet" type="text/css" href="font/flaticon.css">
		
		<!-- Style for sticky left -->	
	    <link rel="stylesheet" href="css/style.css">
	
    </head>

    <body data-spy="scroll" data-target="#navigation" data-offset="120" onload="jumbotronImgLoad()">
		
		
		
		
		
	<?php include 'header.php';?>	
		
	<div class="jumbotron main-jumbotron img-responsive" >
	  <span class="hidden" id="mainImg"><?php echo $property['mian_img']; ?></span>
      <button type="button" class="btn btn-default bottom-align-text" onclick="openModal();currentSlide(1)" >More Photos</button>
	  
    </div>
	
	
	<?php 
		$sqlModal = "SELECT * FROM property_images WHERE property_id = '$propertyId'";
		$img1 = "img/no-image.jpg";
		$img2 = "img/no-image.jpg";
		$img3 = "img/no-image.jpg";
		$img4 = "img/no-image.jpg";
		
		$resultModal = $mysqli->query($sqlModal);
		$count = 1;
		while($modalImg = $resultModal->fetch_assoc()){
			if($count == 1){
				$img1 = $modalImg['img_path'];
			}
			if($count == 2){
				$img2 = $modalImg['img_path'];
			}
			if($count == 3){
				$img3 = $modalImg['img_path'];
			}
			if($count == 4){
				$img4 = $modalImg['img_path'];
			}
			$count++;	
		}
		
		
		
	
	?>
	
	
<div id="myModal" class="modal" onclick="closeModal()">


  <div class="text text-center close_new" onclick="closeModal()">&times;</div>
  
  <div class="modal-content" onclick="event.stopPropagation();">

    <div class="mySlides">
      <div class="numbertext">1 / 4</div>
      <img src="<?php echo $img1; ?>" style="width: 100%;  height:25em;">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 4</div>
      <img src="<?php echo $img2; ?>" style="width: 100%;  height:25em;">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 4</div>
      <img src="<?php echo $img3; ?>" style="width: 100%;  height:25em;">
    </div>
    
    <div class="mySlides">
      <div class="numbertext">4 / 4</div>
      <img src="<?php echo $img4; ?>" style="width: 100%;  height:25em;">
    </div>
    
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>


    <div class="column">
      <img class="demo cursor" src="<?php echo $img1; ?>" style="width:100%" onclick="currentSlide(1)" alt="Nature and sunrise">
    </div>
    <div class="column">
      <img class="demo cursor" src="<?php echo $img2; ?>" style="width:100%" onclick="currentSlide(2)" alt="Trolltunga, Norway">
    </div>
    <div class="column">
      <img class="demo cursor" src="<?php echo $img3; ?>" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
    </div>
    <div class="column">
      <img class="demo cursor" src="<?php echo $img4; ?>" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
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
			<img class="image thumbnail hidden-xs" id="familyPhoto" src="<?php echo $property['family_pic']; ?>" >
			<div class="caption hidden-xs" >
			  <p id="familyPhotoCaption"><?php echo $property['family_name']; ?></p>				  
			</div>
		</div>
	</div>
	</div>
	<div class="container">
	<div class="row">
		<div class="col-md-12">
			<p id="welcomeMessage" ><?php echo $property['family_message']; ?></p>
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
						
						<?php 
							$sqlFeatures = "SELECT * FROM features WHERE features.property_id = '$propertyId'";
							
							$resultFeatures = $mysqli->query($sqlFeatures);

							$Features = $resultFeatures->fetch_assoc();
						?>
						
						
						
						<div class="panel panel-warning">
						  <div class="panel-heading text-center ">Type of Property/Area</div>
						  <div class="panel-body">
						  <strong>Type:</strong>
							<div class="row">
								<?php if($Features['Shared_Place'] == '1'){ ?>
									<div class="col-md-6"><i class="flaticon-home"></i><span data-animate="fadeInDown" > Shared Place</span></div>
								<?php } ?>
								
								<?php if($Features['Vacant_House'] == '1'){ ?>
									<div class="col-md-6"><i class="flaticon-home-1"></i><span data-animate="fadeInDown" >Vacant House</span></div>
								<?php } ?>
								
								<?php if($Features['Guest_House'] == '1'){ ?>
									<div class="col-md-6"><i class="flaticon-guest-house"></i><span data-animate="fadeInDown" >Guest House</span></div>
								<?php } ?>
								
								<?php if($Features['Apartment'] == '1'){ ?>
									<div class="col-md-6"><i class="flaticon-apartment"></i><span data-animate="fadeInDown" >Apartment</span></div>
								<?php } ?>
							</div>
						  <strong>Area:</strong>		
							<div class="row">
								<?php if($Features['City'] == '1'){ ?>
									<div class="col-md-6"><i class="flaticon-cityscape"></i><span data-animate="fadeInDown" >City</span></div>
								<?php } ?>
								
								<?php if($Features['Suburb'] == '1'){ ?>
									<div class="col-md-6"><i class="flaticon-suburb"></i><span data-animate="fadeInDown" >Suburb</span></div>
								<?php } ?>
								
								<?php if($Features['Country'] == '1'){ ?>
									<div class="col-md-6"><i class="flaticon-rural-house"></i><span data-animate="fadeInDown" >Country/Rural</span></div>
								<?php } ?>
							</div>
						  </div>
						</div>
						
						
						<div class="panel panel-warning">
						  <div class="panel-heading text-center">Occupancy</div>
						  <div class="panel-body">
							<strong>Bed:</strong>
							<div class="row">								
								
								<div class="col-md-6"><i class="flaticon-twin-beds"></i><span data-animate="fadeInDown" ><?php echo $Features['Twin_count'] ?> Twin</span> </div>
																							
								<div class="col-md-6"><i class="flaticon-bed"></i><span data-animate="fadeInDown" ><?php echo $Features['FullCount'] ?> Full</span></div>
																							
								<div class="col-md-6"><i class="flaticon-queen-size-bed"></i><span data-animate="fadeInDown" ><?php echo $Features['Queen_count'] ?> Queen</span> </div>
																							
								<div class="col-md-6"><i class="flaticon-king-size-bedroom"></i><span data-animate="fadeInDown" ><?php echo $Features['King_count'] ?> King</span> </div>
							</div>
							<br>
							<strong>Other beds:</strong>
							<div class="row">
								<?php if($Features['Air_mattress'] == '1'){ ?>
									<div class="col-md-6"><i class="flaticon-air-mattress"></i><span data-animate="fadeInDown" >Air mattress</span></div>
								<?php } ?>
								
								<?php if($Features['Futon'] == '1'){ ?>
									<div class="col-md-6"><i class="flaticon-bed-1"></i><span data-animate="fadeInDown" >Futon</span></div>
								<?php } ?>
								
								<?php if($Features['Hide_a_bed'] == '1'){ ?>
									<div class="col-md-6"><i class="flaticon-double-bed"></i><span data-animate="fadeInDown" >Hide-a-bed</span></div>
								<?php } ?>
								
								<?php if($Features['Murphy_bed'] == '1'){ ?>
									<div class="col-md-6"><i class="flaticon-bed-2"></i><span data-animate="fadeInDown" >Murphy bed</span></div>
								<?php } ?>
								
								<?php if($Features['Couch'] == '1'){ ?>
									<div class="col-md-6"><i class="flaticon-long-sofa"></i><span data-animate="fadeInDown" >Couch</span></div>
								<?php } ?>
							</div>													
						  </div>
						</div>
						
						
						<div class="panel panel-warning">
						  <div class="panel-heading text-center">Rest and Relaxation</div>
						  <div class="panel-body">
							<strong>At Home:</strong>
							<div class="row">
								<?php if($Features['Cable_TV'] == '1'){ ?>
									<div class="col-md-6"><i class="flaticon-cable-tv-sign-with-monitor"></i><span data-animate="fadeInDown" >Cable TV</span></div>
								<?php } ?>
								
								<?php if($Features['Yard'] == '1'){ ?>
									<div class="col-md-6"><i class="flaticon-fence"></i><span data-animate="fadeInDown" >Yard</span></div>
								<?php } ?>
								
								<?php if($Features['Swimming_Pool'] == '1'){ ?>
									<div class="col-md-6"><i class="flaticon-pool"></i><span data-animate="fadeInDown" >Swimming Pool</span></div>								
								<?php } ?>
								
								<?php if($Features['Swimming_Pool'] == '1'){ ?>
									<div class="col-md-6"><i class="flaticon-study"></i><span data-animate="fadeInDown" >Library/Reading room</span></div>
								<?php } ?>
								
								<?php if($Features['Video_games'] == '1'){ ?>
									<div class="col-md-6"><i class="flaticon-gamepad"></i><span data-animate="fadeInDown" >Video games</span></div>
								<?php } ?>
								
								<?php if($Features['TrailAtHome'] == '1'){ ?>
									<div class="col-md-6"><i class="flaticon-river-trail"></i><span data-animate="fadeInDown" >Trail</span></div>
								<?php } ?>
								
								<?php if($Features['Picnic_area'] == '1'){ ?>
									<div class="col-md-6"><i class="flaticon-picnic-table"></i><span data-animate="fadeInDown" >Picnic area</span></div>
								<?php } ?>
								
								<?php if($Features['Basketball'] == '1'){ ?>
									<div class="col-md-6"><i class="flaticon-basketball-player-scoring"></i><span data-animate="fadeInDown" >Basketball</span></div>
								<?php } ?>
								
								<?php if($Features['Pool_table'] == '1'){ ?>
									<div class="col-md-6"><i class="flaticon-billiards-table"></i><span data-animate="fadeInDown" >Pool table</span></div>
								<?php } ?>
								
								<?php if($Features['SoccerExterior'] == '1'){ ?>
									<div class="col-md-6"><i class="flaticon-football"></i><span data-animate="fadeInDown" >Soccer</span></div>
								<?php } ?>
								
								<?php if($Features['Porch'] == '1'){ ?>
									<div class="col-md-6"><i class="flaticon-flowers-pot-of-yard"></i><span data-animate="fadeInDown" >Porch</span></div>
								<?php } ?>
								
								<?php if($Features['Board_games'] == '1'){ ?>
									<div class="col-md-6"><i class="flaticon-economy-games"></i><span data-animate="fadeInDown" >Card/Board games</span></div>
								<?php } ?>
								
								<?php if($Features['Sauna'] == '1'){ ?>
									<div class="col-md-6"><i class="flaticon-person-silhouette-in-sauna"></i><span data-animate="fadeInDown" >Sauna</span></div>
								<?php } ?>
								
								<?php if($Features['Hottub'] == '1'){ ?>
									<div class="col-md-6"><i class="flaticon-sauna-bucket"></i><span data-animate="fadeInDown" >Hottub</span></div>								
								<?php } ?>
								
								<?php if($Features['Piano'] == '1'){ ?>
									<div class="col-md-6"><i class="flaticon-piano-top-view"></i><span data-animate="fadeInDown" >Piano</span></div>
								<?php } ?>
								
								<?php if($Features['Guitar'] == '1'){ ?>
									<div class="col-md-6"><i class="flaticon-guitar"></i><span data-animate="fadeInDown" >Guitar</span></div>
								<?php } ?>
								
								<?php if($Features['Gym'] == '1'){ ?>
									<div class="col-md-6"><i class="flaticon-exercise"></i><span data-animate="fadeInDown" >Gym</span></div>
								<?php } ?>
								
								<?php if($Features['Patio'] == '1'){ ?>
									<div class="col-md-6"><i class="flaticon-patio"></i><span data-animate="fadeInDown" >Patio</span></div>
								<?php } ?>
							</div>
							<br>
							<strong>In the area:</strong>
							<div class="row"><!--Expalin this by reducing the screen size then change to 6col-->	
								<?php if($Features['Mall'] == '1'){ ?>
									<div class="col-md-6"><i class="flaticon-mall"></i><span data-animate="fadeInDown" >Mall</span></div>
								<?php } ?>
								
								<?php if($Features['Local_events'] == '1'){ ?>
									<div class="col-md-6"><i class="flaticon-man-in-a-party-dancing-with-people"></i><span data-animate="fadeInDown" >Local events</span></div>
								<?php } ?>
								
								<?php if($Features['Park'] == '1'){ ?>
									<div class="col-md-6"><i class="flaticon-park"></i><span data-animate="fadeInDown" >Park</span></div>								
								<?php } ?>
								
								<?php if($Features['TrailInArea'] == '1'){ ?>
									<div class="col-md-6"><i class="flaticon-mountain-running-silhouette"></i><span data-animate="fadeInDown" >Trail</span></div>
								<?php } ?>
								
								<?php if($Features['Bike_share'] == '1'){ ?>
									<div class="col-md-6"><i class="flaticon-bicycle"></i><span data-animate="fadeInDown" >Bike-share</span></div>
								<?php } ?>
								
								<?php if($Features['Skiing'] == '1'){ ?>
									<div class="col-md-6"><i class="flaticon-skiing-man"></i><span data-animate="fadeInDown" >Skiing</span></div>
								<?php } ?>
								
								<?php if($Features['Beach'] == '1'){ ?>
									<div class="col-md-6"><i class="flaticon-sun-umbrella"></i><span data-animate="fadeInDown" >Beach</span></div>
								<?php } ?>
								
								<?php if($Features['Lake'] == '1'){ ?>
									<div class="col-md-6"><i class="flaticon-reed"></i><span data-animate="fadeInDown" >Lake</span></div>
								<?php } ?>
								
								<?php if($Features['Fishing'] == '1'){ ?>
									<div class="col-md-6"><i class="flaticon-fishing-rod-and-fisher"></i><span data-animate="fadeInDown" >Fishing</span></div>
								<?php } ?>
								
								<?php if($Features['Lra'] == '1'){ ?>
									<div class="col-md-6"><i class="flaticon-surf"></i><span data-animate="fadeInDown" >Local recreational activities</span></div>
								<?php } ?>
							</div>													
						  </div>
						</div>
						
						
						<div class="panel panel-warning">
						  <div class="panel-heading text-center ">Interior</div>
						  <div class="panel-body">
							<div class="row">
								<?php if($Features['Air_condition'] == '1'){ ?>
									<div class="col-md-6"><i class="flaticon-air-conditioner"></i><span data-animate="fadeInDown" >Air condition</span></div>
								<?php } ?>
								
								<?php if($Features['Bathroom_Basics'] == '1'){ ?>
									<div class="col-md-6"><i class="flaticon-hanger-with-a-towel"></i><span data-animate="fadeInDown" >Bathroom Basics</span></div>
								<?php } ?>
								
								<?php if($Features['Heating'] == '1'){ ?>
									<div class="col-md-6"><i class="flaticon-heating-black-tool"></i><span data-animate="fadeInDown" >Heating</span></div>
								<?php } ?>
								
								<?php if($Features['Kitchen'] == '1'){ ?>
									<div class="col-md-6"><i class="flaticon-chef"></i><span data-animate="fadeInDown" >Kitchen</span></div>							
								<?php } ?>
								
								<?php if($Features['Bathrooms'] == '1'){ ?>
									<div class="col-md-6"><i class="flaticon-bathtub"></i><span data-animate="fadeInDown" >Bathrooms</span></div>
								<?php } ?>
								
								<?php if($Features['Wifi'] == '1'){ ?>
									<div class="col-md-6"><i class="flaticon-wifi-connection-signal-symbol"></i><span data-animate="fadeInDown" >Wifi</span></div>
								<?php } ?>
								
								<?php if($Features['Computer'] == '1'){ ?>
									<div class="col-md-6"><i class="flaticon-monitor"></i><span data-animate="fadeInDown" >Computer</span></div>
								<?php } ?>
							</div>
						  </div>
						</div>
						
						
						<div class="panel panel-warning">
						  <div class="panel-heading text-center ">Exterior</div>
						  <div class="panel-body">
							<div class="row">
								<?php if($Features['Lawn'] == '1'){ ?>
									<div class="col-md-6"><i class="flaticon-lawn-mower"></i><span data-animate="fadeInDown" >Lawn</span></div>
								<?php } ?>
								
								<?php if($Features['Fire_pit'] == '1'){ ?>
									<div class="col-md-6"><i class="flaticon-fire"></i><span data-animate="fadeInDown" >Fire-pit</span></div>
								<?php } ?>
								
								<?php if($Features['Garden'] == '1'){ ?>
									<div class="col-md-6"><i class="flaticon-vegetables"></i><span data-animate="fadeInDown" >Garden</span></div>
								<?php } ?>
								
								<?php if($Features['Barbeque'] == '1'){ ?>
									<div class="col-md-6"><i class="flaticon-barbecue"></i><span data-animate="fadeInDown" >Barbeque</span></div>							
								<?php } ?>
								
								<?php if($Features['Lawn_games'] == '1'){ ?>
									<div class="col-md-6"><i class="flaticon-sack-race"></i><span data-animate="fadeInDown" >Lawn games</span></div>
								<?php } ?>
								
								<?php if($Features['Basketball_court'] == '1'){ ?>
									<div class="col-md-6"><i class="flaticon-basketball-court"></i><span data-animate="fadeInDown" >Basketball court</span></div>
								<?php } ?>
								
								<?php if($Features['SoccerExterior'] == '1'){ ?>
									<div class="col-md-6"><i class="flaticon-soccer-ball-in-front-of-the-arch"></i><span data-animate="fadeInDown" >Soccer</span></div>
								<?php } ?>
								
								<?php if($Features['volleyball_area'] == '1'){ ?>
									<div class="col-md-6"><i class="flaticon-volleyball-player"></i><span data-animate="fadeInDown" >volleyball area</span></div>
								<?php } ?>
							</div>
						  </div>
						</div>
						
						
						<div class="panel panel-warning">
						  <div class="panel-heading text-center ">Appliances</div>
						  <div class="panel-body">
							<div class="row">
								<?php if($Features['Washer_and_Dryer'] == '1'){ ?>
								<div class="col-md-6"><i class="flaticon-washing-machine"></i><span data-animate="fadeInDown" >Washer and Dryer</span></div>
								<?php } ?>
								
								<?php if($Features['Oven'] == '1'){ ?>
								<div class="col-md-6"><i class="flaticon-microwave-oven"></i><span data-animate="fadeInDown" >Oven</span></div>
								<?php } ?>
								
								<?php if($Features['Stove'] == '1'){ ?>
								<div class="col-md-6"><i class="flaticon-stove"></i><span data-animate="fadeInDown" >Stove</span></div>
								<?php } ?>
								
								<?php if($Features['Iron'] == '1'){ ?>
								<div class="col-md-6"><i class="flaticon-iron"></i><span data-animate="fadeInDown" >Iron</span></div>							
								<?php } ?>
								
								<?php if($Features['Ironing_board'] == '1'){ ?>
								<div class="col-md-6"><i class="flaticon-ironing-board"></i><span data-animate="fadeInDown" >Ironing board</span></div>
								<?php } ?>
								
								<?php if($Features['Toaster'] == '1'){ ?>
								<div class="col-md-6"><i class="flaticon-toast"></i><span data-animate="fadeInDown" >Toaster</span></div>
								<?php } ?>
								
								<?php if($Features['Hair_dryer'] == '1'){ ?>
								<div class="col-md-6"><i class="flaticon-hair-dryer-on"></i><span data-animate="fadeInDown" >Hair dryer</span></div>
								<?php } ?>
								
								<?php if($Features['Microwave'] == '1'){ ?>
								<div class="col-md-6"><i class="flaticon-microwaves"></i><span data-animate="fadeInDown" >Microwave</span></div>
								<?php } ?>
								
								<?php if($Features['Cooking_Basics'] == '1'){ ?>
								<div class="col-md-6"><i class="flaticon-hot-pot"></i><span data-animate="fadeInDown" >Cooking Basics (pots, pans etc)</span></div>
								<?php } ?>
								
								<?php if($Features['Baking_basics'] == '1'){ ?>
								<div class="col-md-6"><i class="flaticon-cupcake-dessert"></i><span data-animate="fadeInDown" >Baking basics</span></div>
								<?php } ?>
								
								<?php if($Features['Coffee_maker'] == '1'){ ?>
								<div class="col-md-6"><i class="flaticon-coffee-maker"></i><span data-animate="fadeInDown" >Coffee maker</span></div>
								<?php } ?>
								
								<?php if($Features['Coffee_grinder'] == '1'){ ?>
								<div class="col-md-6"><i class="flaticon-coffee-grinder"></i><span data-animate="fadeInDown" >Coffee grinder</span></div>
								<?php } ?>
								
								<?php if($Features['blender'] == '1'){ ?>
								<div class="col-md-6"><i class="flaticon-blender"></i><span data-animate="fadeInDown" >blender</span></div>
								<?php } ?>
							</div>
						  </div>
						</div>
						
						
						<div class="panel panel-warning">
						  <div class="panel-heading text-center ">Children Friendly</div>
						  <div class="panel-body">
							<div class="row">
								<?php if($Features['Crib'] == '1'){ ?>
								<div class="col-md-6"><i class="flaticon-baby-crib-bedroom-furniture"></i><span data-animate="fadeInDown" >Crib</span></div>
								<?php } ?>
								
								<?php if($Features['Swing'] == '1'){ ?>
								<div class="col-md-6"><i class="flaticon-swing"></i><span data-animate="fadeInDown" >Swing</span></div>
								<?php } ?>
								
								<?php if($Features['Slide'] == '1'){ ?>
								<div class="col-md-6"><i class="flaticon-slide"></i><span data-animate="fadeInDown" >Slide</span></div>
								<?php } ?>
								
								<?php if($Features['Baby_Monitor'] == '1'){ ?>
								<div class="col-md-6"><i class="flaticon-baby-monitor"></i><span data-animate="fadeInDown" >Baby Monitor</span></div>							
								<?php } ?>
								
								<?php if($Features['High_chair'] == '1'){ ?>
								<div class="col-md-6"><i class="flaticon-high-chair"></i><span data-animate="fadeInDown" >High chair</span></div>
								<?php } ?>
								
								<?php if($Features['Sand_box'] == '1'){ ?>
								<div class="col-md-6"><i class="flaticon-sand-box"></i><span data-animate="fadeInDown" >Sand box</span></div>
								<?php } ?>
								
								<?php if($Features['Stair_gates'] == '1'){ ?>
								<div class="col-md-6"><i class="flaticon-man-climbing-stairs"></i><span data-animate="fadeInDown" >Stair gates</span></div>
								<?php } ?>
								
								<?php if($Features['Children_silverware'] == '1'){ ?>
								<div class="col-md-6"><i class="flaticon-cutlery"></i><span data-animate="fadeInDown" >Children silverware</span></div>
								<?php } ?>
								
								<?php if($Features['Window_guards'] == '1'){ ?>
								<div class="col-md-6"><i class="flaticon-stained-glass-window"></i><span data-animate="fadeInDown" >Window guards</span></div>
								<?php } ?>
								
								<?php if($Features['Window_guards'] == '1'){ ?>
								<div class="col-md-6"><i class="flaticon-socket"></i><span data-animate="fadeInDown" >Outlet guards</span></div>
								<?php } ?>
								
								<?php if($Features['Child_proof'] == '1'){ ?>
								<div class="col-md-6"><i class="flaticon-glass-warning-sign-for-shopping-packages"></i><span data-animate="fadeInDown" >Child-proof (hardly any breakables)</span></div>
								<?php } ?>
								
								<?php if($Features['Books'] == '1'){ ?>
								<div class="col-md-6"><i class="flaticon-books-stack-of-three"></i><span data-animate="fadeInDown" >Books</span></div>
								<?php } ?>
								
								<?php if($Features['Toys'] == '1'){ ?>
								<div class="col-md-6"><i class="flaticon-mobile"></i><span data-animate="fadeInDown" >Toys</span></div>
								<?php } ?>
							</div>
						  </div>
						</div>
						
						<div class="panel panel-warning">
						  <div class="panel-heading text-center ">Accessibility</div>
						  <div class="panel-body">
							<div class="row">
								<?php if($Features['Wheelchair'] == '1'){ ?>
								<div class="col-md-6"><i class="flaticon-wheelchair"></i><span data-animate="fadeInDown" >Wheelchair</span></div>
								<?php } ?>
								
								<?php if($Features['Elevator'] == '1'){ ?>
								<div class="col-md-6"><i class="flaticon-elevator"></i><span data-animate="fadeInDown" >Elevator</span> </div>
								<?php } ?>
								
								<?php if($Features['Stairs'] == '1'){ ?>
								<div class="col-md-6"><i class="flaticon-ascending-stairs-signal"></i><span data-animate="fadeInDown" >Stairs</span></div>
								<?php } ?>
								
								<?php if($Features['Handicap_bathrooms'] == '1'){ ?>
								<div class="col-md-6"><i class="flaticon-bathtub"></i><span data-animate="fadeInDown" >Handicap accessible bathrooms</span></div>
								<?php } ?>
								
								</div>
								<br>
								<strong>Parking:</strong>
								<div class="row">						
								<?php if($Features['Street_parking'] == '1'){ ?>	
								<div class="col-md-6"><i class="flaticon-parking"></i><span data-animate="fadeInDown" >Street parking</span></div>
								<?php } ?>
								
								<?php if($Features['Carport'] == '1'){ ?>
								<div class="col-md-6"><i class="flaticon-car-garage"></i><span data-animate="fadeInDown" >Carport</span></div>
								<?php } ?>
								
								<?php if($Features['Garage'] == '1'){ ?>
								<div class="col-md-6"><i class="flaticon-garage"></i><span data-animate="fadeInDown" >Garage</span></div>
								<?php } ?>
								
								<?php if($Features['Driveway'] == '1'){ ?>
								<div class="col-md-6"><i class="flaticon-parking-1"></i><span data-animate="fadeInDown" >Driveway</span></div>
								<?php } ?>
							</div>
						  </div>
						</div>
						
						<div class="panel panel-warning">
						  <div class="panel-heading text-center ">Security and Safety</div>
						  <div class="panel-body">
							<div class="row">
								<?php if($Features['Smoke_detector'] == '1'){ ?>
								<div class="col-md-6"><i class="flaticon-smoke-detector"></i><span data-animate="fadeInDown" >Smoke detector</span></div>
								<?php } ?>
								
								<?php if($Features['Fire_alarm'] == '1'){ ?>
								<div class="col-md-6"><i class="flaticon-fire-alarm"></i><span data-animate="fadeInDown" >Fire alarm</span></div>
								<?php } ?>
								
								<?php if($Features['Carbon_monoxide_detector'] == '1'){ ?>
								<div class="col-md-6"><i class="flaticon-smoke"></i><span data-animate="fadeInDown" >Carbon monoxide detector</span></div>
								<?php } ?>
								
								<?php if($Features['Private_entrance'] == '1'){ ?>
								<div class="col-md-6"><i class="flaticon-opened-filled-door"></i><span data-animate="fadeInDown" >Private entrance</span></div>							
								<?php } ?>
								
								<?php if($Features['Shared_entrance'] == '1'){ ?>
								<div class="col-md-6"><i class="flaticon-entrance"></i><span data-animate="fadeInDown" >Shared entrance</span></div>
								<?php } ?>
								
								<?php if($Features['Buzzer'] == '1'){ ?>
								<div class="col-md-6"><i class="flaticon-joker-buzzer"></i><span data-animate="fadeInDown" >Buzzer/Wireless Intercom</span></div>								
								<?php } ?>
							</div>
						  </div>
						</div>
						
						<div class="panel panel-warning">
						  <div class="panel-heading text-center ">Unique/Other Qualities</div>
						  <div class="panel-body">
							<div class="row">
								<?php if($Features['have_pets'] == '1'){ ?>
								<div class="col-md-6"><i class="flaticon-pet"></i><span data-animate="fadeInDown" >We have pets</span></div>
								<?php } ?>
								
								<?php if($Features['Pets_Allowed'] == '1'){ ?>
								<div class="col-md-6"><i class="flaticon-pet"></i><span data-animate="fadeInDown" >Pets Allowed</span></div>
								<?php } ?>	
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
							<p class="text-center" id="rate" style="margin-top:-1em;">$<?php echo $property['rate'] ;?> Per Night</p>
							<div class="row">
								<div class=" col-sm-12 col-xs-12">
									<p>Check-in</p>
									<input id="checkIn" type="text" placeholder="Check-in" class="form-control booking dateclass">
									<!--<p><input id="checkIn" onchange="setCheckOutBooking()" type="date" style="border-radius:1em; " class="dateclass" onClick="$(this).removeClass('placeholderclass')" placeholder=""></p>-->
									<!--<input type="date" placeholder="Check-in" onClick="$(this).removeClass('placeholderclass')" class="form-control dateclass placeholderclass" id="check-in">-->
								</div>
							</div>	
							<div class="row">	
								<div class=" col-sm-12 col-xs-12">
									<p>Check-out</p>
									<input id="checkOut" type="text" placeholder="Check-out" class="form-control booking dateclass">
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
								<p><a href="#houseRules">Check-in Check-out timings?</a></p>
								</div>
							</div>
							
							<div class="row" style="margin-bottom:1em;">
								<div class="dropdown">
									<button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown"><span id="missionaryCount">Number of Missionaries</span>
									<span class="caret"></span></button>
									<ul class="dropdown-menu" role="menu" aria-labelledby="menu1" style="font-size:1.2em;">

									<li role="presentation" onclick="event.stopPropagation();" ><span role="menuitem" class="menuItem" >Adults <span style="font-size:.5em;">Max <span id="adultMax"><?php echo $property['limit_adult'] ;?></span></span></span><span class="controls" ><i class="fa fa-minus-circle" aria-hidden="true" onclick="decrement('adults');"></i> <span id="adults">0</span> <i class="fa fa-plus-circle" aria-hidden="true" onclick="increment('adults');"></i></span></li>
									<li role="presentation" class="divider"></li>
									<li role="presentation" onclick="event.stopPropagation();" ><span role="menuitem" class="menuItem" >Childrens <span style="font-size:.5em;">Max <span id="childMax"><?php echo $property['limit_child'] ;?></span></span></span><span class="controls"><i class="fa fa-minus-circle" aria-hidden="true" onclick="decrement('childrens');"></i> <span id="childrens">0</span> <i class="fa fa-plus-circle" aria-hidden="true" onclick="increment('childrens');"></i></span></li>
									<li role="presentation" class="divider"></li>
									<li role="presentation" onclick="event.stopPropagation();" ><span role="menuitem" class="menuItem" >Infants <span style="font-size:.5em;">Max <span id="infantMax"><?php echo $property['limit_infants'] ;?></span></span></span><span class="controls"><i class="fa fa-minus-circle" aria-hidden="true" onclick="decrement('infants');"></i> <span id="infants">0</span> <i class="fa fa-plus-circle" aria-hidden="true" onclick="increment('infants');"></i></span></li>
									<li role="presentation" class="divider"></li>
									<li role="presentation" class="text-right"><span role="menuitem" id="close" >Close</span></li>

									</ul>
								</div>								
							</div>
							
							<div class="row">
								<div class="col-xs-6">
									<p>Cleaning charges</p>
									<p>Accomodation taxes</p>
									<p>Service Charges</p>
									<p>&nbsp;</p>
									<p>Total</p>
								</div>
								<div class="col-xs-6">
									<p>$ <?php echo $property['cleaning_charges'] ;?></p>
									<p>$ 10</p>								
									<p>$ 10</p>
									<hr>	
									<p>$ 70</p>
								</div>
							</div>	
							
							<div class="row">
								<div class="col-md-12">
								<p class="text-center" ><span class="btn btn-primary btn-block">Request</span></p>
								
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
				<div class="thumbnail" >
				<img class="image thumbnail" id="familyPhotoAbout" src="<?php echo $property['family_pic']; ?>" >
				<div class="caption">
				  <p class="text text-center" style="font-family:Algerian; "><?php echo $property['family_name']; ?></p>
				</div>
				</div>
				<p class="text text-center"><?php  echo $property['family_desc']; ?>
				</p>
			</div>
			
			<div class="col-md-6">
				<h3 class="box-header" id="houseRules">House rules</h3>
				<div class="list-group">
				  <a  class="list-group-item"><i class="fa fa-arrow-right" aria-hidden="true"></i> Check-in and check-out time is between 11:00 am to 2:00 pm</a>
				  <a  class="list-group-item"><i class="fa fa-arrow-right" aria-hidden="true"></i> Check-in is anytime after 11:00 am</a>
				  <a  class="list-group-item"><i class="fa fa-arrow-right" aria-hidden="true"></i> Check-out is before 2:00 pm</a>
				</div>
			</div>
		</div>	
	</div>


	<div class="container" id="missionary_served_map">			
			<div class="row box">
			<div class="col-md-12">
				<h3 class="box-header text-center">Missionaries Served</h3>
				<div class="col-xs-12">
					<div class="center-block" id="map2" ></div>
				</div>
			<div id="alert" class="text text-center"><p>Click on the highlighted states to get information about the missonaries served</p></div>
			</div>
			</div>
			
	</div>
	
	
	<div class="container">
		<div class="row box">
			<div class="col-md-12">
				<h3 class="box-header text-center">Questions answered by the host</h3>
				<div class="box">
					<p class="question"><span class="questionSymbol">Q.</span>Is the check-in check-out flexible?</p>
					<p class="answer"><span class="answerSymbol">>></span>Yes let me know a day before.</p>
					
					<p class="question"><span class="questionSymbol">Q.</span>Is the check-in check-out flexible?</p>
					<p class="answer">Not yet answered by the owner</p>
				</div>
			</div>
		</div>
	</div>
	
	<div class="container">
		<div class="row box">
			<div class="col-md-12">
				<h3 class="box-header text-center">Post a question for the host</h3>
				<form>
										
					<div class="form-group">
						<input type="text" placeholder="Your question goes here" style="width:100%;" class="form-control">
					</div>
					<div class="form-group text-center" >
						<button type="submit" class="btn btn-success"><i class="fa fa-question" aria-hidden="true"></i> Post my question</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	
	<div class="container">
		<div class="row box">
			<div class="col-md-12">
				<h3 class="box-header text-center">Add a review</h3>
				<form>
					<div>
					<span class="glyphicon glyphicon-star-empty" style=" font-size:1.3em;" id="1" onmouseover="fillStarsTill(1)" ></span>
					<span class="glyphicon glyphicon-star-empty" style=" font-size:1.3em;" id="2" onmouseover="fillStarsTill(2)" ></span>
					<span class="glyphicon glyphicon-star-empty" style=" font-size:1.3em;" id="3" onmouseover="fillStarsTill(3)" ></span>
					<span class="glyphicon glyphicon-star-empty" style=" font-size:1.3em;" id="4" onmouseover="fillStarsTill(4)" ></span>
					<span class="glyphicon glyphicon-star-empty" style=" font-size:1.3em;" id="5" onmouseover="fillStarsTill(5)" ></span>
					<span  > I will use class="hidden"</span>
					<input type="number" value="" id="starRating">
					</div>
					
					<div class="form-group">
						<input type="text" placeholder="Your review goes here" style="width:100%;" class="form-control">
					</div>
					<div class="form-group text-center" >
						<button type="submit" class="btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save review</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	
	<div class="container" id="reviews">
		<div class="row box">
			<div class="col-md-12">
				<h3 class="box-header text-center">Reviews</h3>
					<blockquote>
						<div>
							<img src="img/person-3.jpg" class="img-circle profile-pic">					
							<span class="glyphicon glyphicon-star" style="color:yellow; font-size:1.3em;"></span>
							<span class="glyphicon glyphicon-star" style="color:yellow; font-size:1.3em;"></span>
							<span class="glyphicon glyphicon-star" style="color:yellow; font-size:1.3em;"></span>
							<span class="glyphicon glyphicon-star" style="color:yellow; font-size:1.3em;"></span>
							<span class="glyphicon glyphicon-star" style="color:yellow; font-size:1.3em;"></span>
							Great place. I enjoyed my stay here.
						</div>
						<footer style="margin-top:1em;">by SAURABH . WANKHADE on 7/14/2017
						<div class="text text-right"><button type="" class="btn btn-primary btn-sm" onclick="openResponseModal()">Respond</button>
							<button type="submit" class="btn btn-primary btn-sm" onclick="openCommentsModal()">Comments (10)</button>
							<span style="color:black;margin-left:2em;">Helpful?</span>
							<button type="submit" class="btn btn-success btn-sm">Yes</button>
							<button type="submit" class="btn btn-danger btn-sm">No</button>
						</div>
						<div class="text text-right">
							25 people found this helpful.
						</div>	
						</footer>					
					</blockquote>
					
					<blockquote>
						<div>
							<img src="img/person-3.jpg" class="img-circle profile-pic">					
							<span class="glyphicon glyphicon-star" style="color:yellow; font-size:1.3em;"></span>
							<span class="glyphicon glyphicon-star" style="color:yellow; font-size:1.3em;"></span>
							<span class="glyphicon glyphicon-star" style="color:yellow; font-size:1.3em;"></span>
							<span class="glyphicon glyphicon-star" style="color:yellow; font-size:1.3em;"></span>
							<span class="glyphicon glyphicon-star" style="color:yellow; font-size:1.3em;"></span>
							Great place. I enjoyed my stay here.
						</div>
						<footer style="margin-top:1em;">by SAURABH . WANKHADE on 7/14/2017
						<div class="text text-right"><button type="" class="btn btn-primary btn-sm" onclick="openResponseModal()">Respond</button>
							<button type="submit" class="btn btn-primary btn-sm" onclick="openCommentsModal()">Comments (5)</button>
							<span style="color:black;margin-left:2em;">Helpful?</span>
							<button type="submit" class="btn btn-success btn-sm">Yes</button>
							<button type="submit" class="btn btn-danger btn-sm">No</button>
						</div>
						<div class="text text-right">
							25 people found this helpful.
						</div>	
						</footer>					
					</blockquote>
					
					<div class="text text-center" onclick="openMoreReviewsModal()" id="showMore"><i class="fa fa-plus-circle" aria-hidden="true"></i> Show more</div>
					
					
				
			</div>
		</div>
	</div>

	<!-- Response Modal -->
 <div id="ResponseModal" class="modal" onclick="closeResponseModal()" >
  <div class="modal-content" onclick="event.stopPropagation();">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" onclick="closeResponseModal()">&times;</button>
        <h4 class="modal-title">Enter your response</h4>
      </div>
      <div class="modal-body">
        <p><input type="text" placeholder="Your response goes here" style="border:none;" class="form-control"></p>
      
	  <div style="overflow: scroll; max-height:15em;">
		  <blockquote>
			Previous response Previous response Previous response Previous response Previous response Previous response Previous response Previous response Previous response 
			<footer>response by xyz on 2/3/2012</footer>
		  </blockquote>
		  <blockquote>
			Previous response
			<footer>response by xyz on 2/3/2012</footer>
		  </blockquote>
		  <blockquote>
			Previous response
			<footer>response by xyz on 2/3/2012</footer>
		  </blockquote>
		  <blockquote>
			Previous response
			<footer>response by xyz on 2/3/2012</footer>
		  </blockquote>
		  <blockquote>
			Previous response
			<footer>response by xyz on 2/3/2012</footer>
		  </blockquote>
		  <blockquote>
			Previous response
			<footer>response by xyz on 2/3/2012</footer>
		  </blockquote>
	  </div>
	  </div>
      <div class="modal-footer">
		<button type="button" class="btn btn-primary" >Save Response</button>
        <button type="button" class="btn btn-default" data-dismiss="modal" onclick="closeResponseModal()">Close</button>
      </div>
  </div>
</div>


<!-- Comment Modal -->
 <div id="CommentModal" class="modal" onclick="closeCommentModal()" >
  <div class="modal-content" onclick="event.stopPropagation();">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" onclick="closeCommentModal()">&times;</button>
        <h4 class="modal-title">Enter your Comment</h4>
      </div>
      <div class="modal-body">
        <p><input type="text" placeholder="Your comment goes here" style="border:none;" class="form-control"></p>
      
	  <div style="overflow: scroll; max-height:15em;">
		  <blockquote>
			Previous comment Previous comment Previous comment Previous comment Previous comment Previous comment Previous comment Previous comment Previous comment 
			<footer>comment by xyz on 2/3/2012</footer>
		  </blockquote>
		  <blockquote>
			Previous comment
			<footer>comment by xyz on 2/3/2012</footer>
		  </blockquote>
		  <blockquote>
			Previous comment
			<footer>comment by xyz on 2/3/2012</footer>
		  </blockquote>
		  <blockquote>
			Previous comment
			<footer>comment by xyz on 2/3/2012</footer>
		  </blockquote>
		  <blockquote>
			Previous comment
			<footer>comment by xyz on 2/3/2012</footer>
		  </blockquote>
		  <blockquote>
			Previous comment
			<footer>comment by xyz on 2/3/2012</footer>
		  </blockquote>
	  </div>
	  </div>
      <div class="modal-footer">
		<button type="button" class="btn btn-primary" >Save Comment</button>
        <button type="button" class="btn btn-default" data-dismiss="modal" onclick="closeCommentModal()">Close</button>
      </div>
  </div>
</div>


<!-- Show more reviews Modal -->
 <div id="MoreReviewModal" class="modal" onclick="closeMoreReviewsModal()" >
  <div class="modal-content" onclick="event.stopPropagation();">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" onclick="closeMoreReviewsModal();">&times;</button>
        
      </div>
      <div class="modal-body" style="overflow: scroll; max-height:20em;">
	  
		<blockquote>
			<div>
				<img src="img/person-3.jpg" class="img-circle profile-pic">					
				<span class="glyphicon glyphicon-star" style="color:red; font-size:1.3em;"></span>
				<span class="glyphicon glyphicon-star" style="color:red; font-size:1.3em;"></span>
				<span class="glyphicon glyphicon-star" style="color:red; font-size:1.3em;"></span>
				<span class="glyphicon glyphicon-star" style="color:red; font-size:1.3em;"></span>
				<span class="glyphicon glyphicon-star" style="color:red; font-size:1.3em;"></span>
				Great place. I enjoyed my stay here.
			</div>
			<footer style="margin-top:1em;">by SAURABH . WANKHADE on 7/14/2017
				<div class="text text-right"><button type="" class="btn btn-primary btn-sm" onclick="openResponseModal()">Respond</button>
					<button type="submit" class="btn btn-primary btn-sm" onclick="openCommentsModal()">Comments (5)</button>
					<span style="color:black;margin-left:2em;">Helpful?</span>
					<button type="submit" class="btn btn-success btn-sm">Yes</button>
					<button type="submit" class="btn btn-danger btn-sm">No</button>
				</div>
				<div class="text text-right">
					25 people found this helpful.
				</div>	
			</footer>					
		</blockquote>
		
		<blockquote>
			<div>
				<img src="img/person-3.jpg" class="img-circle profile-pic">					
				<span class="glyphicon glyphicon-star" style="color:red; font-size:1.3em;"></span>
				<span class="glyphicon glyphicon-star" style="color:red; font-size:1.3em;"></span>
				<span class="glyphicon glyphicon-star" style="color:red; font-size:1.3em;"></span>
				<span class="glyphicon glyphicon-star" style="color:red; font-size:1.3em;"></span>
				<span class="glyphicon glyphicon-star" style="color:red; font-size:1.3em;"></span>
				Great place. I enjoyed my stay here.
			</div>
			<footer style="margin-top:1em;">by SAURABH . WANKHADE on 7/14/2017
				<div class="text text-right"><button type="" class="btn btn-primary btn-sm" onclick="openResponseModal()">Respond</button>
					<button type="submit" class="btn btn-primary btn-sm" onclick="openCommentsModal()">Comments (5)</button>
					<span style="color:black;margin-left:2em;">Helpful?</span>
					<button type="submit" class="btn btn-success btn-sm">Yes</button>
					<button type="submit" class="btn btn-danger btn-sm">No</button>
				</div>
				<div class="text text-right">
					25 people found this helpful.
				</div>	
			</footer>					
		</blockquote>
		
		<blockquote>
			<div>
				<img src="img/person-3.jpg" class="img-circle profile-pic">					
				<span class="glyphicon glyphicon-star" style="color:red; font-size:1.3em;"></span>
				<span class="glyphicon glyphicon-star" style="color:red; font-size:1.3em;"></span>
				<span class="glyphicon glyphicon-star" style="color:red; font-size:1.3em;"></span>
				<span class="glyphicon glyphicon-star" style="color:red; font-size:1.3em;"></span>
				<span class="glyphicon glyphicon-star" style="color:red; font-size:1.3em;"></span>
				Great place. I enjoyed my stay here.
			</div>
			<footer style="margin-top:1em;">by SAURABH . WANKHADE on 7/14/2017
				<div class="text text-right"><button type="" class="btn btn-primary btn-sm" onclick="openResponseModal()">Respond</button>
					<button type="submit" class="btn btn-primary btn-sm" onclick="openCommentsModal()">Comments (5)</button>
					<span style="color:black;margin-left:2em;">Helpful?</span>
					<button type="submit" class="btn btn-success btn-sm">Yes</button>
					<button type="submit" class="btn btn-danger btn-sm">No</button>
				</div>
				<div class="text text-right">
					25 people found this helpful.
				</div>	
			</footer>					
		</blockquote>
        
      </div>
	  <div class="modal-footer">		
        <button type="button" class="btn btn-default" data-dismiss="modal" onclick="closeMoreReviewsModal()">Close</button>
      </div>
  </div>
</div>
	
		
		
		
		
<!-- Missionaries Served Map Modal -->
 <div id="missonariesServedMapModal" class="modal" onclick="closeMissonariesServedMapModal()" >
  <div class="modal-content" onclick="event.stopPropagation();">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" onclick="closeMissonariesServedMapModal();">&times;</button>
        
      </div>
      <div class="modal-body" style="overflow: scroll; max-height:20em;">
	  
		
		<blockquote>
			<div>
				<img src="img/person-3.jpg" class="img-circle profile-pic">
			</div>
			<div>
				<p>Missionary Served USERNAME </p>
			</div>			
			<div>				
				<div class="msmInfo"><span class="question">Missionary is from:</span> <p class="answer">Michigan USA.</p></div>
			</div>
			<div>				
				<div class="msmInfo"><span class="question">Population in missionarie's state (I will use specific state from DB):</span> <p class="answer">200K.</p></div>
			</div>
			<div>				
				<div class="msmInfo"><span class="question">Fun Fact about missionarie's state:</span> <p class="answer">We have sun light till 12 at night.</p></div>
			</div>
			<div>				
				<div class="msmInfo"><span class="question">Unreached people group in missionarie's state:</span> <p class="answer">Some people.</p></div>
			</div>
			<div>				
				<div class="msmInfo"><span class="question">Needs in missionarie's state:</span> <p class="answer">Clean Water.</p></div>
			</div>
			<div>				
				<div class="msmInfo"><span class="question">Languages spoken in missionarie's state:</span> <p class="answer">English, spanish</p></div>
			</div>
			<div>				
				<div class="msmInfo"><span class="question">Prayer request for the missionarie's state:</span> <p class="answer">Some prayer</p></div>
			</div>
			<div>				
				<div class="msmInfo"><span class="question">Additional Note:</span> <p class="answer">We are raising funds for obtaining clean water we have reached 100K our target is 200K visit https://www.google.com for support.</p></div>
			</div>
							
		</blockquote>
		
		
      </div>
	  <div class="modal-footer">		
        <button type="button" class="btn btn-default" data-dismiss="modal" onclick="closeMissonariesServedMapModal()">Close</button>
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
		<script src="js/propertyDetail.js"></script>
		<script src="js/scrollPropertyDetails.js"></script>
		<script src="js/header.js"></script>
		
		
	<!-- Requirements for map -->	
	<script src="raphael.js"></script>
	<script src="color.jquery.js"></script>
	<script src="jquery.usmap.js"></script>
	<script src="js/missionariesServedMapPropertyDetails.js"></script>
	
	<!--For datePicker-->
		 <!--<script src="js/jquery.js"></script>	--><!-- using the jquery from jbase-->
		<script src="js/jquery-ui.js"></script>

	<!--For sticky left-->		
	<script src='js/reqForStickyLeft.js'></script>
	<script  src="js/stickyLeft.js"></script>

    </body>
</html>