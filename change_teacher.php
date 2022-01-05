<!DOCTYPE html>
<html>
<body>
<link rel="stylesheet" href="./form_change_teacher.css">
<form action="change_teacher_confirm.php" method="POST">
    <label class="label" id="Name">Họ và Tên</label>
    <input type="text" name="Name" value=""><br>
    <label class="label "id="Specialized">Bộ môn</label>
    <select name="Specialized">
            <option value="0">None</option>
            <?php
            foreach($subject as $row => $value){
                echo '<option value="'.$value['name'].'">'.$value['name'].'</option>';
            }
            ?>
    </select><br> 
    <label class="label" id="Degree">Học vị</label>
    <select name="Degree">
            <option value="0">None</option>
            <?php
            foreach($degree as $row => $value){
                echo '<option value="'.$value['name'].'">'.$value['name'].'</option>';
            }
            ?>
    </select><br> 
    <label class="label" id="Avatar">Avatar</label>
    <input type="image"><br>
    <input type="browse"><br>
    <label class="label" id="Description">Mô tả thêm</label>
    <input type="textarea" name="Description" value="">
    <input type="submit" name="Confirm" value="Xác nhận">
</form>
</body>
</html>