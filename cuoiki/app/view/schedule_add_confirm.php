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
                    <input type="text" name="subject_id" disabled="true" value="<?php foreach ($search_sub as $value) : ?><?php if ($subject_id == $value[0]) {
                                                                                                                                echo $value[1];
                                                                                                                            } ?><?php endforeach; ?>">

                </div>
            </div>
            <div class="col-sm-11">
                <div class="col-sm-3">
                    <p>Giáo viên</p>
                </div>
                <div class="col-sm-8">
                    <input type="text" name="teacher_id" disabled="true" value="<?php foreach ($search_teacher as $value) : ?><?php if ($teacher_id == $value[0]) {
                                                                                                                                    echo $value[1];
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
            <div class="col-sm-11">
                <div class="col-sm-3">
                    <p>Tiết học</p>
                </div>

                <div class="col-sm-9">
                    <?php for ($i = 1; $i <= 10; $i++) { ?>
                        <p class="col-sm-3" for="" style="width: 20px;padding: 0px;"> Tiết <?php echo $i ?> </p>
                        <input class="col-sm-1" id="" type="checkbox" name="lesson" value=<?php echo $i ?> style="width: 20px;" <?php if ($lesson == $i) { ?> checked <?php  } ?>>

                    <?php  } ?>
                </div>
            </div>
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