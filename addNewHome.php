 <?php 
	require_once  'db.php';
	
	$email = $mysqli->escape_string($_POST['email']);	
	
	
	$sql = "INSERT INTO property(owned_by_user_email, mian_img, rating_stars, short_desc, rate, family_pic, family_name, family_message, family_desc, limit_adult, limit_child, limit_infants, cleaning_charges, addr_street, addr_house_no, addr_city, addr_state, addr_country) VALUES('$email', 'img/no-image.jpg', '0', 'Short description goes here', '0', 'img/no-image.jpg', 'Family name goes here', 'Welcome message goes here', 'Family description goes here', '0', '0', '0', '0', 'Street address', 'house No', 'City', 'State', 'Country')";
	$mysqli->query($sql);
	
	
	
 ?>