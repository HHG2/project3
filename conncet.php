<?php

$servername = "localhost";
$username = "almakey";
$password = "123";
$dbname = 'almakey';
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
 echo "Connected successfully"; 





?>