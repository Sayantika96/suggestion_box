<?php

	session_start();
	include_once "repository/LoginRepo.php";
	
	if(isset($_POST['submit'])){
		$userName = $_POST['username'];
		$password = $_POST['password'];

		$LoginRepo = new LoginRepo();
		$datas = $LoginRepo->getByUserName($userName);
/*echo '<pre>';
print_r($datas);
echo '</pre>';
exit; */

        /*foreach ($datas as $singleDatas) {
			echo $singleDatas['password'];
		 }*/



		if($datas)
		{	
			//$datas_pass = $datas['password'];
	
			if(password_verify($password, $datas[0]['password'])){
				echo "Login Successful";

				$_SESSION['ID'] = $datas[0]['id'];
				header("location: createSuggestion.php");
			}else{
				echo "Invalid Username or password";
			}
		}
		else{
			
			echo 'The user is not registered';
		}
}

?>