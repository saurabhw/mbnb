<?php require_once  'db.php';
//session_start(); putting this at the top in profile.php or it gives warning
require_once  'checkIf.php';

//Getting the profile pic depending upon the session email
$email = $_SESSION['email'];
$sql = "SELECT * FROM users WHERE email='$email'";

$result = $mysqli->query($sql);
$user = $result->fetch_assoc();
$path = $user['profile_pic_path'];

$encodedEmail = urlencode(base64_encode($email));

?>
		<link href="css/jquery-ui.css" rel="stylesheet">
		<?php include 'autoComplete.php';?>
		<nav class="navbar navbar-default" id="nav">
		  <div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				
			  </button>
			  <a class="navbar-brand" href="index.php"><img src="img/brand.jpg" id="brand" class="img-responsive"></a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			  <form class="navbar-form navbar-left">
				<div class="form-group">
				  <input type="text" class="form-control where" placeholder="Where" name="Where" id="pac-input">
				</div>
				<div class="form-group">
					<input id="checkin" type="text" placeholder="Check-in" class="form-control booking">	
					<!--<input type="date" placeholder="Check-in" onchange="setCheckOut()" onClick="$(this).removeClass('placeholderclass')" class="form-control dateclass placeholderclass" id="check-in">-->
				</div>
				<div class="form-group">
					<input id="checkout" type="text" placeholder="Check-out" class="form-control booking">		
					<!--<input type="date" placeholder="Check-out" onClick="$(this).removeClass('placeholderclass')" class="form-control dateclass placeholderclass" id="check-out">-->
				</div>
				<div class="form-group">
				  <input type="number" step="1" min="1" class="form-control" placeholder="Guests" name="Guests" id="guests"  value="">
				</div>
				<button type="submit" class="btn btn-default form-control" style="background-color:lightgrey">Search</button>
			  </form>
			  <ul class="nav navbar-nav navbar-right" >
				<?php if(checkIfHostThenDoNotCreate()){ ?>
					<li><a href="#"><i class="fa fa-home" aria-hidden="true" id="homeIcon"></i><span class="small"> Host a Missionary</span></a></li>
				<?php } ?>
				
				<?php if(checkIfMissionaryThenDoNotCreate()){ ?>
					<li><a href="#"><i class="fa fa-user" aria-hidden="true" id="homeIcon"></i><span class="small"> Be a Missionary</span></a></li>
				<?php } ?>	
				
				<li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true" id="messageIcon"></i><span class="badge" style="background-color:red;">5</span></a></li> 
				<li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-smile-o" aria-hidden="true" id="smile"></i><span class="small">Hello <br><?php echo $_SESSION['first_name']; ?></span><span class="caret"></span></a>
				  <ul class="dropdown-menu" style="width:20em;">
					<!--<li  class="text-muted"><a>HOST / MISSIONARY</a></li>-->
					<li><a href="profileEdit.php">Profile Settings</a></li>
					<li><a href="tripHistory.php">Trip History</a></li>
					<li><a href="<?php echo "myHomes.php?email=".$encodedEmail;?>">Add or Update your Homes</a></li><!--If user is a host-->
					<li role="separator" class="divider"></li>
					<li><a href="logout.php">Log Out</a></li>
				  </ul>
				</li>
				<li>
					<a href="<?php echo "profile.php?email=".urlencode(base64_encode($user['email']));?>"><img src="<?php if($path!='' or $path!=null){ echo $path;} else{ echo 'img/no-image.jpg';} ?>" class="img-circle profile-pic"></a>
				</li>
			  </ul>
			</div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
		
 

		<!-- Custom js -->
		
		
		
