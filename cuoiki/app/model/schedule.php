<?php
require '../common/db.php';

$staTeachers = 'SELECT * FROM `teachers`';
$staTeachers = $conn->query($staTeachers);
$staTeachers->execute();

$search_teacher = [];
foreach ($staTeachers as $row) {
    $id = $row['id'];
    $name = $row['name'];
    $search_teacher[] = array($id, $name);
}

$sqlSubject = 'SELECT * FROM `subjects`';
$sqlSubject = $conn->query($sqlSubject);
$sqlSubject->execute();

$search_sub = [];
foreach ($sqlSubject as $row) {
    $id = $row['id'];
    $name = $row['name'];
    $search_sub[] = array($id, $name);
}

function add($school_year, $subject_id, $teacher_id, $week_day, $lesson, $notes, $created)
{
    global $conn;
    if (
        $school_year != "" && $subject_id != "" && $teacher_id != "" && $week_day != ""
        && $lesson != "" && $notes != "" && $created !=  ""
    ) {
        $sql = "INSERT INTO `schedules`(`school_year`, `subject_id`,`teacher_id`,`week_day`,`lession`,`notes`,`created`)
         VALUES ('$school_year','$subject_id','$teacher_id','$week_day','$lesson','$notes','$created')";
        $success = $conn->prepare($sql);
        $success->execute();
    };
}
