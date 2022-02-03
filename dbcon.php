<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'phpmyadmin');

$conn = new mysqli('localhost','root','','phpmyadmin');
if ($conn->connect_error) {
    die('Error : ('. $conn->connect_errno .') '. $conn->connect_error);
}
try {
	$pdo = new PDO("mysql:host=".DB_SERVER.";dbname=".DB_NAME, DB_USERNAME, DB_PASSWORD);
} catch( PDOException $e){
	die("ERROR: Could not connect. ". $e->getMessage());
}
?>
