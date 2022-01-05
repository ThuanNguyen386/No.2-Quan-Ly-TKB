<?php
require_once('./app/models/subject.php');

$school_years = [1=>"Năm 1", 2=>"Năm 2", 3=>"Năm 3", 4=>"Năm 4"];
$errors = ["subject"=>"Hãy nhập tên môn học", 
            "school_year"=>"Hãy chọn khóa học", 
            "description"=>"Hãy nhập mô tả chi tiết",
            "browser-text"=>"Hãy chọn avatar"
            ];

if(!isset($_SESSION['confirm'])){
    $subject = new Subject;
    $subjectObject = $subject->getSubject($_SESSION['id']);

    $val_subject =  $subjectObject['name'];
    $school_year =  explode(', ',$subjectObject['school_year']);
    $description =  $subjectObject['description'];
    $browser_text =  $subjectObject['avatar'];
    $src = '../../web/avatar/'.$browser_text;
} else {
    $val_subject =  $_SESSION['subject'];
    $school_year =  $_SESSION['school_year'];
    $description =  $_SESSION['description'];
    $browser_text =  $_SESSION['browser-text'];
    $src = $_SESSION['target_file'];
    unset($_SESSION['confirm']);

}
    require_once './app/views/subject_edit_input.php';

?>