<?php
$host = "localhost";
$user = "root"; 
$password = ""; 
$dbname = "source";

//Create connection
$conn = new mysqli('localost', 'root', '', 'source');

//Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>