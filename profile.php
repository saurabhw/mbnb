<?php 
session_start();
require_once  'db.php';

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
        
		<link href="css/profile.css" rel="stylesheet">
		<link href="css/header.css" rel="stylesheet">

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
		
		
		<?php include 'header.php';?>
		
		
		
		<?php 
		
			//$email = $_SESSION['email'];
			$email = $mysqli->escape_string(base64_decode($_GET['email'])); 
			
			$sql = "SELECT * FROM users,common_fields WHERE users.email='$email' AND common_fields.email='$email'";
			$result = $mysqli->query($sql);
			
			$user = $result->fetch_assoc();
			
			if($_SESSION['missionary'] == 1){
				$sql2 = "SELECT * FROM users,missionary_fields WHERE users.email='$email' AND missionary_fields.email='$email'";
				$result2 = $mysqli->query($sql2);
				$missionary = $result2->fetch_assoc();
				
				$sql_supports = "SELECT * FROM users, others_i_have_supported WHERE users.email='$email' AND others_i_have_supported.email='$email'";
				$result3 = $mysqli->query($sql_supports);
				
				$sql_testimony = "SELECT * FROM users, testimony WHERE users.email='$email' AND testimony.email='$email'";
				$result4 = $mysqli->query($sql_testimony);
				
				
				
			}
		?>
		
		
		
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<img src="<?php if($user['profile_pic_path']!='' or $user['profile_pic_path']!=null){ echo $user['profile_pic_path'];} else{ echo 'img/no-image.jpg';} ?>" class="img-thumbnail" id="profilePic">
					<div id="verified" class="text text-center"><i class="fa fa-check" aria-hidden="true"></i> Verified</div>
					
					
					<div class="box">
						<div class="box-header text text-center"><h4>Expectations </h4></div>
						<p><i class="fa fa-arrow-right" aria-hidden="true"></i>You must pray with the host family.</p>
						<p><i class="fa fa-arrow-right" aria-hidden="true"></i>You must talk about the needs in your state with the family.</p>
						<p><i class="fa fa-arrow-right" aria-hidden="true"></i>You must talk about the fun facts at your state.</p>						
					</div>
				</div>
				<div class="col-md-8 box" id="profileDetails">
					
					<?php if($_SESSION['email'] == $email) {?>
					<div class="text text-right"><a href="profileEdit.php" style="color:white;"><i class="fa fa-wrench" aria-hidden="true"></i> Edit profile</a></div>
					<?php } ?>
					
					<div id="userName" class="text text-center"><?php echo $user['first_name'].". ".$user['last_name'] ;?></div>
					
					<div>Home Church <i class="fa fa-long-arrow-right" aria-hidden="true"></i> <?php echo $user['home_church']; ?></div>
					<div>Pastor / Leader <i class="fa fa-long-arrow-right" aria-hidden="true"></i> <?php echo $user['pastor']; ?></div>
					<div>Role at home Church <i class="fa fa-long-arrow-right" aria-hidden="true"></i> <?php echo $user['role_at_church']; ?></div>					
					<?php if(checkIfNotMissionaryThenDoNotCreate()){ ?>
						<div>Current mission field <i class="fa fa-long-arrow-right" aria-hidden="true"></i> <?php echo $missionary['current_mission_field']; ?></div>					
						<div>Churchs in my field<i class="fa fa-long-arrow-right" aria-hidden="true"></i> <?php echo $missionary['church_in_your_field']; ?></div>
						<div>Church I am sent from <i class="fa fa-long-arrow-right" aria-hidden="true"></i> <?php echo $missionary['church_sent_from']; ?></div>
						<div>Group I am reaching for the kingdom <i class="fa fa-long-arrow-right" aria-hidden="true"></i> <?php echo $missionary['group_reaching_for']; ?></div>					
						<div>Others I have supported </div>
						
							<ul class="list-group blackText" >
							
							<?php if(isset($missionary)){ while ($row = $result3->fetch_assoc()) {
								 $hasSupport = true; ?>
							  <li class="list-group-item"><span ><?php echo $row['support']; ?></span></li>	
							<?php } 
								if(!isset($hasSupport)){ echo "<li class='list-group-item'><span ></span></li>	";}
							?>
							<?php } ?>
							
							  
							</ul>
							
							
							
						<div>My Testimony </div>
						<div class="box blackText">
							<?php if(isset($missionary)){ while ($row = $result4->fetch_assoc()) {
								$hasTestimony = true;?>
							<p><i class="fa fa-book" aria-hidden="true"></i> <?php echo $row['testimony']?></p>
							<?php } 
							if(!isset($hasTestimony)){ echo "<p><i class='fa fa-book' aria-hidden='true'></i> </p>";} ?>
							<?php } ?>
						</div>
					<?php } ?>
					
					<div>
						<p><i class="fa fa-cutlery" aria-hidden="true"></i> Favorite food <i class="fa fa-long-arrow-right" aria-hidden="true"></i> <?php echo $user['favorite_food']; ?></p>
					</div>
					
					<div>
						<p><i class="flaticon-prayer" id="flaticon"></i>Prayer request <i class="fa fa-long-arrow-right" aria-hidden="true"></i> <?php echo $user['prayer_request']; ?></p>
					</div>
					
					<fieldset>
						  <legend style="color:white;">Home Church Address:</legend>
						  <p><?php echo $user['home_church_address_street']; ?></p>						  
						  <p><?php echo $user['home_church_address_house_no']; ?></p>						  
						  <p><?php echo $user['home_church_address_city']; ?></p>
						  <p><?php echo $user['home_church_address_state']; ?></p>
						  <p><?php echo $user['home_church_address_country']; ?></p>		
					</fieldset>
					
					<div class="text text-right">
						<button type="button" class="btn btn-danger" >Report This Person</button>	
					</div>
					
				</div>
			</div>
		</div>
		
		<?php if(!($email == $_SESSION['email'])){ ?>
		<div class="container">
			<div class="row box">
				<div class="col-md-12">
					<h3 class="box-header text-center">Add a review for <?php echo $user['first_name'].". ".$user['last_name'] ;?></h3>
					<form method="POST" id="userReview">
						<div>
						<span class="glyphicon glyphicon-star-empty" style=" font-size:1.3em;" id="1" onmouseover="fillStarsTill(1)" ></span>
						<span class="glyphicon glyphicon-star-empty" style=" font-size:1.3em;" id="2" onmouseover="fillStarsTill(2)" ></span>
						<span class="glyphicon glyphicon-star-empty" style=" font-size:1.3em;" id="3" onmouseover="fillStarsTill(3)" ></span>
						<span class="glyphicon glyphicon-star-empty" style=" font-size:1.3em;" id="4" onmouseover="fillStarsTill(4)" ></span>
						<span class="glyphicon glyphicon-star-empty" style=" font-size:1.3em;" id="5" onmouseover="fillStarsTill(5)" ></span>						
						<input type="number" value="0" id="starRating" class="hidden" name="starRating">
						<input type="text" value="<?php echo $email; ?>"  class="hidden" name="reviewFor">
						</div>
						
						<div class="form-group">
							<input type="text" placeholder="Your review goes here" style="width:100%;" class="form-control" name="review" id="review">
						</div>
						<div class="form-group text-center" >
							<button type="submit" class="btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save review</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<?php } ?>
		
		
<div id="reviewSuccessModal" class="modal" onclick="closeReviewSuccessModal()" >
  <div class="modal-content" onclick="event.stopPropagation();">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" onclick="closeReviewSuccessModal()">&times;</button>        
      </div>
      <div class="modal-body">
        <div class="text-center">Review posted successfully.</div>
	  </div>
	  <div class="modal-footer">		
        <button type="button" class="btn btn-default" data-dismiss="modal" onclick="closeReviewSuccessModal()">Close</button>
      </div>
  </div>
</div>



<?php 
$sql_get_reviews = "SELECT * FROM review_for_user WHERE review_for_email = '$email' ORDER BY helpful_count DESC LIMIT 3";
$result5 = $mysqli->query($sql_get_reviews);

?>

	
	
	<div class="container" id="reviews">
		<div class="row box">
			<div class="col-md-12">
				<h3 class="box-header text-center">Reviews for <?php if($email == $_SESSION['email']){echo "you";}else {echo $user['first_name'].". ".$user['last_name'] ;}?></h3>
				<?php
					
					while ($rewiews = $result5->fetch_assoc() ) { 
						 ?>
					<blockquote>
						<div>
						
						<?php 
							$review_by_email = $rewiews['review_by_email'];
							$sql_get_profile_pic ="SELECT * FROM users WHERE email = '$review_by_email'"; 
							$result6 = $mysqli->query($sql_get_profile_pic);
							$arry = $result6->fetch_assoc();
							$pth = $arry['profile_pic_path'];
						?>
						
							<img src="<?php echo $pth;?>" class="img-circle profile-pic">	


							<?php for( $i = 0; $i< $rewiews['rating_stars']; $i++ ) { ?>
									 <span class="glyphicon glyphicon-star" style="color:yellow; font-size:1.3em;"></span>
							<?php } ?>	
							
							<?php for( $i = 0; $i<(5 -  $rewiews['rating_stars']); $i++ ) { ?>
									 <span class="glyphicon glyphicon-star-empty" style=" font-size:1.3em;"></span>
							<?php } ?>	
							
							<?php echo $rewiews['review_text'];?>
						</div>
						<footer style="margin-top:1em;">by <a href="<?php echo "profile.php?email=".urlencode(base64_encode($rewiews['review_by_email']))?>"><?php echo $rewiews['review_by'];?></a> on <?php echo $rewiews['review_date'];?>
						
						<div class="text text-right">
							<div class="inline"><button type="submit" class="btn btn-primary btn-sm" onclick="openCommentsModal('<?php echo $rewiews['review_for_user_id'];?>')">Comments (<span id="commentCount<?php echo $rewiews['review_for_user_id'];?>"><?php require  'commentCount.php'; ?></span> )</button></div>
							<!-- if not voted helpfullness before then using ajax delete the content once voted -->
							<?php
								$e = $_SESSION['email'];
								$reviewId=$rewiews['review_for_user_id'];
								$sql_check = "SELECT * FROM vote_helpful_review_for_user WHERE voted_by_email='$e' AND for_which_review_id='$reviewId'";
								$result_check = $mysqli->query($sql_check);
								$count_check = mysqli_num_rows($result_check);
								if($count_check == 0 && $_SESSION['email'] != $email){
							?>
							<div id="helpfullness<?php echo $rewiews['review_for_user_id'];?>" class="inline">
								<div class="inline">							
								<form method="POST" class="helpfulYes" >								
									<span style="color:black;margin-left:2em;">Helpful?</span>							
									<input type="text" class="hidden" value="<?php echo $rewiews['review_for_user_id']; ?>" name="reviewId">
									<input type="submit" class="btn btn-success btn-sm"  value="Yes">
								</form>	
								</div>
								<div class="inline">
								<form method="POST" class="helpfulNo" >
									<input type="text" class="hidden" value="<?php echo $rewiews['review_for_user_id']; ?>" name="reviewId">
									<button type="submit" class="btn btn-danger btn-sm" >No</button>
								</form>
								</div>
							</div>
							<!--close the php if loop-->
							<?php } ?>
							
						</div>
						<div class="text text-right">
							<span id="helpful<?php echo $rewiews['review_for_user_id'];?>"><?php echo $rewiews['helpful_count']; ?></span> people found this helpful.
						</div>	
						</footer>					
					</blockquote>
					
				<?php } ?>
					
					
					<div class="text text-center" onclick="openMoreReviewsModal()" id="showMore"><i class="fa fa-plus-circle" aria-hidden="true"></i> Show more</div>
					
					
				
			</div>
		</div>
	</div>

		
<div id="CommentModal" class="modal" onclick="closeCommentModal()" >
  <div class="modal-content" onclick="event.stopPropagation();">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" onclick="closeCommentModal()">&times;</button>
        <h4 class="modal-title">Comments</h4>
      </div>
      <div class="modal-body">
		<form id="enterCommentForUserReview" method="POST">
			<input type="text" value="" class="hidden" id="reviewId" name="reviewId">
			<p><input type="text" placeholder="Your comment goes here" style="border:none;" class="form-control" name="commentText" id="commentText"></p>
			<div class="text-right"><button type="submit" class="btn btn-primary" >Save Comment</button></div>
		</form>
	  </div>
	  <div class="modal-body">
	  <div class="text-center"><h4 class="modal-title">Previous Comments</h4></div>
	  <div style="overflow: scroll; max-height:15em;" id="previousComments">
		  
	  </div>
	  </div>
      <div class="modal-footer">
		
        <button type="button" class="btn btn-default" data-dismiss="modal" onclick="closeCommentModal()">Close</button>
      </div>
  </div>
</div>



<div id="MoreReviewModal" class="modal" onclick="closeMoreReviewsModal()" >
  <div class="modal-content" onclick="event.stopPropagation();">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" onclick="closeMoreReviewsModal();">&times;</button>
        
      </div>
      <div class="modal-body" style="overflow: scroll; max-height:20em;">
	  <?php 
		$sql_get_reviews = "SELECT * FROM review_for_user WHERE review_for_email = '$email' ORDER BY helpful_count DESC LIMIT 3,999999999999999";
		$result5 = $mysqli->query($sql_get_reviews);

		?>
		<?php while ($rewiews = $result5->fetch_assoc()) { ?>
					<blockquote>
						<div>
						
						<?php 
							$review_by_email = $rewiews['review_by_email'];
							$sql_get_profile_pic ="SELECT * FROM users WHERE email = '$review_by_email'"; 
							$result6 = $mysqli->query($sql_get_profile_pic);
							$arry = $result6->fetch_assoc();
							$pth = $arry['profile_pic_path'];
						?>
						
							<img src="<?php echo $pth;?>" class="img-circle profile-pic">	


							<?php for( $i = 0; $i< $rewiews['rating_stars']; $i++ ) { ?>
									 <span class="glyphicon glyphicon-star" style="color:yellow; font-size:1.3em;"></span>
							<?php } ?>	
							
							<?php for( $i = 0; $i<(5 -  $rewiews['rating_stars']); $i++ ) { ?>
									 <span class="glyphicon glyphicon-star-empty" style=" font-size:1.3em;"></span>
							<?php } ?>	
							
							<?php echo $rewiews['review_text'];?>
						</div>
						<footer style="margin-top:1em;">by <a href=<?php echo "profile.php?email=".urlencode(base64_encode($rewiews['review_by_email']));?>> <?php echo $rewiews['review_by'];?> </a> on <?php echo $rewiews['review_date'];?>
						
						<div class="text text-right">
							<div class="inline"><button type="submit" class="btn btn-primary btn-sm" onclick="openCommentsModal('<?php echo $rewiews['review_for_user_id'];?>')">Comments (<span id="commentCount<?php echo $rewiews['review_for_user_id'];?>"><?php require  'commentCount.php'; ?></span> )</button></div>
							<!-- if not voted helpfullness before then using ajax delete the content once voted -->
							<?php
								$e = $_SESSION['email'];
								$reviewId=$rewiews['review_for_user_id'];
								$sql_check = "SELECT * FROM vote_helpful_review_for_user WHERE voted_by_email='$e' AND for_which_review_id='$reviewId'";
								$result_check = $mysqli->query($sql_check);
								$count_check = mysqli_num_rows($result_check);
								if($count_check == 0 && $_SESSION['email'] != $email){
							?>
							<div id="helpfullnessMoreReviews<?php echo $rewiews['review_for_user_id'];?>" class="inline">
								<div class="inline">							
								<form method="POST" class="helpfulYesMoreReviews" >								
									<span style="color:black;margin-left:2em;">Helpful?</span>							
									<input type="text" class="hidden" value="<?php echo $rewiews['review_for_user_id']; ?>" name="reviewId">
									<input type="submit" class="btn btn-success btn-sm"  value="Yes">
								</form>	
								</div>
								<div class="inline">
								<form method="POST" class="helpfulNoMoreReviews" >
									<input type="text" class="hidden" value="<?php echo $rewiews['review_for_user_id']; ?>" name="reviewId">
									<button type="submit" class="btn btn-danger btn-sm" >No</button>
								</form>
								</div>
							</div>
							<!--close the php if loop-->
							<?php } ?>
							
						</div>
						<div class="text text-right">
							<span id="helpfulMoreReviews<?php echo $rewiews['review_for_user_id'];?>"><?php echo $rewiews['helpful_count']; ?></span> people found this helpful.
						</div>	
						</footer>					
					</blockquote>
					
				<?php } ?>
		

        
      </div>
	  <div class="modal-footer">		
        <button type="button" class="btn btn-default" data-dismiss="modal" onclick="closeMoreReviewsModal()">Close</button>
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
		<script src="js/profile.js"></script>
		
		
		
	
		
		
		

    </body>
</html>