<?php
    require ("../model/admin.php");
    $error= array("admin01"=>"","admin02"=>"","admin03"=>"","admin04"=>"", "admin05"=>"","admin06"=>"");
    $new_password= array("admin01"=>"","admin02"=>"","admin03"=>"","admin04"=>"","admin05"=>"","admin06"=>"");

    $statement= getLoginid();

    if($_SERVER["REQUEST_METHOD"]=="POST"){
    //     foreach($statement as $result){
    //         for($i = 0; $i<sizeof($result); $i++){  
    //         if(isset($_POST["'.$result[$i].'"])){
    //             if(strlen($_POST["'.$result[$i].'"]) == 0){
    //                 $error["'.$result[$i].'"] = "Hãy nhập mật khẩu mới";
    //                 }else if(0< strlen($_POST["'.$result[$i].'"]) && strlen($_POST["'.$result[$i].'"]) < 6){
    //                          $error["'.$result[$i].'"] = "Hãy nhập mật khẩu có tối thiểu 6 ký tự";
    //                 }else {
    //                     date_default_timezone_set('Asia/Bangkok');
    //                     $current_time = date("Y-m-d h:i:s");
    //                     updatePassword("'.$result[$i].'", $new_password["'.$result[$i].'"], $current_time);
    //                     $statement = getLoginid();
    //                 } 
    //             }
    //         }
    //     }
    // }
              
            if(isset($_POST["admin01"])){
                $new_password['admin01'] = $_POST['admin01'];
                if(strlen($_POST['admin01']) == 0){
                    $error['admin01'] = "Hãy nhập mật khẩu mới";
                }else if(0< strlen($_POST['admin01']) && strlen($_POST['admin01']) < 6){
                    $error['admin01'] = "Hãy nhập mật khẩu có tối thiểu 6 ký tự";
                }else {
                    date_default_timezone_set('Asia/Bangkok');
                    $current_time = date("Y-m-d h:i:s");
                    updatePassword('admin01', $new_password['admin01'], $current_time);
                    $statement = getLoginid();
                } 
            }
        
        if(isset($_POST["admin02"])){
            $new_password['admin02'] = $_POST['admin02'];
            if(strlen($_POST['admin02']) == 0){
                $error['admin02'] = "Hãy nhập mật khẩu mới";
            }else if(0< strlen($_POST['admin02']) && strlen($_POST['admin02']) < 6){
                $error['admin02'] = "Hãy nhập mật khẩu có tối thiểu 6 ký tự";
            }else {
                date_default_timezone_set('Asia/Bangkok');
                $current_time = date("Y-m-d h:i:s");
                updatePassword('admin02', $new_password['admin02'], $current_time);
                $statement = getLoginid();
            } 
        }
        if(isset($_POST["admin03"])){
            $new_password['admin03'] = $_POST['admin03'];
            if(strlen($_POST['admin03']) == 0){
                $error['admin03'] = "Hãy nhập mật khẩu mới";
            }else if(0< strlen($_POST['admin03']) && strlen($_POST['admin03']) < 6){
                $error['admin03'] = "Hãy nhập mật khẩu có tối thiểu 6 ký tự";
            }else {
                date_default_timezone_set('Asia/Bangkok');
                $current_time = date("Y-m-d h:i:s");
                updatePassword('admin03', $new_password['admin03'], $current_time);
                $statement = getLoginid();
            } 
        }
        if(isset($_POST["admin04"])){
            $new_password['admin04'] = $_POST['admin04'];
            if(strlen($_POST['admin04']) == 0){
                $error['admin04'] = "Hãy nhập mật khẩu mới";
            }else if(0< strlen($_POST['admin04']) && strlen($_POST['admin04']) < 6){
                $error['admin04'] = "Hãy nhập mật khẩu có tối thiểu 6 ký tự";
            }else {
                date_default_timezone_set('Asia/Bangkok');
                $current_time = date("Y-m-d h:i:s");
                updatePassword('admin04', $new_password['admin04'], $current_time);
                $statement = getLoginid();
            } 
        }
        if(isset($_POST["admin05"])){
            $new_password['admin05'] = $_POST['admin05'];
            if(strlen($_POST['admin05']) == 0){
                $error['admin05'] = "Hãy nhập mật khẩu mới";
            }else if(0< strlen($_POST['admin05']) && strlen($_POST['admin05']) < 6){
                $error['admin05'] = "Hãy nhập mật khẩu có tối thiểu 6 ký tự";
            }else {
                date_default_timezone_set('Asia/Bangkok');
                $current_time = date("Y-m-d h:i:s");
                updatePassword('admin05', $new_password['admin05'], $current_time);
                $statement = getLoginid();
            } 
        }
        if(isset($_POST["admin06"])){
            $new_password['admin06'] = $_POST['admin06'];
            if(strlen($_POST['admin06']) == 0){
                $error['admin06'] = "Hãy nhập mật khẩu mới";
            }else if(0< strlen($_POST['admin06']) && strlen($_POST['admin06']) < 6){
                $error['admin06'] = "Hãy nhập mật khẩu có tối thiểu 6 ký tự";
            }else {
                date_default_timezone_set('Asia/Bangkok');
                $current_time = date("Y-m-d h:i:s");
                updatePassword('admin06', $new_password['admin06'], $current_time);
                $statement = getLoginid();
            } 
        }
    }
?>