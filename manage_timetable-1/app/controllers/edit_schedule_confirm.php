<?php 
$data = isset($_SESSION['edit-schedule']) ? $_SESSION['edit-schedule'] : [];
require_once './app/models/subject.php';
require_once './app/models/teacher.php';

class EditScheduleConfirm{
    public function __construct(){
        if(isset($_REQUEST['edit-new-schedule'])){
        
            header('location:'.URLROOT.'/?router=edit-schedule-complete');
        }
    }
}

$EditScheduleConfirm = new EditScheduleConfirm();

$subjectName = $Subject->searchNameSubject($data[1]); 
$teacherName = $Teacher->searchNameTeacher($data[2]); 
require_once './app/views/edit_schedule_confirm.php';