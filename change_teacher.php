<!DOCTYPE html>
<html>
<body>
    <?php
    include 'uploadfromdb.php';
    ?>
<link rel="stylesheet" href="./form_change_teacher.css">
<form action="change_teacher_confirm.php" method="POST">
    <label class="label" id="Name">Họ và Tên</label>
    <input type="text" name="Name" value=""><br>
    <label class="label "id="Specialized">Bộ môn</label>
    <select class="input" name="Specialized">
            <option value="0">None</option>
            <option value="001">Khoa hoc may tinh</option>
            <option value="002">Khoa hoc du lieu</option>
            <option value="003">Hai duong hoc</option>
            ?>
    </select><br> 
    <label class="label" id="Degree">Học vị</label>
    <select class="input" name="Degree">
            <option value="0">None</option>
            <option value="001">Cu nhan</option>
            <option value="002">Thac si</option>
            <option value="003">Tien si</option>
            <option value="004">Pho giao su</option>
            <option value="005">Giao su</option>
            ?>
    </select><br> 
    <label class="label" id="Avatar">Avatar</label>
    <input class="input" type="image" name="Avatar" value="Image">
    <input class="input" type="button" name="Browse" value="Browse"><br>
    <label class="label" id="Description">Mô tả thêm</label>
    <input class="input" type="textarea" name="Description" value=""><br>
    <input class="button" type="submit" name="Confirm" value="Xác nhận">
</form>
</body>
</html>