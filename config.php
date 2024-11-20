<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVERNAME', "localhost");
define('DB_USERNAME', "nicole");
define('DB_PASSWORD', "12345");
define('DB_NAME', "demo");
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
