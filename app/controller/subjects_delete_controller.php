<?php
	require('subjects_search_model.php');
	$id=$_GET['id'];
	$result=deleteSubject($id);
	if($result){
		header("Location: subjects_search.php");
	}

?>