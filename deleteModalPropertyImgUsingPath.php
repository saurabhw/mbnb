<?php
require 'db.php';
$path = $_POST['path'];
$propId = $_POST['propId'];
$sql = "DELETE FROM property_images WHERE img_path ='$path' AND property_id='$propId' ";
$mysqli->query($sql);

?>