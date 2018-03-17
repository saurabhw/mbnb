  <?php
require 'db.php';

?>
 
 
 <?php

if(is_array($_FILES)) {
if(is_uploaded_file($_FILES['newTitleImg']['tmp_name'])) {
$sourcePath = $_FILES['newTitleImg']['tmp_name'];
$targetPath = "propertyTitleImgs/".rand().$_FILES['newTitleImg']['name'];
if(move_uploaded_file($sourcePath,$targetPath)) {
?>

<?php
	$pId = $_POST['propertyID'];
	$sql="UPDATE property SET mian_img = '$targetPath' WHERE property_id='$pId'";
	$mysqli->query($sql);
	$mysqli->close();
?>

<?php echo $targetPath; ?>
<?php
}
}
}
?>


