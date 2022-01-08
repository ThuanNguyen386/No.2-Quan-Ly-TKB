<?php
    if(!isset($_SESSION)) {
        @ob_start();
        session_start();
    }

    $school_years = [1=>"Năm 1", 2=>"Năm 2", 3=>"Năm 3", 4=>"Năm 4"];

    $subject =  $_SESSION['subject'];
    $school_year =  $_SESSION['school_year'];
    $description =  $_SESSION['description'];
    $avatar =  $_SESSION['browser-text'];
    $src = $_SESSION['target_file'];
    $_SESSION['confirm'] = 1;

    require_once '../view/subject_edit_confirm.php';
?>