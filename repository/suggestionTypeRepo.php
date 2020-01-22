<?php
	include_once 'BaseRepo.php';
	class suggestionTypeRepo extends BaseRepo
	{
		public function getAll(){
			$sql = "SELECT * FROM suggestion_type";
			$result = mysqli_query($this->db, $sql);
			$data = mysqli_fetch_all($result, MYSQLI_ASSOC);
			return $data;
		}
		public function count(){
			$sql = "SELECT suggestion_type.name, COUNT(suggestion.suggestion_type_id) as N FROM suggestion LEFT JOIN suggestion_type ON suggestion.suggestion_type_id = suggestion_type.id GROUP BY suggestion.suggestion_type_id";
			$result = mysqli_query($this->db, $sql);
			$data = mysqli_fetch_all($result, MYSQLI_ASSOC);
			return $data;
		}
	}