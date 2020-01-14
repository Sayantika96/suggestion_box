<?php
	
	include_once 'BaseRepo.php';
	class SuggestionRepo extends BaseRepo
	{
		
		public function getAll()
		{
			$sql = "SELECT suggestion.id, suggestion.details, suggestion_type.name, suggestion.created_date FROM suggestion LEFT JOIN      			suggestion_type ON suggestion.suggestion_type_id = suggestion_type.id";
			$result = mysqli_query($this->db, $sql);
			$data = mysqli_fetch_all($result, MYSQLI_ASSOC);
			return $data;
		}
		public function insert($details,$suggestion_type_id){
			$sql = "INSERT INTO suggestion(details,suggestion_type_id) VALUES ('$details','$suggestion_type_id')";
			$result = mysqli_query($this->db,$sql);
			return true;
		}
	}
