<?php
    require "../controller/password_reset_controller.php";
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
        <table>
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Tên người dùng</th>
                    <th>Mật khẩu mới</th>
                    <th>Action</th>
                </tr>
            </thead>
            <?php 
                $count=1;
                foreach($statement as $row){
            ?>
            <tbody>
                <form class="form" action="" method="POST"> 
                    <tr>
                        <td class="no"><?php echo $count;?></td>
                        <td class="user"><?php echo $row[0];?></td>
                        <td class="password"><input type="password" name="<?php echo $row[0] ; ?>" value ="<?php echo $new_password[$row[0]];?>">
                        </td>
                        <td class="action"><button class="button" >Reset</button></td>
                    </tr>
                    <tr>
                        <td class="no"></td>
                        <td class="user"></td>
                        <td class="error"><span><?php echo $error[$row[0]];?></td>
                        <td class="action"></td>
                    </tr>
                </form>
                    <?php
                        $count++;
                        }
                    ?>
            </tbody>
                    
        </table>
    </div>
</body>
</html>
