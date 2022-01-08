<?php 
require_once './app/controllers/checkLogin.php';

class EditScheduleComplete{
    public function __construct(){
        $_SESSION['edit-schedule-complete-notifi'] = "";
        $data = isset($_SESSION['edit-schedule']) ? $_SESSION['edit-schedule'] : [];
        $data[4] = $this-> createLessonFile($data[4]);// trả về tên file (tạo và ghi) tiết học 
        $data[5] = $this-> createNoteFile($data[5]); // trả về tên file (tạo và ghi) note
        $data[10] = $_SESSION['edit-schedule-id'];

        require_once './app/models/schedule.php';
        $Schedule->edit($data);
    }

    // Tạo file chứa thông tin Tiết học và notes
    public function createLessonFile($data){
        $lessonNameFile = "l". rand(1,99999) .".txt";
        $path = "./web/file/lesson/". $lessonNameFile;
        $fp = @fopen($path, "w+");
        if(!$fp){
            $_SESSION['edit-schedule-complete-notifi'] = "Không tạo được file";
        }
        else{
            foreach($data as $row){
                fwrite($fp, $row."\n");
            }
            fclose($fp);
        }
        return $lessonNameFile;

    }

    //Tạo file chưa thông tin Note
    public function createNoteFile($data){
        $noteNameFile = "n". rand(1,99999) .".txt";
        $path = "./web/file/note/". $noteNameFile;
        $fp = @fopen($path, "w+");
        if(!$fp){
            $_SESSION['edit-schedule-complete-notifi'] = "Không tạo được file";
        }
        else{
            
            fwrite($fp, $data);
            
            fclose($fp);
        }
        return $noteNameFile;
    }
}

$EditScheduleComplete = new EditScheduleComplete();
require_once '../view/edit_schedule_complete.php';