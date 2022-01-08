<?php
require '../model/schedule.php';
$school_year = $_GET['school_year'];
$subject_id = $_GET['subject_id'];
$teacher_id = $_GET['teacher_id'];
$week_day = $_GET['week_day'];
$notes = $_GET['notes'];
$lesson = $_GET['lesson'];
date_default_timezone_set("Asia/Bangkok");
$created = date("Y-m-d h:i:s");
$loading = 0;

if (isset($_POST['btnAdd'])) {
    $loading += 1;
    if ($loading == 1) {
        add($school_year, $subject_id, $teacher_id, $week_day, $lesson, $notes, $created);
        router();
    }
}

function router()
{
    $status = 'true';
    header("Location: ../view/schedule_add_complete.php?status=$status");
}
