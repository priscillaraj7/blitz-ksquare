<?php
include 'db_connect.php';
$sql = "SELECT * FROM products";
$result = $conn->query($sql);
?>