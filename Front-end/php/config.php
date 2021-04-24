<?php
//Copied from https://www.tutorialrepublic.com/php-tutorial/php-mysql-login-system.php


/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'test');
/* Attempt to connect to MySQL database */
$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($conn->connect_error){
    die("ERROR: Could not connect. " . mysqli_connect_error());
} 
?>

