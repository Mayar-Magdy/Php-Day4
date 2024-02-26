<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Day4";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check 
if (!$conn) {
   echo 'Connection failed';
}
?>
