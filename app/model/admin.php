<?php
require '../common/configDB.php';
    //kiem tra ton tai cua login_id
    function checkLoginid($login_id){
        global $connect;
        $sql= "SELECT login_id from admin where login_id ='" . $login_id . "' ";
        $statement = $connect->prepare($sql);
        $statement->execute();
        return $statement;
    }

    //update request token
    function updateRequestToken($login_id,$token){
        global $connect;
        $sql="UPDATE admin SET reset_password_token ='" . $token . "' WHERE login_id='" . $login_id . "' ";
        $statement = $connect->prepare($sql);
        $statement->execute();
        return $statement;
    }

    //get login_id with reset_password_token != NULL
    function getLoginid(){
        global $connect;
        $sql = "SELECT * FROM admin where reset_password_token not like '' ";
        $statement =$connect ->prepare($sql);
        $statement ->execute();
        $result= $statement ->fetchAll(PDO:: FETCH_OBJ);
        return $result;
    }

    //update reset token
    function updateResetToken($login_id){
        global $connect;
        $sql="UPDATE admin SET reset_password_token = NULL WHERE login_id='" . $login_id . "' ";
        $statement = $connect->prepare($sql);
        $statement->execute();
        return $statement;
    }

    //update password
    function updatePassword($id, $newpassword,$current_time){
        global $connect;
        $sql= "UPDATE admin SET password = md5('$newpassword'), reset_password_token = '', updated ='$current_time' WHERE id = '$id'";
        $statement = $connect->prepare($sql);
        $statement->execute();
        return $statement;
    }
?>