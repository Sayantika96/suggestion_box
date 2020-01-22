<?php
	session_start();
	include_once "repository/LoginRepo.php";
	$LoginRepo = new LoginRepo();
	if(isset($_POST['user'])){
		$user = $_POST['user'];
		$password = $_POST['password'];

		$Pwd = password_hash($password,PASSWORD_BCRYPT);
		$result = $LoginRepo->getByUserName($user);

		if($result){

			echo "User Exist";
		}
		else{
			$result = $LoginRepo->insert ($user, $Pwd);
			echo "New user Created";
		}
}

?>