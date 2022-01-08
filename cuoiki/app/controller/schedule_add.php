<?php
$school_yearErr = $subject_idErr = $teacher_idErr = $week_dayErr = $lessonErr = $notesErr  = "";
$school_yearTr = $subject_idTr = $teacher_idTr = $week_dayTr = $lessonTr = $notesTr =  "";


if (isset($_POST['btnAdd'])) {

    if ($_POST['school_year'] == "none") {
        $school_yearErr = "Hãy chọn năm học";
    } else {
        $school_yearTr = ($_POST["school_year"]);
    }

    if ($_POST['subject_id'] == "none") {
        $subject_idErr = "Hãy chọn môn học";
    } else {
        $subject_idTr = ($_POST["subject_id"]);
    }
    if ($_POST['teacher_id'] == "none") {
        $teacher_idErr = "Hãy chọn giáo viên";
    } else {
        $teacher_idTr = ($_POST["teacher_id"]);
    }

    if ($_POST['week_day'] == "none") {
        $week_dayErr = "Hãy chọn ngày học";
    } else {
        $week_dayTr = ($_POST["week_day"]);
    }
    /* if ($_POST['lesson'] == "none") {
        $lessonErr = "Hãy chọn tiết học";
    } else {
        $lessonTr = ($_POST["lesson"]);
    } */

    if (trim($_POST['notes']) == "") {
        $notesErr = "Hãy nhập chú ý";
    } else if (strlen(trim($_POST['notes'])) > 300) {
        $notesErr = 'Nhập không quá 300 ký tự';
    } else {
        $notesTr = trim($_POST['notes']);
    }

    if ($school_yearTr != "" && $subject_idTr != "" && $teacher_idTr != "" && $week_dayTr != "" && $lessonTr != "" && $notesTr !=  "") {
        header("Location: ../view/schedule_add_confirm.php?school_year=$school_yearTr&subject_id=$subject_idTr&teacher_id=$teacher_idTr&week_day=$week_dayTr&lesson=$lessonTr&notes=$notesTr");
    }
}
