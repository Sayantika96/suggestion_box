<?php
	include_once 'BaseRepo.php';
	class suggestionTypeRepo extends BaseRepo
	{
		public function getAll()
		{
			$sql = "SELECT * FROM suggestion_type";
			$result = mysqli_query($this->db, $sql);
			$data = mysqli_fetch_all($result, MYSQLI_ASSOC);
			return $data;
		}
	}