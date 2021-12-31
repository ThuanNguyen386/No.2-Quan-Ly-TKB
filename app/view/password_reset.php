<?php
    session_start();
    require("../common/config.php");
    global $connect;
    $newpass = $newpassErr = "";
    if (isset($_POST['action_pass'])) {
        $valid = true;
        if (empty($_POST["new_pass"])) {
            $valid = false;
            $newpassErr = "Hãy nhập mật khẩu mới";
        } else {
            $newpass = test_input($_POST["new_pass"]);
        }
        if (0 < strlen($_POST['new_pass']) && strlen($_POST['new_pass']) < 6) {
            $valid = false;
            $nameErr = "Hãy nhập mật khẩu mới tối thiểu 6 ký tự";
        } else {
            $newpass = test_input($_POST['new_pass']);
        }
        if ($valid) {
            $sql = "UPDATE admin SET reset_password_token =:token WHERE login_id=:login_id";
            $statement = $connect->prepare($sql);
            $NULL = NULL;
            $statement->bindParam(':token', $NULL);
            $statement->bindParam(':login_id', $_POST["username"], PDO::PARAM_STR);
            $statement->execute();
            header('location:login.php');
            exit();
        }
    }
    function test_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Reset Password</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="../../web/css/password.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <!-- <form method="post" action="password_reset.php" align="center"> -->
        <table align="center">
            <thead>
            <tr>
                <th>NO</th>
                <th>Tên người dùng</th>
                <th>Mật khẩu mới</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM admin where reset_password_token IS not NULL";
                $ad =$connect ->prepare($sql);
                $ad ->execute();
                $results = $ad->fetchAll(PDO::FETCH_OBJ);
                $action_pass = 1;
                if ($ad->rowCount() > 0) {
                    foreach ($results as $result) {
                        ?>
                        <tr>
                            <td><?php echo htmlentities($action_pass); ?></td>
                            <td name="username"><?php echo htmlentities($result->login_id); ?></td>
                            <td><input type="text" name="new_pass" value=""></td>
                            <div>
                                <span class="error">
                                <?php echo $newpassErr;?>
                                </span>
                            </div>
<!--                            <td><input type="submit" name ="action_pass" value="Reset"</input></td>-->
                            <td><input type="button" name="action_pass" value="Reset"</input></td>
                        </tr>
                        <?php
                        $action_pass++;
                    }
                }
                ?>
            </tbody>
        </table>
    <!-- </form> -->
</div>
</body>
</html>
