<?php
define('DB_SERVER', 'localhost:3307');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'webdinamis');
 

$link = mysqli_connect("localhost:3307", "root", "", "webdinamis");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>