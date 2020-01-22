<?php

	include_once 'BaseRepo.php';


	class LoginRepo extends BaseRepo
	{
		public function getByUserName($userName)
		{
			$sql = "SELECT * FROM login WHERE Username='$userName' limit 1";
			$result = mysqli_query($this->db, $sql);
			$datas = mysqli_fetch_all($result, MYSQLI_ASSOC);
			return $datas;
		}
		public function insert($username,$password){
			$sql = "INSERT INTO login(username,password) VALUES ('$username','$password')";
			$result = mysqli_query($this->db,$sql);
			return true;
		}
	}

?>
