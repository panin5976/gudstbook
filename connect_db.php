<?php
$servername = "localhost";
$username = "Cpe5976";
$password = "9";
$db_name = "Cpe5976";

$conn = new mysqli($servername,$username,$password,$db_name);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
?>