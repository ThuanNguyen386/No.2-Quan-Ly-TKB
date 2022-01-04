<?php
require 'define.php';

try {
	$pdo = new PDO("mysql:host=$server;dbname=$database", $username, $password);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	$status = 1;
} catch (PDOException $e) {	
	echo "Connection failed" . $e -> getMessage();
	$status = 0;
}
?>