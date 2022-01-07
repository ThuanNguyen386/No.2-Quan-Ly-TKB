<?php
	
	function getInfoSearch($school_year, $key){
		require('../common/db_con.php');
		$sql = "SELECT * FROM `subjects` where (school_year='" . $school_year . "') and (name LIKE '%" . $key . "%' or description LIKE '%" . $key . "%');";
		$stm = $conn ->prepare($sql);
		$stm -> execute();
		return $stm;
	}
	function deleteSubject($id){
		require('../common/db_con.php');
		$sql="DELETE FROM `subjects` where id=" . $id . ";";
		$stm = $conn ->prepare($sql);
		return $stm -> execute();
	}
?>