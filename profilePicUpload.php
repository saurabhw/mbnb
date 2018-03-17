 <?php
require 'db.php';
session_start();
?>
 
 
 <?php

if(is_array($_FILES)) {
if(is_uploaded_file($_FILES['profilePic']['tmp_name'])) {
$sourcePath = $_FILES['profilePic']['tmp_name'];
$targetPath = "profilePics/".rand().$_FILES['profilePic']['name'];
$_SESSION['profilePicPath'] = $targetPath;
if(move_uploaded_file($sourcePath,$targetPath)) {
?>
<?php echo $targetPath; ?>
<?php
}
}
}
?>