<?php
define('DB_SERVER', 'fdb27.biz.nf');
define('DB_USERNAME', '3790681_rvmsc');
define('DB_PASSWORD', 'lJP-wgGI0x[-q.Zp');
define('DB_NAME', '3790681_rvmsc');

$conn = new mysqli('fdb27.biz.nf','3790681_rvmsc','lJP-wgGI0x[-q.Zp','3790681_rvmsc');
if ($conn->connect_error) {
    die('Error : ('. $conn->connect_errno .') '. $conn->connect_error);
}
try {
	$pdo = new PDO("mysql:host=".DB_SERVER.";dbname=".DB_NAME, DB_USERNAME, DB_PASSWORD);
} catch( PDOException $e){
	die("ERROR: Could not connect. ". $e->getMessage());
}
?>
