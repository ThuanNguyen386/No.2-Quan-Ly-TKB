<?php
   
    if(!isset($_SESSION)) {
        @ob_start();
        session_start();
    }

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        if(isset($_POST['back'])){
            // header('location: subject_input_controller.php');
            require_once 'subject_edit_controller.php';
        }
        if(isset($_POST['submit'])) {
            require_once 'pre_subject_edit_complete.php';
        }
    }
?>