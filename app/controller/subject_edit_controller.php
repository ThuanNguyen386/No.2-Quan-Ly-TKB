<?php
    if(!isset($_SESSION)) {
        @ob_start();
        session_start();
    }
    if (isset($_GET['id'])){
        $_SESSION['id'] = $_GET['id'];
    }
    require_once('./subject_edit_input_controller.php');
?>
