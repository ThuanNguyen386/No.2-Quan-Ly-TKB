<?php
    if(!isset($_SESSION)) {
        @ob_start();
        session_start();
    }
    
    $_SESSION['id'] = 2;
    require_once('./subject_edit_input_controller.php');
?>
