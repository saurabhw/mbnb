 <?php
 require 'db.php';

$newWelcomeMessage = $mysqli->escape_string(urldecode ($_GET['newWelcomeMessage']));

$propId = $mysqli->escape_string($_GET['propId']);

$sql = "UPDATE property SET family_message='$newWelcomeMessage' WHERE property_id='$propId' ";

$mysqli->query($sql);

$mysqli->close();
 ?>