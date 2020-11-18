<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shoppingcart";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM products";
$result = $conn->query($sql);
?>