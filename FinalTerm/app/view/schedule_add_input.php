<?php
require '../common/define.php';
require '../controller/schedule_add.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../web/css/schedule/addSchedule.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Đăng ký thời khóa biểu</title>
    <style>
        input,
        select {
            min-height: 40px !important;
        }
    </style>
</head>

<body>
    <div class="main container">
        <form action="" method='POST' name='addform' class="col-sm-11" enctype="multipart/form-data">
            <div class="col-sm-11">
                <div class="col-sm-3">
                    <p>Khóa</p>
                </div>
                <div class="col-sm-8">
                    <select name="school_year" id="school_year" class="school_year">
                        <option value="none"></option>
                        <?php foreach ($listSchool_year as $key => $school_year) : ?>
                            <option value='<?php echo $key ?>'>
                                <?php echo $school_year ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                    <div><span><?php echo $school_yearErr; ?></span></div>
                </div>
            </div>
            <div class="col-sm-11">
                <div class="col-sm-3">
                    <p>Môn học</p>
                </div>
                <div class="col-sm-8">
                    <select name="subject_id" id="subject_id" class="subject_id">
                        <option value="none"></option>
                        <?php foreach ($listSubject_id as $key => $subject_id) : ?>
                            <option value='<?php echo $key ?>'>
                                <?php echo $subject_id ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                    <div><span><?php echo $subject_idErr; ?></span></div>
                </div>
            </div>
            <div class="col-sm-11">
                <div class="col-sm-3">
                    <p>Giáo viên</p>
                </div>
                <div class="col-sm-8">
                    <select name="teacher_id" id="teacher_id" class="teacher_id">
                        <option value="none"></option>
                        <?php foreach ($listTeacher_id as $key => $teacher_id) : ?>
                            <option value='<?php echo $key ?>'>
                                <?php echo $teacher_id ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                    <div><span><?php echo $teacher_idErr; ?></span></div>
                </div>
            </div>

            <div class="col-sm-11">
                <div class="col-sm-3">
                    <p>Thứ</p>
                </div>
                <div class="col-sm-8">
                    <select name="week_day" id="week_day" class="week_day">
                        <option value="none"></option>
                        <?php foreach ($listWeek_day as $key => $week_day) : ?>
                            <option value='<?php echo $key ?>'>
                                <?php echo $week_day ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                    <div><span><?php echo $week_dayErr; ?></span></div>
                </div>
            </div>

            <!-- <div class="col-sm-11">
                <div class="col-sm-3">
                    <p>Tiết học</p>
                </div>
                <div class="col-md-6">
                    <input id="lesson1" type="checkbox" name="lesson[]" value="1">
                    <label for="lesson1">Tiết 1</label>
                    <input id="lesson2" type="checkbox" name="lesson[]" value="2">
                    <label for="lesson2">Tiết 2</label>
                    <input id="lesson3" type="checkbox" name="lesson[]" value="3">
                    <label for="lesson3">Tiết 3</label>
                    <p>...</p>
                    <input id="lesson9" type="checkbox" name="lesson[]" value="9">
                    <label for="lesson9">Tiết 9</label>
                    <input id="lesson10" type="checkbox" name="lesson[]" value="10">
                    <label for="lesson10">Tiết 10</label>
                </div>
            </div> -->

            <div class="col-sm-11">
                <div class="col-sm-3">
                    <p>Chú ý</p>
                </div>
                <div class="col-sm-8">
                    <label for="" class="col-sm-8">
                        <textarea type="text" rows="5" cols="80" name="notes" id="notes">
                        </textarea>
                        <div><span><?php echo $notesErr; ?></span></div>
                    </label>

                </div>
            </div>
            <div class="btnadd">
                <button type='submit' name='btnAdd'>Xác nhận</button>
            </div>
        </form>
    </div>
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
</body>

</html>