<?php
include('../common/db.php');

    // thuna - lay thong tin mon hoc
    function getSubject($id) {
        $query = "SELECT * FROM subjects WHERE id = $id";
        global $status;
        if($status == 1){
            global $pdo;
            $statement = $pdo -> prepare($query) ;
            $statement -> execute();
            $subject = $statement->fetchAll(PDO::FETCH_ASSOC);
        }
        return $subject[0];
    }

    // thuna - chinh sua thong tin mon hoc
    function editSubject($id, $name, $avatar, $description, $school_year) {
        $school_year = implode(', ',$school_year);
        $query = "  UPDATE subjects
                    SET name = '$name', 
                    avatar = '$avatar',
                    description = '$description',
                    school_year = '$school_year',
                    updated = CURRENT_TIMESTAMP
                    WHERE id = $id";
        global $status;
        if($status == 1){
            global $pdo;
            $statement = $pdo -> prepare($query) ;
            $statement -> execute();
        }
        return $status;
    }

    // thuna - lay ten anh cua mon hoc
    function getImgName($id) {
        $query = "SELECT avatar FROM subjects WHERE id = $id";
        global $status;
        if($status == 1){
            global $pdo;
            $statement = $pdo -> prepare($query) ;
            $statement -> execute();
            $subject = $statement->fetchAll(PDO::FETCH_ASSOC);
        }
        return $subject[0]['avatar'];
    }

    // print_r(explode(",",getSubject(1)['school_year']));
?>