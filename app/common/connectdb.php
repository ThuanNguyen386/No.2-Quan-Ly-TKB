<?php
$server = "localhost";
$username = "root";
$password = "";
$database = " no.2-quan-ly-tkb";

try {
  $pdo = new PDO("mysql:host=$server;dbname=$database;charset=UTF8", $username, $password);
  // set the PDO error mode to exception
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}




?>


