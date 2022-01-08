<?php 

//////////--tham dinh--//////////////////
require_once('../common/connectdb.php');

$specialized = ['001'=>"Khoa hoc may tinh", '002'=>"Khoa hoc du lieu", '003'=>"Hai duong hoc"];

    // lay thong tin giao vien
	function getTeacher($str, $spec){
		if ($str =='' && $spec=='' ){
			$query = "SELECT * FROM `teachers` ORDER BY id DESC;";
		}else{
        $query = "SELECT * FROM `teachers` WHERE (teachers.name LIKE '%".$str."%' OR teachers.description LIKE '%".$str."%' OR teachers.degree LIKE '%".$str."%') AND teachers.specialized ='".$spec."'";
  		}
        global $pdo;
        $statement = $pdo -> prepare($query) ;
        $statement -> execute();
        $search_teacher = [];
        foreach ($statement as $row ) {
			$id = $row['id'];
			$name = $row['name'];
			$des = $row['description'];
			$spec = $row['specialized']; 
			$search_teacher[] = array($id,$name,$des, $spec);
		}
    	// var_dump($search_teacher);
    	// echo count($search_teacher);
    	return $search_teacher;
    }
    //xoa thong tin giao vien
    function deleteTeacher($id,$str,$spec){
    	$i = (string) $id;
    	$query = "DELETE FROM `teachers` WHERE teachers.id = ".$i;
    	global $pdo;
    	$pdo->exec($query);
    	header("Location: ../view/search_teacher.php?spec=".$spec."&str=".$str);
    }
	function getTeacherById($id) {
		global $pdo;
		$sql = "SELECT *
				FROM teachers
				WHERE id = '$id' ";
		$teacher = $pdo->prepare($sql);
		$teacher->execute();
		return $teacher->fetch();
	}
    function updateTeacherById($id, $name, $avatar, $description, $specialized, $degree) {
		global $pdo;
		$sql = "UPDATE teachers SET 
				name = '$name',
				avatar = '$avatar',
				description = '$description',
				specialized = '$specialized',
				degree = '$degree'
				WHERE id = '$id' ";
		$teacher = $pdo->prepare($sql);
		return $teacher->execute();
	}
    //////////--tham dinh--//////////////////

?>