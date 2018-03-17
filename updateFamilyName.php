<?php
require 'db.php';

$newFamilyName = $mysqli->escape_string(urldecode ($_GET['newFamilyName']));

$propId = $mysqli->escape_string($_GET['propId']);

$sql = "UPDATE property SET family_name='$newFamilyName' WHERE property_id='$propId' ";

$mysqli->query($sql);

$mysqli->close();
?>