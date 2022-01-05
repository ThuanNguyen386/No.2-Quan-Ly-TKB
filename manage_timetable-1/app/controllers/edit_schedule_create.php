<?php
require_once './app/models/teacher.php';
require_once './app/models/subject.php';

class EditScheduleCreate{
    public function __construct(){
        $_SESSION['edit-schedule'] = '';
        if(isset($_REQUEST['confirm'])){
            if(empty($_REQUEST['khoa-hoc'])){
                $_SESSION['edit-schedule']="Hãy chọn khóa học";
            }
            else if(empty($_REQUEST['subject'])){
                $_SESSION['edit-schedule']="Hãy chọn môn học";
            }
            else if(empty($_REQUEST['teacher'])){
                $_SESSION['edit-schedule']="Hãy chọn giáo viên";
            }
            else if(empty($_REQUEST['day'])){
                $_SESSION['edit-schedule']="Hãy chọn thứ";
            }
            else if(empty($_REQUEST['tiethoc'])){
                $_SESSION['edit-schedule']="Hãy chọn tiết học";
            }
            else if(empty(trim($_REQUEST['description']))){
                $_SESSION['edit-schedule']="Hãy nhập chú ý";
            }
            else{
                $khoa = $_REQUEST['khoa-hoc'];
                $subject = $_REQUEST['subject'];
                $teacher = $_REQUEST['teacher'];
                $day = $_REQUEST['day'];
                $lesson = $_REQUEST['tiethoc'];
                $description = $_REQUEST['description'];
                $_SESSION['edit-schedule'] =[$khoa, $subject,  $teacher, $day , $lesson, $description];
                header('location:'.URLROOT.'/?router=edit-schedule-confirm');
            }
            
            

        }
    }
}
$EditScheduleCreate = new EditScheduleCreate();

$allSubject = $Subject->searchAllSubject();
$allTeacher = $Teacher->searchAllTeacher();

require_once './app/views/edit_schedule_create.php';