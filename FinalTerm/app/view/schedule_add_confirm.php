<?php
require '../common/define.php';
require '../controller/schedule_add_confirm.php';
if ($_GET['school_year'] == "") {
    header("Location: ../view/schedule_add_input.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta school_year="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../web/css/schedule/addSchedule.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Xác nhận thời khóa biểu</title>
</head>

<body>
    <div class="main container">
        <form action="" method='POST' name='addform' class="col-sm-11" id="addform">
            <div class="col-sm-11">
                <div class="col-sm-3">
                    <p>Khóa</p>
                </div>
                <div class="col-sm-8">
                    <input type="text" name="school_year" disabled="true" value="<?php foreach ($listSchool_year as $key => $ye) : ?><?php if ($school_year == $key) {
                                                                                                                                            echo $ye;
                                                                                                                                        } ?><?php endforeach; ?>">

                </div>
            </div>
            <div class="col-sm-11">
                <div class="col-sm-3">
                    <p>Môn học</p>
                </div>
                <div class="col-sm-8">
                    <input type="text" name="subject_id" disabled="true" value="<?php foreach ($listSubject_id as $key => $sb) : ?><?php if ($subject_id == $key) {
                                                                                                                                        echo $sb;
                                                                                                                                    } ?><?php endforeach; ?>">

                </div>
            </div>
            <div class="col-sm-11">
                <div class="col-sm-3">
                    <p>Giáo viên</p>
                </div>
                <div class="col-sm-8">
                    <input type="text" name="teacher_id" disabled="true" value="<?php foreach ($listTeacher_id as $key => $tea) : ?><?php if ($teacher_id == $key) {
                                                                                                                                        echo $tea;
                                                                                                                                    } ?><?php endforeach; ?>">
                </div>
            </div>
            <div class="col-sm-11">
                <div class="col-sm-3">
                    <p>Thứ</p>
                </div>
                <div class="col-sm-8">
                    <input type="text" name="week_day" disabled="true" value="<?php foreach ($listWeek_day as $key => $d) : ?><?php if ($week_day == $key) {
                                                                                                                                    echo $d;
                                                                                                                                } ?><?php endforeach; ?>">
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
                        <textarea type="input" rows="5" cols="70" name="notes" id="notes" disabled="true"> <?php echo $notes ?>
                        </textarea>

                    </label>

                </div>
            </div>
            <div class="btnadd">

                <button type='button' name='btnEdit' onclick="history.back()">Sửa lại</button>
                <button type='submit' name='btnAdd' id="btnAdd">Đăng ký</button>
            </div>
        </form>
    </div>
</body>

</html>