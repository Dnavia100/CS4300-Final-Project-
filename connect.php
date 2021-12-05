<?php
$servername = "localhost";
$username = "u535777520_naviad3";
$dbname = "u535777520_gaintrack";
$pass = ">^O3d>M5";

// Create connection
$conn = new mysqli($servername, $username, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 

?>
