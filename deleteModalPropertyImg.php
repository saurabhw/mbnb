 <?php
	require 'db.php';
	$imgId = $_POST['imgId'];
	
	$sql = "DELETE FROM property_images WHERE image_id='$imgId'";
	$mysqli->query($sql);
 ?>