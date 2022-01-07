<?php
    require_once('../model/subject.php');
	var_dump($_SESSION);

    $stt = editSubject($_SESSION['id'], $_SESSION['subject'], $_SESSION['browser-text'], $_SESSION['description'], $_SESSION['school_year']);
    $old_avatar = getImgName($_SESSION['id']);

    $old_avatar_path = '../../web/avatar/'.$old_avatar;
    
    /* Store the path of new uploaded image */
    $filePath = '../../web/avatar/tmp/'.$_SESSION['browser-text'];
    $destinationFilePath = '../../web/avatar/'.$_SESSION['browser-text'];
    
    /* Move File */
    if(!rename($filePath, $destinationFilePath) ) {  
        echo "File can't be moved!";  
    }  
    else {  
        // echo "File has been moved!";  
        if(strcmp($old_avatar, $_SESSION['browser-text'])){     // check if uploaded-file name and old-file name is not the same
            if (file_exists($old_avatar_path)) {
                unlink($old_avatar_path);
                echo "File Successfully Delete.";   // delete old file
            }
            else{
                echo "File does not exists"; 
            }
        } 
        require_once '../view/subject_edit_complete.php';
    }
?>