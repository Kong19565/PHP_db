<?php
$servername = "localhost";
$username = "root";
$password = "kong19565";
$dbname = "db_killer";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>
