  <?php
require 'db.php';

?>
 
 
 <?php

if(is_array($_FILES)) {
if(is_uploaded_file($_FILES['modalImg']['tmp_name'])) {
$sourcePath = $_FILES['modalImg']['tmp_name'];
$targetPath = "propertyModalImgs/".rand().$_FILES['modalImg']['name'];
$propID = $_POST['propID'];
$sql = "INSERT INTO property_images(property_id, img_path) VALUES ('$propID','$targetPath')";

$mysqli->query($sql);
if(move_uploaded_file($sourcePath,$targetPath)) {
echo $targetPath; 
?>
<?php
}
}
}
?>

<?php 

?>