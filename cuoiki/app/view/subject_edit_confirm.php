<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Confirm update subject</title>
        <link rel="stylesheet" href="../../web/css/subject_update_style.css">
        <link rel="stylesheet" href="../../web/css/responsive.css">
    </head>
    
    <body>
        <div id="container" class="border">
            <div id="content">
                <form action="../controller/subject_optionConfirm_controller.php" method="post" enctype="multipart/form-data">
                    <!-- Ten mon hoc -->
                    <div class="row">
                        <div class="col-25">
                            <label for="subject">Tên môn học</label>
                        </div>
                        <div class="col-75 pad-right">
                            <label id="subject" name="subject" class="border "><?php echo $subject ?></label>
                        </div>
                    </div>

                    <!-- Khoá -->
                    <div class="row">
                        <div class="col-25">
                            <label for="school_year">Khoá</label>
                        </div>
                        <div class="col-75 pad-right">
                            <label id="school_year" name="school_year" class="border">
                            <?php
                                    $content = "";
                                    foreach($school_year as $code) {
                                        if(array_key_exists($code, $school_years)) {
                                            $content .= $school_years[$code].", ";
                                        }
                                    }
                                    echo rtrim(trim($content),",");
                            ?>
                            </label>
                        </div>
                    </div>

                    <!-- Mo ta chi tiet -->
                    <div class="row">
                        <div class="col-25">
                            <label for="description">Mô tả chi tiết</label>
                        </div>
                        <div class="col-75">
                            <label id="description" name="description" class="txt-area border"><?php echo $description ?></label>
                        </div>
                    </div>
                    
                    <!-- Avatar -->
                    <div class="row">
                        <div class="col-25">
                            <label for="avatar">Avatar</label>
                        </div>
                        <div class="col-75">
                            <img src="<?php echo $src ?>" id="avatar" data-name="avatar" class="avt-area border mrg-top">
                        </div>
                    </div>

                    <!-- Xac nhan -->
                    <div class="row">
                        <div class="col-50 wrapp1">
                            <input type="submit" name="back" value="Sửa lại">
                        </div>
                        <div class="col-50 wrapp2">
                            <input type="submit" name="submit" value="Sửa">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>