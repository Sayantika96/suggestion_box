<?php
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

        foreach ($datas as $singleDatas) {
			echo $singleDatas['password'];
		 }



		/*if($datas)
		{
			if($datas[0]['password'] == $password)
			{
				echo 'Login Succesful';
			}
			else
			{
				echo 'invalid Password or username';
			}
		}
		else{
			
			echo 'The user is not registered';
		}
	*/
}

?>