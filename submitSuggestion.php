<?php
	session_start();
	include_once "repository/SuggestionRepo.php";
	$suggestionRepo = new SuggestionRepo();
	//$data = $suggestionRepo->getAll();
	$suggestion_type_id = $_POST['suggestion_type_id'];
	$details = $_POST['details'];
	$login_id = $_SESSION['ID'];
	$suggestionRepo->insert($details,$suggestion_type_id,$login_id);
?>
	
	