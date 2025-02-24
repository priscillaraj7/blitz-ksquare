<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "blitz_products";
$port = 3307; // Change to 3307 if MySQL runs on a different port

// Create connection
$conn = new mysqli($servername, $username, $password, $database, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>