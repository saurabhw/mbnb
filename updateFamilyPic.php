  <?php
require 'db.php';

?>
 
 
 <?php

if(is_array($_FILES)) {
if(is_uploaded_file($_FILES['newFamilyPic']['tmp_name'])) {
$sourcePath = $_FILES['newFamilyPic']['tmp_name'];
$targetPath = "familyImgs/".rand().$_FILES['newFamilyPic']['name'];
if(move_uploaded_file($sourcePath,$targetPath)) {
?>

<?php
	$pId = $_POST['propertyID'];
	$sql="UPDATE property SET family_pic = '$targetPath' WHERE property_id='$pId'";
	$mysqli->query($sql);
	$mysqli->close();
?>

<?php echo $targetPath; ?>
<?php
}
}
}
?>


