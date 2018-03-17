<?php 
session_start();
require_once  'db.php';

$propertyId = $_POST['propertyId'];

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

    <body data-spy="scroll" data-target="#navigation" data-offset="120" onload="jumbotronImgLoad()">
		
		
		<?php include 'header.php';?>
		
	<span id="propID" class="hidden"><?php echo $property['property_id']; ?></span>	
	
	<div class="container">	
		<div class="row">
			<div class="col-md-4 text-center">
				<!-- <form action="propertyDetail.php" method="post"> -->
					<input class="hidden" type="text" name="propertyId" value="<?php echo $property['property_id']; ?>">
					<a href="<?php echo "propertyDetail.php?propertyId=".$property['property_id']; ?>"><button  class="btn btn-warning" >Check how your property profile looks to others</button></a>
				<!-- </form> -->	
			</div>
			<div class="col-md-4 text-center">
				<button type="button" class="btn btn-primary" onclick="openSharableModal()"  ><i class="fa fa-link"></i> Get a sharable link for you property</button>	
			</div>
			<div class="col-md-4 text-center">
				<button type="button" class="btn btn-warning" >Edit your profile page</button>	
			</div>
		</div>
	</div>
	
	<div class="jumbotron main-jumbotron" id="test" >
		<span class="hidden" id="mainImg"><?php echo $property['mian_img']; ?></span>
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
		<form id="titleImgUpdate"  method="post">
			<p> <input class="hidden" type="text"  class="form-control" name="propertyID" value="<?php echo $property['property_id']; ?>"></p>		
			<p> <input type="file"  class="form-control" name="newTitleImg"></p>		
		  </div>
		  <div class="modal-footer">
			<button type="submit" class="btn btn-primary" >Save changes</button>
		</form>
        <button type="button" class="btn btn-default" data-dismiss="modal" onclick="closeTitleImageModal()">Close</button>
      </div>
  </div>
</div>	
	
	
<?php 
	$sqlPropertyModalImgs = "SELECT * FROM property_images WHERE property_id = '$propertyId'";
	
	$resultPropertyModalImgs = $mysqli->query($sqlPropertyModalImgs);
	
	
?>
	
<div id="myModal" class="modal" onclick="closeModal()">
  <div class="modal-content" onclick="event.stopPropagation();">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" onclick="closeModal()">&times;</button>
        <h4 class="modal-title">Add more photos</h4>
      </div>
      <div class="modal-body" id="propImgModal">
	  <?php 
		$noOfImgs = 0;
	  while($imgs = $resultPropertyModalImgs->fetch_assoc()){ ?>
		<p id="propImg<?php echo $imgs['image_id'] ; ?>"> <img class="modalPropertyImg"  src="<?php echo $imgs['img_path']; ?>"> <button type="button" class="btn btn-danger" onclick="deleteModalPropertyImg(<?php echo $imgs['image_id'] ;?>)">delete</button></p>
	  <?php 
		$noOfImgs += 1;
	  } 
	  ?>
		
		<?php for ($x = 0; $x < 15 - $noOfImgs; $x++) { ?>
		<form id="<?php echo "form".$x?>">
		<input name="propID" type="text" class="hidden" value="<?php echo $propertyId?>">
        <p id="<?php echo "p".$x?>">	<input name="modalImg" type="file" style="display: inline-block;" class=""><button style="display: inline-block;" type="submit" class="btn btn-primary">ADD</button></p>
		</form>
		<?php } ?>		
	  </div>
	  <!--<p class="text-center"><button type="button" class="btn btn-warning" value="Add more images" onclick="addMoreImg();">Add more images</button></p>-->
      <div class="modal-footer">
		
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
			<button type="button" class="btn btn-warning btn-xs hidden-xs" style="z-index:20; position:absolute;top:0;" onclick="openFamilyImageModal();">Edit Family Picture <i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
			<img class="image thumbnail hidden-xs" id="familyPhoto" src="<?php echo $property['family_pic']; ?>" >
			
			<div class="caption hidden-xs" >
			  <p id="familyPhotoCaption"><button type="button" class="btn btn-warning btn-xs" style="font-family:none;" onclick="openFamilyNameModal();" > Edit <i class="fa fa-pencil-square-o" aria-hidden="true"></i></button><span id="familyName1"><?php echo $property['family_name']; ?></span> </p>				  
			</div>
			
		</div>
	</div>
	</div>
	<div class="container">
	<div class="row">
		<div class="col-md-12">
			<p id="welcomeMessage" ><button type="button" class="btn btn-warning btn-xs" style="font-family:none;" onclick="openWelcomeMessageModal();">Edit <i class="fa fa-pencil-square-o" aria-hidden="true"></i></button><span id="welcomeMessage1"><?php echo $property['family_message']; ?></span></p>
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
		<form id="familyPic"  method="post">
			<p> <input class="hidden" type="text"  class="form-control" name="propertyID" value="<?php echo $property['property_id']; ?>"></p>		
			<p><input type="file"  class="form-control" name="newFamilyPic"></p>
		  </div>
		  <div class="modal-footer">
			<button type="submit" class="btn btn-primary" >Save Changes</button>
		</form>
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
		<p><input id="familyName" type="text" value=""  class="form-control"></p>
		<p><input class="hidden" id="propId" type="text" value="<?php echo $property['property_id']; ?>"  class="form-control"></p>
	  </div>
      <div class="modal-footer">
		<button type="button" class="btn btn-primary" onclick="updateFamilyName()">Save Changes</button>
        <button type="button" class="btn btn-default" data-dismiss="modal" onclick="closeFamilyNameModal()">Close</button>
      </div>
  </div>
</div>	


<div id="WelcomeMessageModal" class="modal" onclick="closeWelcomeMessageModal()">
  <div class="modal-content" onclick="event.stopPropagation();">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" onclick="closeWelcomeMessageModal()">&times;</button>
        <h4 class="modal-title">Edit Welcome Message</h4>
      </div>
      <div class="modal-body">	
		<p><input id="welcomeMessageModel" type="text" value=""  class="form-control"></p>
	  </div>
      <div class="modal-footer">
		<button type="button" class="btn btn-primary" onclick="updateWelcomeMessage()">Save Changes</button>
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
		<p><input id="newRate" type="text" value="<?php echo $property['rate'];?>"  class="form-control"></p>
	  </div>
      <div class="modal-footer">
		<button type="button" class="btn btn-primary" onclick="changeRate();" >Save Changes</button>
        <button type="button" class="btn btn-default" data-dismiss="modal" onclick="closeRateModal()">Close</button>
      </div>
  </div>
</div>	


<div id="featuresUpdatingModal" class="modal" onclick="closeFeaturesUpdatingModal()">
  <div class="modal-content" onclick="event.stopPropagation();">
    
      <div class="modal-body">	
		<div id="saving" class="">
			<p class="text-center ">Saving the updated features</p>
			<div class="loader"></div>
		</div>
		<div id="saved" class="hidden"><div class="box" style="background:green;"><p class="text text-center" style="color:white;">Features updated successfully</p></div></div>
	  </div>
      <div class="modal-footer">
		
        <button type="button" class="btn btn-default" data-dismiss="modal" onclick="closeFeaturesUpdatingModal()">Close</button>
      </div>
  </div>
