<?php
require '../controller/schedule_add.php';
require '../common/define.php';
if ($_GET['status'] != 'true') {
    header("Location: ../view/schedule_add_input.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../web/css/schedule/addSchedule.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Phân công thời khóa biểu</title>
</head>

<body>
    <div class="content_complete container">
        <div class='content' style="text-align: center; padding: 20px 20px">
            <p>Bạn đã đăng ký thành công thời khóa biểu.</p>
            <a href="../../home.php"><u><i>Trở về trang chủ</i></u></p>
        </div>
    </div>
</body>

</html>