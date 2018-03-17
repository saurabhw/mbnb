<?php
/* Database connection settings */
$host = 'localhost';
$user = 'root';
$pass = 'compsci';
$db = 'Mbnb';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
?>