</div>	


<div id="limitMissionariesModal" class="modal" onclick="closeLimitMissionariesModal()">
  <div class="modal-content" onclick="event.stopPropagation();">
    
	<div class="modal-body">	
		<div class="conditioner" style="font-size:1.2em;">
			<div class="row">
				<div class="col-xs-6">Adults</div> <div class="col-xs-6"><span class="controls" ><i class="fa fa-minus-circle" aria-hidden="true" onclick="decrement('adults');"></i> <span id="adults"><?php echo $property['limit_adult'];?></span> <i class="fa fa-plus-circle" aria-hidden="true" onclick="increment('adults');"></i></span></div>
			</div>	
			<div class="row">
				<div class="col-xs-6">Childrens</div> <div class="col-xs-6"></span><span class="controls"><i class="fa fa-minus-circle" aria-hidden="true" onclick="decrement('childrens');"></i> <span id="childrens"><?php echo $property['limit_child'];?></span> <i class="fa fa-plus-circle" aria-hidden="true" onclick="increment('childrens');"></i></span></div>
			</div>
			<div class="row">
				<div class="col-xs-6">Infants</div> <div class="col-xs-6"> </span><span class="controls"><i class="fa fa-minus-circle" aria-hidden="true" onclick="decrement('infants');"></i> <span id="infants"><?php echo $property['limit_infants'];?></span> <i class="fa fa-plus-circle" aria-hidden="true" onclick="increment('infants');"></i></span></div>
			</div>
			

		</div>
	</div>
	<div class="modal-footer">
		<button type="button" class="btn btn-primary" onclick="saveNumMissionaries();" >Save Changes</button>
		<button type="button" class="btn btn-default" data-dismiss="modal" onclick="closeLimitMissionariesModal()">Close</button>
	</div>
  </div>
</div>	



<div id="additionalChargeModal" class="modal" onclick="closeAdditionalChargeModal()">
  <div class="modal-content" onclick="event.stopPropagation();">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" onclick="closeRateModal()">&times;</button>
        <h4 class="modal-title text-center">Additional Charges</h4>
      </div>
	<div class="modal-body">	
		Cleaning charges 
		<input type="text" id="charge" value="<?php echo $property['cleaning_charges'];?>">
	</div>
	<div class="modal-footer">
		<button type="button" class="btn btn-primary" onclick="saveCleaningCharges();" >Save Changes</button>
		<button type="button" class="btn btn-default" data-dismiss="modal" onclick="closeAdditionalChargeModal()">Close</button>
	</div>
  </div>
</div>	


<div id="SuccessfulModal" class="modal" onclick="closeSuccessfulModal()">
  <div class="modal-content" onclick="event.stopPropagation();">
    
	<div class="modal-body">	
		<p id="successfulText" class="text-center"></p>
	</div>
	<div class="modal-footer">
		
		<button type="button" class="btn btn-default" data-dismiss="modal" onclick="closeSuccessfulModal()">Close</button>
	</div>
  </div>
</div>	



<div id="SavedModal" class="modal" onclick="closeSavedModal()">
  <div class="modal-content" onclick="event.stopPropagation();">
    
	<div class="modal-body">	
		<div class="box" style="background:green">
			<div class="text-center" style="color:white" >Missionaries Limit Saved Successfully.</div>
		</div>
	</div>
	<div class="modal-footer">		
		<button type="button" class="btn btn-default" data-dismiss="modal" onclick="closeSavedModal()">Close</button>
	</div>
  </div>
</div>	
	
	
	<?php		
		$sqlFeatures="SELECT * FROM features WHERE property_id='$propertyId'";
		
		$resultFeatures = $mysqli->query($sqlFeatures);
		
		$features = $resultFeatures->fetch_assoc();
		
		function check($value) {
			if($value == 1){
				return "checked";
			}
			else{
				return "";
			}
		}
		
		function className($value) {
			if($value == 1){
				return "";
			}
			else{
				return "strike";
			}
		}
		
	?>

	
	<!--Booking and Features-->
