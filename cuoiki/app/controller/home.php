<?php	
	session_start();
	require '../model/admin.php';
    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']== 0){
        header("location:	../view/login.php");
    }
?>