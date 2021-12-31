<?php
    include_once ("../model/admin.php");
    $nameErr="";
    $name="";
    if($_SERVER['REQUEST_METHOD'] == "POST") {
        // $valid = true;
        if (isset($_POST["forgot_pass"])) {
            if (empty($_POST['name_id'])) {
                $nameErr = "Hãy nhập login id";
            } else {
                $name = $_POST["name_id"];
            }
            if (0< strlen($_POST['name_id']) && strlen($_POST['name_id'])< 4) {
                $nameErr = "Hãy nhập login id tối thiểu 4 ký tự";
            }else{
            
                $result= checkLoginid($_POST['name_id']) ->rowCount();
                if(strlen($_POST['name_id'])> 3){
                    if($result> 0){
                        // $valid=false;
                        // $nameErr="Login id không tồn tại trong hệ thống";
                        $token= microtime();
                        updateRequestToken($_POST['name_id'],$token);
                        header('location:../../login.php');
                    }else{
                        $nameErr="Login id không tồn tại trong hệ thống";
                    }
                }
            }
        }
    }
    //     if($valid){
    //         $token = microtime();
    //         $_SESSION['name_id']=$_POST['name_id'];
    //         $sql="UPDATE admin SET reset_password_token =:token WHERE login_id=:login_id";
    //         $statement = $connect->prepare($sql);
    //         $statement->bindParam(':token', $token);
    //         $statement->bindParam(':login_id', $_POST["name_id"], PDO::PARAM_STR);
    //         $statement->execute();
    //         header('location:login.php');
    //         exit();
    //     }
    // }
    // function test_input($data)
    // {
    //     $data = trim($data);
    //     $data = stripslashes($data);
    //     $data = htmlspecialchars($data);
    //     return $data;
    // }
?>