<section class="candy-wrapper" id="booking">
  <article class="main">
	<div class="box">
					<div class="box-header">
                            <h6 class="text-center"><span style="font-size:2em;">Features</span></h6>
                    </div>
					<div class="panel-body" >
						
						
						
						
						<form id="featuresForm" method="POST">
						<div class="panel panel-warning">
						  <input class="hidden" type="text" value="<?php echo $property['property_id']; ?>" name="pID">
						  <div class="text-center"><button type="submit" class="btn btn-primary">Save Feature Updates</button></div>&nbsp;	
						  <div class="panel-heading text-center ">Type of Property/Area</div>
						  <div class="panel-body">
						  <strong>Type:</strong>
							<div class="row">
								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Shared_Place']); ?> name="Shared_Place"  value="Shared_Place" onclick="strike('Shared_Place');"><i class="flaticon-home"></i> 
                               <span data-animate="fadeInDown" id="Shared_Place" class="<?php echo className($features['Shared_Place']); ?>"> Shared Place</span></div>
								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Vacant_House']); ?> name="Vacant_House" value="Vacant_House" onclick="strike('Vacant_House');"><i class="flaticon-home-1"></i>
								<span data-animate="fadeInDown" id="Vacant_House" class="<?php echo className($features['Vacant_House']); ?>">Vacant House</span></div>
								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Guest_House']); ?> name="Guest_House" value="Guest_House" onclick="strike('Guest_House');"><i class="flaticon-guest-house"></i>
								<span data-animate="fadeInDown" id="Guest_House" class="<?php echo className($features['Guest_House']); ?>">Guest House</span></div>
								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Apartment']); ?> name="Apartment" value="Apartment" onclick="strike('Apartment');"><i class="flaticon-apartment"></i>
								<span data-animate="fadeInDown" id="Apartment" class="<?php echo className($features['Apartment']); ?>" >Apartment</span></div>
							</div>
						  <strong>Area:</strong>		
							<div class="row">
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['City']); ?> name="City" value="City" onclick="strike('City');"><i class="flaticon-cityscape"></i>
								<span data-animate="fadeInDown" id="City" class="<?php echo className($features['City']); ?>">City</span></div>
								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Suburb']); ?> name="Suburb" value="Suburb" onclick="strike('Suburb');"><i class="flaticon-suburb"></i>
								<span data-animate="fadeInDown" id="Suburb" class="<?php echo className($features['Suburb']); ?>">Suburb</span></div>
								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Country']); ?> name="Country" value="Country" onclick="strike('Country');"><i class="flaticon-rural-house"></i>
								<span data-animate="fadeInDown" id="Country" class="<?php echo className($features['Country']); ?>">Country/Rural</span></div>
							</div>
						  </div>
						</div>
						
						
						<div class="panel panel-warning">
						  <div class="panel-heading text-center">Occupancy</div>
						  <div class="panel-body">
							<strong>Bed:</strong>
							<div class="row">								
								<div class="col-md-6"><i class="flaticon-twin-beds"></i><span data-animate="fadeInDown" ><input type="number" min="0" name="Twin_count" value="<?php echo $features['Twin_count'];?>"> Twin</span> </div>
								<div class="col-md-6"><i class="flaticon-bed"></i><span data-animate="fadeInDown" ><input type="number" min="0" name="FullCount" value="<?php echo $features['FullCount'];?>"> Full</span></div>
								<div class="col-md-6"><i class="flaticon-queen-size-bed"></i><span data-animate="fadeInDown" ><input type="number" min="0" name="Queen_count" value="<?php echo $features['Queen_count'];?>"> Queen</span> </div>
								<div class="col-md-6"><i class="flaticon-king-size-bedroom"></i><span data-animate="fadeInDown" ><input type="number" min="0" name="King_count" value="<?php echo $features['King_count'];?>"> King</span> </div>
							</div>
							<br>
							<strong>Other beds:</strong>
							<div class="row">								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Air_mattress']); ?> name="Air_mattress" value="Air_mattress" onclick="strike('Air_mattress');"><i class="flaticon-air-mattress"></i>
								<span data-animate="fadeInDown" id="Air_mattress" class="<?php echo className($features['Air_mattress']); ?>">Air mattress</span></div>
								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Futon']); ?> name="Futon" value="Futon" onclick="strike('Futon');"><i class="flaticon-bed-1"></i>
								<span data-animate="fadeInDown" id="Futon" class="<?php echo className($features['Futon']); ?>">Futon</span></div>
								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Hide_a_bed']); ?> name="Hide_a_bed" value="Hide_a_bed" onclick="strike('Hide_a_bed');"><i class="flaticon-double-bed"></i>
								<span data-animate="fadeInDown" id="Hide_a_bed" class="<?php echo className($features['Hide_a_bed']); ?>">Hide-a-bed</span></div>
								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Murphy_bed']); ?> name="Murphy_bed" value="Murphy_bed" onclick="strike('Murphy_bed');"><i class="flaticon-bed-2"></i>
								<span data-animate="fadeInDown" id="Murphy_bed" class="<?php echo className($features['Murphy_bed']); ?>">Murphy bed</span></div>
								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Couch']); ?> name="Couch" value="Couch" onclick="strike('Couch');"><i class="flaticon-long-sofa"></i>
								<span data-animate="fadeInDown" id="Couch" class="<?php echo className($features['Couch']); ?>">Couch</span></div>
							</div>													
						  </div>
						</div>
						
						
						<div class="panel panel-warning">
						  <div class="panel-heading text-center">Rest and Relaxation</div>
						  <div class="panel-body">
							<strong>At Home:</strong>
							<div class="row">								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Cable_TV']); ?> name="Cable_TV" value="Cable_TV" onclick="strike('Cable_TV');"><i class="flaticon-cable-tv-sign-with-monitor"></i>
								<span data-animate="fadeInDown" id="Cable_TV" class="<?php echo className($features['Cable_TV']); ?>">Cable TV</span></div>
								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Yard']); ?> name="Yard" value="Yard" onclick="strike('Yard');"><i class="flaticon-fence"></i>
								<span data-animate="fadeInDown" id="Yard" class="<?php echo className($features['Yard']); ?>">Yard</span></div>
								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Swimming_Pool']); ?> name="Swimming_Pool" value="Swimming_Pool" onclick="strike('Swimming_Pool');"><i class="flaticon-pool"></i>
								<span data-animate="fadeInDown" id="Swimming_Pool" class="<?php echo className($features['Swimming_Pool']); ?>">Swimming Pool</span></div>								
								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Library']); ?> name="Library" value="Library" onclick="strike('Library');"><i class="flaticon-study"></i>
								<span data-animate="fadeInDown" id="Library" class="<?php echo className($features['Library']); ?>">Library/Reading room</span></div>
								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Video_games']); ?> name="Video_games" value="Video_games" onclick="strike('Video_games');"><i class="flaticon-gamepad"></i>
								<span data-animate="fadeInDown" id="Video_games" class="<?php echo className($features['Video_games']); ?>">Video games</span></div>
								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['TrailAtHome']); ?> name="TrailAtHome" value="TrailAtHome" onclick="strike('TrailAtHome');"><i class="flaticon-river-trail"></i>
								<span data-animate="fadeInDown"id="TrailAtHome" class="<?php echo className($features['TrailAtHome']); ?>">Trail</span></div>
								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Picnic_area']); ?> name="Picnic_area" value="Picnic_area" onclick="strike('Picnic_area');"><i class="flaticon-picnic-table"></i>
								<span data-animate="fadeInDown" id="Picnic_area" class="<?php echo className($features['Picnic_area']); ?>">Picnic area</span></div>
								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Basketball']); ?> name="Basketball" value="Basketball" onclick="strike('Basketball');"><i class="flaticon-basketball-player-scoring"></i>
								<span data-animate="fadeInDown" id="Basketball" class="<?php echo className($features['Basketball']); ?>">Basketball</span></div>
								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Pool_table']); ?> name="Pool_table" value="Pool_table" onclick="strike('Pool_table');"><i class="flaticon-billiards-table"></i>
								<span data-animate="fadeInDown" id="Pool_table" class="<?php echo className($features['Pool_table']); ?>">Pool table</span></div>
								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Soccer']); ?> name="Soccer" value="Soccer" onclick="strike('Soccer');"><i class="flaticon-football"></i>
								<span data-animate="fadeInDown" id="Soccer" class="<?php echo className($features['Soccer']); ?>">Soccer</span></div>
								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Porch']); ?> name="Porch" value="Porch" onclick="strike('Porch');"><i class="flaticon-flowers-pot-of-yard"></i>
								<span data-animate="fadeInDown" id="Porch" class="<?php echo className($features['Porch']); ?>">Porch</span></div>
								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Board_games']); ?> name="Board_games" value="Board_games" onclick="strike('Board_games');"><i class="flaticon-economy-games"></i>
								<span data-animate="fadeInDown" id="Board_games" class="<?php echo className($features['Board_games']); ?>">Card/Board games</span></div>
								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Sauna']); ?> name="Sauna" value="Sauna" onclick="strike('Sauna');"><i class="flaticon-person-silhouette-in-sauna"></i>
								<span data-animate="fadeInDown" id="Sauna" class="<?php echo className($features['Sauna']); ?>">Sauna</span></div>
								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Hottub']); ?> name="Hottub" value="Hottub" onclick="strike('Hottub');"><i class="flaticon-sauna-bucket"></i>
								<span data-animate="fadeInDown" id="Hottub" class="<?php echo className($features['Hottub']); ?>">Hottub</span></div>								
								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Piano']); ?> name="Piano" value="Piano" onclick="strike('Piano');"><i class="flaticon-piano-top-view"></i>
								<span data-animate="fadeInDown" id="Piano" class="<?php echo className($features['Piano']); ?>">Piano</span></div>
								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Guitar']); ?> name="Guitar" value="Guitar" onclick="strike('Guitar');"><i class="flaticon-guitar"></i>
								<span data-animate="fadeInDown" id="Guitar" class="<?php echo className($features['Guitar']); ?>">Guitar</span></div>
								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Gym']); ?> name="Gym" value="Gym" onclick="strike('Gym');"><i class="flaticon-exercise"></i>
								<span data-animate="fadeInDown" id="Gym" class="<?php echo className($features['Gym']); ?>">Gym</span></div>
								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Patio']); ?> name="Patio" value="Patio" onclick="strike('Patio');"><i class="flaticon-patio"></i>
								<span data-animate="fadeInDown" id="Patio" class="<?php echo className($features['Patio']); ?>">Patio</span></div>
								
							</div>
							<br>
							<strong>In the area:</strong>
							<div class="row"><!--Expalin this by reducing the screen size then change to 6col-->								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Mall']); ?> name="Mall" value="Mall" onclick="strike('Mall');"><i class="flaticon-mall"></i>
								<span data-animate="fadeInDown" id="Mall" class="<?php echo className($features['Mall']); ?>">Mall</span></div>
								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Local_events']); ?> name="Local_events" value="Local_events" onclick="strike('Local_events');"><i class="flaticon-man-in-a-party-dancing-with-people"></i>
								<span data-animate="fadeInDown" id="Local_events" class="<?php echo className($features['Local_events']); ?>">Local events</span></div>
								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Park']); ?> name="Park" value="Park" onclick="strike('Park');"><i class="flaticon-park"></i>
								<span data-animate="fadeInDown" id="Park" class="<?php echo className($features['Park']); ?>">Park</span></div>								
								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['TrailInArea']); ?> name="TrailInArea" value="TrailInArea" onclick="strike('TrailInArea');"><i class="flaticon-mountain-running-silhouette"></i>
								<span data-animate="fadeInDown" id="TrailInArea" class="<?php echo className($features['TrailInArea']); ?>">Trail</span></div>
								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Bike_share']); ?> name="Bike_share" value="Bike_share" onclick="strike('Bike_share');"><i class="flaticon-bicycle"></i>
								<span data-animate="fadeInDown" id="Bike_share" class="<?php echo className($features['Bike_share']); ?>">Bike-share</span></div>
								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Skiing']); ?> name="Skiing" value="Skiing" onclick="strike('Skiing');"><i class="flaticon-skiing-man"></i>
								<span data-animate="fadeInDown" id="Skiing" class="<?php echo className($features['Skiing']); ?>">Skiing</span></div>
								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Beach']); ?> name="Beach" value="Beach" onclick="strike('Beach');"><i class="flaticon-sun-umbrella"></i>
								<span data-animate="fadeInDown" id="Beach" class="<?php echo className($features['Beach']); ?>">Beach</span></div>
								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Lake']); ?> name="Lake" value="Lake" onclick="strike('Lake');"><i class="flaticon-reed"></i>
								<span data-animate="fadeInDown" id="Lake" class="<?php echo className($features['Lake']); ?>">Lake</span></div>
								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Fishing']); ?> name="Fishing" value="Fishing" onclick="strike('Fishing');"><i class="flaticon-fishing-rod-and-fisher"></i>
								<span data-animate="fadeInDown" id="Fishing" class="<?php echo className($features['Fishing']); ?>">Fishing</span></div>
								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Lra']); ?> name="Lra" value="Lra" onclick="strike('Lra');"><i class="flaticon-surf"></i>
								<span data-animate="fadeInDown" id="Lra" class="<?php echo className($features['Lra']); ?>">Local recreational activities</span></div>
								
							</div>													
						  </div>
						</div>
						
						
						<div class="panel panel-warning">
						  <div class="panel-heading text-center ">Interior</div>
						  <div class="panel-body">
							<div class="row">
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Air_condition']); ?> name="Air_condition" value="Air_condition" onclick="strike('Air_condition');"><i class="flaticon-air-conditioner"></i>
								<span data-animate="fadeInDown" id="Air_condition" class="<?php echo className($features['Air_condition']); ?>">Air condition</span></div>
								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Bathroom_Basics']); ?> name="Bathroom_Basics" value="Bathroom_Basics" onclick="strike('Bathroom_Basics');"><i class="flaticon-hanger-with-a-towel"></i>
								<span data-animate="fadeInDown" id="Bathroom_Basics" class="<?php echo className($features['Bathroom_Basics']); ?>">Bathroom Basics</span></div>
								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Heating']); ?> name="Heating" value="Heating" onclick="strike('Heating');"><i class="flaticon-heating-black-tool"></i>
								<span data-animate="fadeInDown" id="Heating"class="<?php echo className($features['Heating']); ?>">Heating</span></div>
								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Kitchen']); ?> name="Kitchen" value="Kitchen" onclick="strike('Kitchen');"><i class="flaticon-chef"></i>
								<span data-animate="fadeInDown" id="Kitchen" class="<?php echo className($features['Kitchen']); ?>">Kitchen</span></div>							
								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Bathrooms']); ?> name="Bathrooms" value="Bathrooms" onclick="strike('Bathrooms');"><i class="flaticon-bathtub"></i>
								<span data-animate="fadeInDown" id="Bathrooms" class="<?php echo className($features['Bathrooms']); ?>">Bathrooms</span></div>
								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Wifi']); ?> name="Wifi" value="Wifi" onclick="strike('Wifi');"><i class="flaticon-wifi-connection-signal-symbol"></i>
								<span data-animate="fadeInDown" id="Wifi" class="<?php echo className($features['Wifi']); ?>">Wifi</span></div>
								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Computer']); ?> name="Computer" value="Computer" onclick="strike('Computer');"><i class="flaticon-monitor"></i>
								<span data-animate="fadeInDown" id="Computer" class="<?php echo className($features['Computer']); ?>">Computer</span></div>
								
							</div>
						  </div>
						</div>
						
						
						<div class="panel panel-warning">
						  <div class="panel-heading text-center ">Exterior</div>
						  <div class="panel-body">
							<div class="row">
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Lawn']); ?> name="Lawn" value="Lawn" onclick="strike('Lawn');"><i class="flaticon-lawn-mower"></i>
								<span data-animate="fadeInDown" id="Lawn" class="<?php echo className($features['Lawn']); ?>">Lawn</span></div>
								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Fire_pit']); ?> name="Fire_pit" value="Fire_pit" onclick="strike('Fire_pit');"><i class="flaticon-fire"></i>
								<span data-animate="fadeInDown" id="Fire_pit" class="<?php echo className($features['Fire_pit']); ?>">Fire-pit</span></div>
								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Garden']); ?> name="Garden" value="Garden" onclick="strike('Garden');"><i class="flaticon-vegetables"></i>
								<span data-animate="fadeInDown" id="Garden" class="<?php echo className($features['Garden']); ?>">Garden</span></div>
								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Barbeque']); ?> name="Barbeque" value="Barbeque" onclick="strike('Barbeque');"><i class="flaticon-barbecue"></i>
								<span data-animate="fadeInDown" id="Barbeque" class="<?php echo className($features['Barbeque']); ?>">Barbeque</span></div>							
								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Lawn_games']); ?> name="Lawn_games" value="Lawn_games" onclick="strike('Lawn_games');"><i class="flaticon-sack-race"></i>
								<span data-animate="fadeInDown" id="Lawn_games" class="<?php echo className($features['Lawn_games']); ?>">Lawn games</span></div>
								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Basketball_court']); ?> name="Basketball_court" value="Basketball_court" onclick="strike('Basketball_court');"><i class="flaticon-basketball-court"></i>
								<span data-animate="fadeInDown" id="Basketball_court" class="<?php echo className($features['Basketball_court']); ?>">Basketball court</span></div>
								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Soccer']); ?> name="Soccer" value="Soccer" onclick="strike('Soccer');"><i class="flaticon-soccer-ball-in-front-of-the-arch"></i>
								<span data-animate="fadeInDown" id="SoccerExterior" class="<?php echo className($features['SoccerExterior']); ?>">Soccer</span></div>
								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['volleyball_area']); ?> name="volleyball_area" value="volleyball_area" onclick="strike('volleyball_area');"><i class="flaticon-volleyball-player"></i>
								<span data-animate="fadeInDown" id="volleyball_area" class="<?php echo className($features['volleyball_area']); ?>">volleyball_area</span></div>
								
							</div>
						  </div>
						</div>
						
						
						<div class="panel panel-warning">
						  <div class="panel-heading text-center ">Appliances</div>
						  <div class="panel-body">
							<div class="row">
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Washer_and_Dryer']); ?> name="Washer_and_Dryer" value="Washer_and_Dryer" onclick="strike('Washer_and_Dryer');"><i class="flaticon-washing-machine"></i>
								<span data-animate="fadeInDown" id="Washer_and_Dryer" class="<?php echo className($features['Washer_and_Dryer']); ?>">Washer and Dryer</span></div>
								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Oven']); ?> name="Oven" value="Oven" onclick="strike('Oven');"><i class="flaticon-microwave-oven"></i>
								<span data-animate="fadeInDown" id="Oven" class="<?php echo className($features['Oven']); ?>">Oven</span></div>
								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Stove']); ?> name="Stove" value="Stove" onclick="strike('Stove');"><i class="flaticon-stove"></i>
								<span data-animate="fadeInDown" id="Stove" class="<?php echo className($features['Stove']); ?>">Stove</span></div>
								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Iron']); ?> name="Iron" value="Iron" onclick="strike('Iron');"><i class="flaticon-iron"></i>
								<span data-animate="fadeInDown" id="Iron" class="<?php echo className($features['Iron']); ?>">Iron</span></div>							
								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Ironing_board']); ?> name="Ironing_board" value="Ironing_board" onclick="strike('Ironing_board');"><i class="flaticon-ironing-board"></i>
								<span data-animate="fadeInDown" id="Ironing_board" class="<?php echo className($features['Ironing_board']); ?>">Ironing board</span></div>
								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Toaster']); ?> name="Toaster" value="Toaster" onclick="strike('Toaster');"><i class="flaticon-toast"></i>
								<span data-animate="fadeInDown" id="Toaster" class="<?php echo className($features['Toaster']); ?>">Toaster</span></div>
								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Hair_dryer']); ?> name="Hair_dryer" value="Hair_dryer" onclick="strike('Hair_dryer');"><i class="flaticon-hair-dryer-on"></i>
								<span data-animate="fadeInDown" id="Hair_dryer" class="<?php echo className($features['Hair_dryer']); ?>">Hair dryer</span></div>
								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Microwave']); ?> name="Microwave" value="Microwave" onclick="strike('Microwave');"><i class="flaticon-microwaves"></i>
								<span data-animate="fadeInDown" id="Microwave" class="<?php echo className($features['Microwave']); ?>">Microwave</span></div>
								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Cooking_Basics']); ?> name="Cooking_Basics" value="Cooking_Basics" onclick="strike('Cooking_Basics');"><i class="flaticon-hot-pot"></i>
								<span data-animate="fadeInDown" id="Cooking_Basics" class="<?php echo className($features['Cooking_Basics']); ?>">Cooking Basics (pots, pans etc)</span></div>
								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Baking_basics']); ?> name="Baking_basics" value="Baking_basics" onclick="strike('Baking_basics');"><i class="flaticon-cupcake-dessert"></i>
								<span data-animate="fadeInDown" id="Baking_basics" class="<?php echo className($features['Baking_basics']); ?>">Baking basics</span></div>
								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Coffee_maker']); ?> name="Coffee_maker" value="Coffee_maker" onclick="strike('Coffee_maker');"><i class="flaticon-coffee-maker"></i>
								<span data-animate="fadeInDown" id="Coffee_maker" class="<?php echo className($features['Coffee_maker']); ?>">Coffee maker</span></div>
								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Coffee_grinder']); ?> name="Coffee_grinder" value="Coffee_grinder" onclick="strike('Coffee_grinder');"><i class="flaticon-coffee-grinder"></i>
								<span data-animate="fadeInDown" id="Coffee_grinder" class="<?php echo className($features['Coffee_grinder']); ?>">Coffee grinder</span></div>
								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['blender']); ?> name="blender" value="blender" onclick="strike('blender');"><i class="flaticon-blender"></i>
								<span data-animate="fadeInDown" id="blender" class="<?php echo className($features['blender']); ?>">blender</span></div>
								
							</div>
						  </div>
						</div>
						
						
						<div class="panel panel-warning">
						  <div class="panel-heading text-center ">Children Friendly</div>
						  <div class="panel-body">
							<div class="row">
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Crib']); ?> name="Crib" value="Crib" onclick="strike('Crib');"><i class="flaticon-baby-crib-bedroom-furniture"></i>
								<span data-animate="fadeInDown" id="Crib" class="<?php echo className($features['Crib']); ?>">Crib</span></div>
								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Swing']); ?> name="Swing" value="Swing" onclick="strike('Swing');"><i class="flaticon-swing"></i>
								<span data-animate="fadeInDown" id="Swing" class="<?php echo className($features['Swing']); ?>">Swing</span></div>
								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Slide']); ?> name="Slide" value="Slide" onclick="strike('Slide');"><i class="flaticon-slide"></i>
								<span data-animate="fadeInDown" id="Slide" class="<?php echo className($features['Slide']); ?>">Slide</span></div>
								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Baby_Monitor']); ?> name="Baby_Monitor" value="Baby_Monitor" onclick="strike('Baby_Monitor');"><i class="flaticon-baby-monitor"></i>
								<span data-animate="fadeInDown" id="Baby_Monitor" class="<?php echo className($features['Baby_Monitor']); ?>">Baby Monitor</span></div>							
								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['High_chair']); ?> name="High_chair" value="High_chair" onclick="strike('High_chair');"><i class="flaticon-high-chair"></i>
								<span data-animate="fadeInDown" id="High_chair" class="<?php echo className($features['High_chair']); ?>">High chair</span></div>
								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Sand_box']); ?> name="Sand_box" value="Sand_box" onclick="strike('Sand_box');"><i class="flaticon-sand-box"></i>
								<span data-animate="fadeInDown" id="Sand_box" class="<?php echo className($features['Sand_box']); ?>">Sand box</span></div>
								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Stair_gates']); ?> name="Stair_gates" value="Stair_gates" onclick="strike('Stair_gates');"><i class="flaticon-man-climbing-stairs"></i>
								<span data-animate="fadeInDown" id="Stair_gates" class="<?php echo className($features['Stair_gates']); ?>">Stair gates</span></div>
								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Children_silverware']); ?> name="Children_silverware" value="Children_silverware" onclick="strike('Children_silverware');"><i class="flaticon-cutlery"></i>
								<span data-animate="fadeInDown" id="Children_silverware" class="<?php echo className($features['Children_silverware']); ?>">Children_silverware</span></div>
								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Window_guards']); ?> name="Window_guards" value="Window_guards" onclick="strike('Window_guards');"><i class="flaticon-stained-glass-window"></i>
								<span data-animate="fadeInDown" id="Window_guards" class="<?php echo className($features['Window_guards']); ?>">Window guards</span></div>
								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Outlet_guards']); ?> name="Outlet_guards" value="Outlet_guards" onclick="strike('Outlet_guards');"><i class="flaticon-socket"></i>
								<span data-animate="fadeInDown" id="Outlet_guards" class="<?php echo className($features['Outlet_guards']); ?>">Outlet guards</span></div>
								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Child_proof']); ?> name="Child_proof" value="Child_proof" onclick="strike('Child_proof');"><i class="flaticon-glass-warning-sign-for-shopping-packages"></i>
								<span data-animate="fadeInDown" id="Child_proof" class="<?php echo className($features['Child_proof']); ?>">Child-proof </span></div>
								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Books']); ?> name="Books" value="Books" onclick="strike('Books');"><i class="flaticon-books-stack-of-three"></i>
								<span data-animate="fadeInDown" id="Books" class="<?php echo className($features['Books']); ?>">Books</span></div>
								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Toys']); ?> name="Toys" value="Toys" onclick="strike('Toys');"><i class="flaticon-mobile"></i>
								<span data-animate="fadeInDown" id="Toys" class="<?php echo className($features['Toys']); ?>">Toys</span></div>
							</div>
						  </div>
						</div>
						
						<div class="panel panel-warning">
						  <div class="panel-heading text-center ">Accessibility</div>
						  <div class="panel-body">
							<div class="row">
							
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Wheelchair']); ?> name="Wheelchair" value="Wheelchair" onclick="strike('Wheelchair');"><i class="flaticon-wheelchair"></i>
								<span data-animate="fadeInDown" id="Wheelchair" class="<?php echo className($features['Wheelchair']); ?>">Wheelchair</span></div>
								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Elevator']); ?> name="Elevator" value="Elevator" onclick="strike('Elevator');"><i class="flaticon-elevator"></i>
								<span data-animate="fadeInDown" id="Elevator" class="<?php echo className($features['Elevator']); ?>">Elevator</span> </div>
								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Stairs']); ?> name="Stairs" value="Stairs" onclick="strike('Stairs');"><i class="flaticon-ascending-stairs-signal"></i>
								<span data-animate="fadeInDown" id="Stairs" class="<?php echo className($features['Stairs']); ?>">Stairs</span></div>
								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Handicap_bathrooms']); ?> name="Handicap_bathrooms" value="Handicap_bathrooms" onclick="strike('Handicap_bathrooms');"><i class="flaticon-bathtub"></i>
								<span data-animate="fadeInDown" id="Handicap_bathrooms" class="<?php echo className($features['Handicap_bathrooms']); ?>">Handicap accessible bath</span></div>
								
								</div>
								<br>
								<strong>Parking:</strong>
								<div class="row">																							
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Street_parking']); ?> name="Street_parking" value="Street_parking" onclick="strike('Street_parking');"><i class="flaticon-parking"></i>
								<span data-animate="fadeInDown" id="Street_parking" class="<?php echo className($features['Street_parking']); ?>">Street parking</span></div>
								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Carport']); ?> name="Carport" value="Carport" onclick="strike('Carport');"><i class="flaticon-car-garage"></i>
								<span data-animate="fadeInDown" id="Carport" class="<?php echo className($features['Carport']); ?>">Carport</span></div>
								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Garage']); ?> name="Garage" value="Garage" onclick="strike('Garage');"><i class="flaticon-garage"></i>
								<span data-animate="fadeInDown" id="Garage" class="<?php echo className($features['Garage']); ?>">Garage</span></div>
								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Driveway']); ?> name="Driveway" value="Driveway" onclick="strike('Driveway');"><i class="flaticon-parking-1"></i>
								<span data-animate="fadeInDown" id="Driveway" class="<?php echo className($features['Driveway']); ?>">Driveway</span></div>
								
							</div>
						  </div>
						</div>
						
						<div class="panel panel-warning">
						  <div class="panel-heading text-center ">Security and Safety</div>
						  <div class="panel-body">
							<div class="row">
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Smoke_detector']); ?> name="Smoke_detector" value="Smoke_detector" onclick="strike('Smoke_detector');"><i class="flaticon-smoke-detector"></i>
								<span data-animate="fadeInDown" id="Smoke_detector" class="<?php echo className($features['Smoke_detector']); ?>">Smoke detector</span></div>
								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Fire_alarm']); ?> name="Fire_alarm" value="Fire_alarm" onclick="strike('Fire_alarm');"><i class="flaticon-fire-alarm"></i>
								<span data-animate="fadeInDown" id="Fire_alarm" class="<?php echo className($features['Fire_alarm']); ?>">Fire alarm</span></div>
								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Carbon_monoxide_detector']); ?> name="Carbon_monoxide_detector" value="Carbon_monoxide_detector" onclick="strike('Carbon_monoxide_detector');"><i class="flaticon-smoke"></i>
								<span data-animate="fadeInDown" id="Carbon_monoxide_detector" class="<?php echo className($features['Carbon_monoxide_detector']); ?>">Carbon monoxide detector</span></div>
								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Private_entrance']); ?> name="Private_entrance" value="Private_entrance" onclick="strike('Private_entrance');"><i class="flaticon-opened-filled-door"></i>
								<span data-animate="fadeInDown" id="Private_entrance" class="<?php echo className($features['Private_entrance']); ?>">Private entrance</span></div>							
								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Shared_entrance']); ?> name="Shared_entrance" value="Shared_entrance" onclick="strike('Shared_entrance');"><i class="flaticon-entrance"></i>
								<span data-animate="fadeInDown" id="Shared_entrance" class="<?php echo className($features['Shared_entrance']); ?>">Shared entrance</span></div>
								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Buzzer']); ?> name="Buzzer" value="Buzzer" onclick="strike('Buzzer');"><i class="flaticon-joker-buzzer"></i>
								<span data-animate="fadeInDown" id="Buzzer" class="<?php echo className($features['Buzzer']); ?>">Buzzer/Wireless Intercom</span></div>								
								
							</div>
						  </div>
						</div>
						
						<div class="panel panel-warning">
						  <div class="panel-heading text-center ">Unique/Other Qualities</div>
						  <div class="panel-body">
							<div class="row">
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['have_pets']); ?> name="have_pets" value="have_pets" onclick="strike('have_pets');"><i class="flaticon-pet"></i>
								<span data-animate="fadeInDown" id="have_pets"class="<?php echo className($features['have_pets']); ?>">We have pets</span></div>
								
								<div class="col-md-6"><input type="checkbox" <?php echo check($features['Pets_Allowed']); ?> name="Pets_Allowed" value="Pets_Allowed" onclick="strike('Pets_Allowed');"><i class="flaticon-pet"></i>
								<span data-animate="fadeInDown" id="Pets_Allowed" class="<?php echo className($features['Pets_Allowed']); ?>">Pets Allowed</span></div>														
							</div>
						  </div>
						</div>
						<div class="text-center"><button type="submit" class="btn btn-primary">Save Feature Updates</button></div>&nbsp;	
						</form>
						
						
						
						
						
						
						
						
						

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
							<p class="text-center" id="rate" style="margin-top:-1em;"><button type="button" class="btn btn-warning" onclick="openRateModal();" >Edit <i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>$<span id="rateText"><?php echo $property['rate'];?></span> Per Night</p>
							
							<div class="row">
								<div class=" col-sm-12 col-xs-12">
									<p class="text text-center">Select availability</p>
									<div id="mdp-demo" style="line-height:1.1em; margin-left:1em;" ></div>									
								</div>
							</div>
							
								
							<div class="row">
								<div class="col-md-12">
								<p class="text-center" ><span class="btn btn-primary btn-block">Save Availability</span></p>
								
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
									<div class="text-center col-xs-12"><input type="button" class="btn btn-warning btn-block" value="Limit number of missionaries" onclick="openLimitMissionariesModal()"></div>
								</div>
							</div>
							&nbsp;
							<div class="container">
								<div class="row">
									<!-- Open a modal for this -->
									<div class="text-center col-xs-12"><input type="button" class="btn btn-warning btn-block" value="Additional charges" onclick="openAdditionalChargeModal()"></div>
								</div>
							</div>
							
							&nbsp;
							
									
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
				<img class="image thumbnail hidden-xs" id="familyPhotoAbout" src="<?php echo $property['family_pic']; ?>" >
				<button type="button" class="btn btn-warning "  onclick="openFamilyImageModal();">Edit Family Picture <i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
				<div class="caption">
				  <p class="text text-center" style="font-family:Algerian; "><button type="button" class="btn btn-warning btn-xs" style="font-family:none;" onclick="openFamilyNameModal();" > Edit <i class="fa fa-pencil-square-o" aria-hidden="true"></i></button> <span id="familyNameAbout"><?php echo $property['family_name']; ?></span> </p>
				</div>
				</div>
				<div>
				<textarea class="box" style="width:100%;" id="familyDesc"><?php  echo $property['family_desc']; ?></textarea>
				<p class="text text-center"><button type="button" class="btn btn-warning" onclick="saveDescription()">Save Description</button></p>
				</div>
			</div>
			
			<div class="col-md-6">
				<h3 class="box-header" id="houseRules">House rules</h3>
				<div class="list-group">
				  <a  class="list-group-item"><i class="fa fa-arrow-right" aria-hidden="true"></i> Check-in time <input id="inHr" type="number" min="0" max="12" value="<?php echo $property['check_in_time_hr']; ?>"> : <input id="inMin" type="number" min="0" max="59" value="<?php echo $property['check_in_time_mn']; ?>">
				  <select id="inAP">
				  <?php if ($property['check_in_time_AP'] == "AM"){ ?>
					<option value="AM">AM</option>
					<option value="PM">PM</option>
				  <?php } 
					else{
				  ?>	
					<option value="PM">PM</option>
					<option value="AM">AM</option>
					<?php } ?>
				  </select>
				  <input type="button" class="btn btn-primary" value="save" onclick="changeCheckIn()">
				  </a>
				  
				  
				  
				  
				  <a class="list-group-item">	
					<i class="fa fa-arrow-right" aria-hidden="true"></i>Check-out time <input id="outHr" type="number" min="0" max="12" value="<?php echo $property['check_out_time_hr']; ?>"> : <input id="outMin" type="number" min="0" max="59" value="<?php echo $property['check_out_time_mn']; ?>">
					<select id="outAP">
				  <?php if ($property['check_out_time_AP'] == "AM"){ ?>
					<option value="AM">AM</option>
					<option value="PM">PM</option>
				  <?php } 
					else{
				  ?>	
					<option value="PM">PM</option>
					<option value="AM">AM</option>
					<?php } ?>
				  </select>
				  <input type="button" class="btn btn-primary" value="save" onclick="changeCheckOut()">
				  </a>	
				  
				<div id="rulesSection">
				  <?php
					$sqlRules = "SELECT * FROM house_rules WHERE property_id = '$propertyId' ";
					
					$resultRules = $mysqli->query($sqlRules);
					
					while($rules = $resultRules->fetch_assoc()){
				  
				  ?>
					
				  <a  class="list-group-item"><i class="fa fa-arrow-right" aria-hidden="true"></i> <?php echo $rules['rule']; ?> <div class="text text-right"><button type="button" class="btn btn-danger"  onclick="deleteRule(this,<?php echo $rules['house_rules_id']; ?>)">Delete <i class="fa fa-trash" aria-hidden="true"></i></button></div></a>				  
				  
					<?php } ?>
				</div>
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
		<p><textarea id="newRule" style="height:7em; width:100%;" wrap="soft"> </textarea></p>
	  </div>
      <div class="modal-footer">
		<button type="button" class="btn btn-primary" onclick="addRule()" >Add</button>
        <button type="button" class="btn btn-default" data-dismiss="modal" onclick="closeRulesModal()">Close</button>
      </div>
  </div>
