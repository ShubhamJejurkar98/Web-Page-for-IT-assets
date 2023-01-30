<?php
$server = "localhost";
$username = "root";
$password = "";
$database = 'inventory_system';
    
//connect to the database
    $db = mysqli_connect($server, $username, $password,$database);


// Check connection
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
?>