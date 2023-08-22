<?php
$servername = "localhost";
$username = "root";
$password = "";
$upwdb = "upwork2";

// Create connection
$db = mysqli_connect($servername, $username, $password, $upwdb);

// Check connection
if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}
?>