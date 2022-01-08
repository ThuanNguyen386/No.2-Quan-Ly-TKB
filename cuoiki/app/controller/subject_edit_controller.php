<?php
    if(!isset($_SESSION)) {
        @ob_start();
        session_start();
    }
    $_SESSION['id'] = $_GET['id'];
	echo $_SESSION['id'];
    //$_SESSION['id'] = 2;
	//$id = $_GET['id'];
    require_once('subject_edit_input_controller.php');
?>
