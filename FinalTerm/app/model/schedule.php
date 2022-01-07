<?php
require '../common/connectDB.php';

$sqlSchedule = 'SELECT * FROM `schedules`';
$listSchedule = $conn->query($sqlSchedule);
$listSchedule->execute();
function add($school_year, $subject_id, $teacher_id, $week_day, $notes, $created)
{
    global $conn;
    if ($school_year != "" && $subject_id != "" && $teacher_id != "" && $week_day != "" && $notes != "" && $created != "") {
        $sql = "INSERT INTO `schedules`(`school_year`, `subject_id`,`teacher_id`,`week_day`,`notes`,`created`) VALUES ('$school_year','$subject_id','$teacher_id','$week_day','$notes','$created')";
        $success = $conn->prepare($sql);
        $success->execute();
    };
}