</div>		


	
	
	<div class="container">
		<div class="row box">
			<div class="col-md-12">
				<h3 class="box-header text-center">House Address</h3>
				<p><input type="text" class="form-control form-group" id="Street_address" placeholder="Street address" value="<?php  echo $property['addr_street']; ?>"></p> 
				<p><input type="text" class="form-control form-group" id="House_No" placeholder="House No." value="<?php  echo $property['addr_house_no']; ?>"></p> 				
				<p><input type="text" class="form-control form-group" id="addressCity" placeholder="City" value="<?php  echo $property['addr_city']; ?>"></p>
				<p><input type="text" class="form-control form-group" id="State" placeholder="State" value="<?php  echo $property['addr_state']; ?>"></p>
				<p><input type="text" class="form-control form-group" id="addressCountry" placeholder="Country" value="<?php  echo $property['addr_country']; ?>"></p>
				<p class="text-center"><button type="button" class="btn btn-warning" onclick="saveAddress()" >Save Address</button></p>	
			</div>
			<div class="col-md-6 hidden" >
				<h3 class="box-header text-center">Map</h3>
				<div id="map"></div>
				
				<script src="js/googleMaps.js"></script>
				
				
				
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
			<div id="alert" class="text text-center"><p>Click on the highlighted states to fill in the information about the missonaries you served</p></div>
			</div>
			</div>
			
	</div>
	
	<?php
		$sqlPropertyQuestions = "SELECT * FROM property_questions WHERE property_id = '$propertyId'";
		$resultPropertyQuestions = $mysqli->query($sqlPropertyQuestions);
	?>
	
	
	<div class="container">
		<div class="row box">
			<div class="col-md-12">
				<h3 class="box-header text-center">Questions answered by the host</h3>
				<div class="box">
				<?php 
					while($row = $resultPropertyQuestions->fetch_assoc()){
						if($row['answered']==1){
				?>
					<p class="question"><span class="questionSymbol">Q.</span><?php echo $row['question']; ?></p>
					<p class="answer"><span class="answerSymbol">>></span><?php echo $row['answer']; ?></p>
					<?php 
						}
						else{
					
					
					?>	
					<p class="question"><span class="questionSymbol">Q.</span><?php echo $row['question']; ?></p>
					<p class="answer"><input type="text" placeholder="Answer this question" class="form-control form-group"><span class="hidden"><?php echo $row['property_questions_id']; ?></span><button class="btn btn-success" type="button" onclick="answerPropertyQuestion(this)">Post Answer</button></p>
					<?php 
						}
					}	
					?>
				</div>
			</div>
		</div>
	</div>
	
	
	
	<?php
		$sqlPropertyReviews = "SELECT * FROM property_reviews WHERE property_id = $propertyId ORDER BY helpful_count DESC LIMIT 3";
		
		$resultPropertyReviews = $mysqli->query($sqlPropertyReviews);
		
		
		
		
	
	?>
	
	<div class="container" id="reviews">
		<div class="row box">
			<div class="col-md-12">
				<h3 class="box-header text-center">Reviews</h3>
				
				<?php 
					while($rowPropertyReviews = $resultPropertyReviews->fetch_assoc()){ 
				?>
					<blockquote>
						<div>
						
						<?php 
							$review_by_email = $rowPropertyReviews['review_by_email'];
							$sql_get_profile_pic ="SELECT * FROM users WHERE email = '$review_by_email'"; 
							$result6 = $mysqli->query($sql_get_profile_pic);
							$arry = $result6->fetch_assoc();
							$pth = $arry['profile_pic_path'];
						?>
						
							<img src="<?php echo $pth;?>" class="img-circle profile-pic">					
							<?php for( $i = 0; $i< $rowPropertyReviews['rating_Stars']; $i++ ) { ?>
									 <span class="glyphicon glyphicon-star" style="color:yellow; font-size:1.3em;"></span>
							<?php } ?>	
							
							<?php for( $i = 0; $i<(5 -  $rowPropertyReviews['rating_Stars']); $i++ ) { ?>
									 <span class="glyphicon glyphicon-star-empty" style=" font-size:1.3em;"></span>
							<?php } ?>
							
							
							<?php echo $rowPropertyReviews['review_text']; ?>
						</div>
						<footer style="margin-top:1em;">by <a href="<?php echo "profile.php?email=".urlencode(base64_encode($rowPropertyReviews['review_by_email'])); ?>"> <?php echo $rowPropertyReviews['review_by']; ?> </a> on <?php echo $rowPropertyReviews['review_date']; ?>
						<div class="text text-right">
							<button type="submit" class="btn btn-primary btn-sm" onclick="openCommentsModal(<?php echo $rowPropertyReviews['property_reviews_id']; ?>)">Comments (<span id="<?php echo "commentCount".$rowPropertyReviews['property_reviews_id']; ?>"><?php require 'commentCountProperty.php'; ?></span>)</button>					
						</div>
						<div class="text text-right">
							<?php echo $rowPropertyReviews['helpful_count']; ?> people found this helpful.
						</div>	
						</footer>					
					</blockquote>
					
					<?php } ?>	
					
					
					<div class="text text-center" onclick="openMoreReviewsModal()" id="showMore"><i class="fa fa-plus-circle" aria-hidden="true"></i> Show more</div>
					
					
				
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
		<span id="reviewId" class="hidden"></span>
        <p><input type="text" id="commentText" placeholder="Your comment goes here" style="border:none;" class="form-control"></p>
      
	  <div style="overflow: scroll; max-height:15em;" id="commentsDiv">
		  
	  </div>
	  </div>
      <div class="modal-footer">
		<button type="button" class="btn btn-primary" onclick="addComment()">Save Comment</button>
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
      <div class="modal-body" style="overflow: scroll; max-height:20em;" id="moreComments">
	  		
		<!-- This section will be filled up with more comments-->
		
        
      </div>
	  <div class="modal-footer">		
        <button type="button" class="btn btn-default" data-dismiss="modal" onclick="closeMoreReviewsModal()">Close</button>
      </div>
  </div>
