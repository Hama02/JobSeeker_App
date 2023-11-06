<?php
$servername = "127.0.0.1:3325";
$username = "user1";
$password = "";
$dbname = "jobs";

$connection = mysqli_connect($servername, $username, $password, $dbname);
if (!$connection) {
  die("Connection failed: " . mysqli_connect_error());
}
?>