<?php 
require 'db.php';


$shortDesc = $mysqli->escape_string(urldecode ($_GET['shortDesc']));
$propId = $mysqli->escape_string($_GET['propId']);

//echo $shortDesc . " " .  $propId;
$sql = "UPDATE property SET short_desc = '$shortDesc' WHERE property_id = '$propId'";

$mysqli->query($sql);


?>