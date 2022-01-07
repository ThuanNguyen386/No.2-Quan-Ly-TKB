<?php
require_once './app/common/db.php';
class Schedule extends DB{
    // Insert data vào table Schedules
    public function insert($data){
        $sql="INSERT INTO schedules(school_year, subject_id, teacher_id, week_day, lesson, notes) VALUES ('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]');";
        // $_SESSION['file'] = $sql;

        $this->__conn->exec($sql);
        $_SESSION['add-schedule-complete-notifi']= "Bạn đã tạo thêm thành công thời khóa biểu.";
    }

    public function edit($data){
       
        $sql="UPDATE schedules SET school_year = '$data[0]', subject_id = '$data[1]', teacher_id = '$data[2]', week_day = '$data[3]', lesson= '$data[4]', notes= '$data[5]'  WHERE  id = $data[10];";
        // $_SESSION['file'] = $sql;

        $this->__conn->exec($sql);
        $_SESSION['edit-schedule-complete-notifi']= "Bạn đã sửa thành công thời khóa biểu.";
    }

    // Tìm kiếm trong tablez
    public function searchSchedule($khoa, $subject, $teacher){
        if($khoa !=null){
            if($subject !=null){
                if($teacher != null){
                    $sql_end = "WHERE schedules.school_year='$khoa' AND schedules.subject_id='$subject' AND schedules.teacher_id='$teacher'";
                }
                else{
                    $sql_end = "WHERE schedules.school_year='$khoa' AND schedules.subject_id='$subject'";
                }
            }
            else{
                if($teacher != null){
                    $sql_end = "WHERE schedules.school_year='$khoa' AND schedules.teacher_id='$teacher'";
                }
                else{
                    $sql_end = "WHERE schedules.school_year='$khoa'";
                }
            }
        }
        else{
            if($subject !=null){
                if($teacher != null){
                    $sql_end = "WHERE schedules.subject_id='$subject' AND schedules.teacher_id='$teacher'";
                }
                else{
                    $sql_end = "WHERE schedules.subject_id='$subject'";
                }
            }
            else{
                if($teacher != null){
                    $sql_end = "WHERE schedules.teacher_id='$teacher'";
                }
                
            }
        }
        // $_SESSION['search-schedule'] = $sql;
        $sql = "SELECT schedules.id, schedules.school_year, subjects.name AS nameSubject, teachers.name AS nameTeacher, schedules.week_day, schedules.lesson 
                FROM schedules 
                INNER JOIN teachers ON schedules.teacher_id = teachers.id
                INNER JOIN subjects ON schedules.subject_id = subjects.id " . $sql_end;
        $data= $this->__conn->query($sql);
        $array=[];
        foreach($data as $row){
            $array = array_merge($array, [$row]);// phương thức gộp mảng
        }
        return $array;
    }

    public function get(int $id)
    {
        $stmt = $this->__conn->prepare("select * from schedules where id=:id");
        $stmt->bindParam(':id',$id);
        $stmt->execute();
        $data = $stmt->fetch(PDO::FETCH_ASSOC);

        return $data;
    }
}

$Schedule = new Schedule();