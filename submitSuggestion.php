<?php
	
	include_once "repository/SuggestionRepo.php";
	$suggestionRepo = new SuggestionRepo();
	$data = $suggestionRepo->getAll();
	$submit_name = $_POST['submit_name'];
	//$details = $_POST['details'];
	//$suggestionRepo = insert->getAll();
?>
	
	