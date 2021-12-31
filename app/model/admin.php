<?php

    function checkLoginid($login_id){
        require '../common/configDB.php';
        $sql= "SELECT login_id from admin where login_id ='" . $login_id . "' ";
        $statement = $connect->prepare($sql);
        // $statement->bindParam(':login_id', $_POST["name_id"], PDO::PARAM_STR);
        $statement->execute();
        return $statement;
    }
    function updateRequestToken($login_id,$token){
        require '../common/configDB.php';
        $sql="UPDATE admin SET reset_password_token ='" . $token . "' WHERE login_id='" . $login_id . "' ";
        $statement = $connect->prepare($sql);
        // $statement->bindParam(':token', $token);
        // $statement->bindParam(':login_id', $login_id, PDO::PARAM_STR);
        $statement->execute();
        return $statement;
    }
    function getLoginid($login_id){
        require '../common/configDB.php';
        $sql = "SELECT * FROM admin where reset_password_token IS not NULL";
        $statement =$connect ->prepare($sql);
        $statement ->execute();
        return $statement;
    }
    function updateResetToken($login_id){
        require '../common/configDB.php';
        $sql="UPDATE admin SET reset_password_token = NULL WHERE login_id='" . $login_id . "' ";
        $statement = $connect->prepare($sql);
        $statement->execute();
        return $statement;
    }
?>