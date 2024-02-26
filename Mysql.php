<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Day4";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check 
if (!$conn) {
   echo 'Connection failed';
}
?>
