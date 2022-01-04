<?php
	$serverName = "localhost";
	$username = "root";
	$password = "";
	$myDB = "db_ck";
	 try{
		$conn = new PDO("mysql:host=$serverName;dbname=$myDB", $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	 }catch (PDOException $e){
		 echo "Connection failed" . $e->getMessage();
		 exit();
	 }

?>