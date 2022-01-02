<?php
    //kiem tra ton tai cua login_id
    function checkLoginid($login_id){
        require '../common/configDB.php';
        $sql= "SELECT login_id from admin where login_id ='" . $login_id . "' ";
        $statement = $connect->prepare($sql);
        $statement->execute();
        return $statement;
    }

    //update request token
    function updateRequestToken($login_id,$token){
        require '../common/configDB.php';
        $sql="UPDATE admin SET reset_password_token ='" . $token . "' WHERE login_id='" . $login_id . "' ";
        $statement = $connect->prepare($sql);
        $statement->execute();
        return $statement;
    }

    //get login_id with reset_password_token != NULL
    function getLoginid(){
        require '../common/configDB.php';
        $sql = "SELECT login_id FROM admin where reset_password_token not like '' ";
        $statement =$connect ->prepare($sql);
        $statement ->execute();
        return $statement;
    }

    //update reset token
    function updateResetToken($login_id){
        require '../common/configDB.php';
        $sql="UPDATE admin SET reset_password_token = NULL WHERE login_id='" . $login_id . "' ";
        $statement = $connect->prepare($sql);
        $statement->execute();
        return $statement;
    }

    //update password
    function updatePassword($login_id, $newpassword,$current_time){
        require '../common/configDB.php';
        //$newpass= md5($newpassword);
        //$sql = "UPDATE admin SET password ='".md5($newpassword)."', reset_password_token = '', update='".$current_time."' WHERE login_id = ' ".$login_id." '";
        $sql= "UPDATE admin SET password = '" .md5($newpassword). "', reset_password_token = '', updated ='" .$current_time. "' WHERE login_id = '" .$login_id. "'";
        $statement = $connect->prepare($sql);
        $statement->execute();
        return $statement;
    }
?>