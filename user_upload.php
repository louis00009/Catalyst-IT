<?php 


$host = 'localhost';
$username = 'louis';
$password = 'louis';
$database = 'users';

// Create connection
$conn = new mysqli($host, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// select users table 
$conn->select_db($dbname);





$conn->close();




?>

