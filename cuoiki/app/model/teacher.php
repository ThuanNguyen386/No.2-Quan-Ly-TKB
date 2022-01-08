<?php
include('../common/db.php');
 function searchAllTeacher() {
        require('../common/db.php');
        $sql = "SELECT * FROM teachers";
        $data = $conn -> prepare($sql);
        $data -> execute();
        $array=[];
        foreach($data as $row)
            $array = array_merge($array, [$row]);// phương thức gộp mảng
        return $array;
    }
function searchNameTeacher($id) {
    require('../common/db.php');
        $sql = "SELECT name FROM teachers WHERE id='$id'";
          $data = $conn -> prepare($sql);
        $data -> execute();
        foreach($data as $row)
            return $row['name'];
     }
?>
