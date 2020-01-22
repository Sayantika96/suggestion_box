<?php

	include_once 'BaseRepo.php';
	class SuggestionRepo extends BaseRepo
	{
		
		public function getAll(){
			$sql = "SELECT suggestion.id, suggestion.details, suggestion.created_date, suggestion_type.name, suggestion.login_id, login.Username FROM suggestion LEFT JOIN suggestion_type ON suggestion.suggestion_type_id = suggestion_type.id LEFT JOIN login ON suggestion.login_id = login.id";
			$result = mysqli_query($this->db, $sql);
			$data = mysqli_fetch_all($result, MYSQLI_ASSOC);
			return $data;
		}

		public function getAllUserWise(){
			$sql = "SELECT suggestion.details, suggestion.created_date, suggestion_type.name,login.Username FROM suggestion LEFT JOIN suggestion_type ON suggestion.suggestion_type_id = suggestion_type.id LEFT JOIN login ON suggestion.login_id = login.id ORDER BY login.Username";
			$result = mysqli_query($this->db, $sql);
			$data = mysqli_fetch_all($result, MYSQLI_ASSOC);
			return $data;


		}
		public function getSearchedAll($searchItem, $searchedType){
			$sql = "SELECT suggestion.id, suggestion.details, suggestion_type.name, suggestion.created_date FROM suggestion LEFT JOIN suggestion_type ON suggestion.suggestion_type_id = suggestion_type.id WHERE suggestion.details LIKE '$searchItem%' AND suggestion.suggestion_type_id='$searchedType'";

			$result = mysqli_query($this->db, $sql);
			$data = mysqli_fetch_all($result, MYSQLI_ASSOC);
			return $data;
		}

		public function getSearchedAllagain($searchItem){
			$sql = "SELECT suggestion.id, suggestion.details, suggestion_type.name, suggestion.created_date FROM suggestion LEFT JOIN suggestion_type ON suggestion.suggestion_type_id = suggestion_type.id WHERE suggestion.details LIKE '$searchItem%'";

			$result = mysqli_query($this->db, $sql);
			$data = mysqli_fetch_all($result, MYSQLI_ASSOC);
			return $data;	
		}	
	
		public function getSearchedAllOnce($searchedType){
			$sql = "SELECT suggestion.id, suggestion.details, suggestion_type.name, suggestion.created_date FROM suggestion LEFT JOIN suggestion_type ON suggestion.suggestion_type_id = suggestion_type.id WHERE suggestion.suggestion_type_id = '$searchedType'";

			$result = mysqli_query($this->db, $sql);
			$data = mysqli_fetch_all($result, MYSQLI_ASSOC);
			return $data;

		}
		public function insert($details,$suggestion_type_id,$login_id){
			$sql = "INSERT INTO suggestion(details,suggestion_type_id,login_id) VALUES ('$details','$suggestion_type_id','$login_id')";
			$result = mysqli_query($this->db,$sql);
			return true;
		}
	}
