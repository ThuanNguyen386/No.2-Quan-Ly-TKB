<?php
	require('../model/subjects_search_model.php');
	$id=$_GET['id'];
	$result=deleteSubject($id);
	if($result){
		header("Location: ../view/subjects_search.php");
	}

?>