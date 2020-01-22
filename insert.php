<?php 
	 
	include_once "repository/SuggestionRepo.php";
	$suggestionRepo = new SuggestionRepo();
	$details = $_POST['details'];
	$suggestion_type_id = $_POST['suggestion_type_id'];
	$login_id = $_POST['login_id'];
	$suggestionRepo->insert($details,$suggestion_type_id,$login_id);
	echo "Successfully inserted";

?>