</div>
	
		

<!-- Show more reviews Modal -->
 <div id="SharableModal" class="modal" onclick="closeSharableModal()" >
  <div class="modal-content" onclick="event.stopPropagation();">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" onclick="closeSharableModal();">&times;</button>
        
      </div>
      <div class="modal-body" style="overflow: scroll; max-height:20em;" >
	  	<h5 class="form-group">Just Copy the link below and send it to your friend so that he can see your property.</h5>	
		<input type="text" class="form-group form-control" value="<?php echo "https://www.missionsbnb.com/propertyDetail.php?propertyId=".$property['property_id'];  ?>">
		
        
      </div>
	  <div class="modal-footer">		
        <button type="button" class="btn btn-default" data-dismiss="modal" onclick="closeSharableModal()">Close</button>
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
				Missionary Served USERNAME
			</div>
			<div>				
				Where was the missionary from? <input type="text" class="form-group form-control"></input> 
			</div>
			<div>				
				What is the Population in missionarie's state? <input type="text" class="form-group form-control"></input> 
			</div>
			<div>				
				What are the fun fact about missionarie's state? <input type="text" class="form-group form-control"></input> 
			</div>
			<div>				
				Who are the unreached people group in missionarie's state? <input type="text" class="form-group form-control"></input> 
			</div>
			<div>				
				What are the needs in missionarie's state? <input type="text" class="form-group form-control"></input> 
			</div>
			<div>				
				What are the Languages spoken in missionarie's state? <input type="text" class="form-group form-control"></input> 
			</div>
			<div>				
				What are the prayer request for the missionarie's state? <input type="text" class="form-group form-control"></input> 
			</div>
			<div>				
				Additional Note:<textarea class="form-group form-control"></textarea> 
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