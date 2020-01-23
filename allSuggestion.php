<?php
	include_once "repository/SuggestionRepo.php";
	include_once "repository/SuggestionTypeRepo.php";
	$suggestionRepo = new SuggestionRepo();
	$suggestionTypeRepo = new SuggestionTypeRepo();
	$data = $suggestionRepo->getAll();
	//die();
	$options = $suggestionTypeRepo->getAll();
	
	if(isset($_POST['submit'])){
		$search = $_POST['search'];
		$suggestion_type_id = $_POST['suggestion_type_id'];	
			
		if(!empty($search) && !empty($suggestion_type_id) && !empty($login_id)){
			$data = $suggestionRepo->getSearchedAll($search, $suggestion_type_id, $login_id);
		}elseif (!empty($search) && empty($suggestion_type_id)) {
			$data = $suggestionRepo->getSearchedAllAgain($search);
		}elseif (!empty($suggestion_type_id) && empty($search)) {
			$data = $suggestionRepo->getSearchedAllOnce($suggestion_type_id);
		}else{
			$data = $suggestionRepo->getAll();
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
<style>
table{
	font-family: arial;
	border-collapse: collapse;
	width:30%;
}
	td,th{
		border: 2px solid Black;
		text-align: left;
		padding: 8px;
	}
	
	tr:nth-child(even) {
		background-color: #dddddd;
	}

</style>
<style>
	ul{
		list-style-type: none;
		margin: 0;
		padding: 0;
		overflow: hidden;
		background-color: #333; 
	}
	li{
		float: left;
		border-right: none; 
	}
	li:last-child {
		border-right: none;
	}
	li a{
		display: block;
		color: white;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;
	}
	li a:hover:not(.active{
		background-color: #111;
		})
	.active{
		background-color: #4CAF50;
	}
</style>
<body>
	<ul>
		<li><a href="Home.php">Home</a></li>
		<li><a href="allSuggestionUserWise.php">User</a></li>
		<li><a href="allSuggestion.php">Submit Suggestion</a></li>
		<li style="float: right"><a href="Login.php">Sign In</a></li>
		<li style="float: right"><a href="createUser.php">Sign Up</a></li>
	</ul>
</body>
</head>
<body>
	<div align="center">
		<form name="form" method="post"> 
			<input type="text" name="search" id="Search" placeholder="Search here">
			<input type="submit" name="submit" id="submit" value="Search"><br>
		
		<select name="suggestion_type_id" id="suggestion_type_id" align="center">
				<?php foreach ($options as $singleData) { ?>
				<option value="<?php echo $singleData['id'] ?>"><?php echo $singleData['name'] ?></option>
				<?php } ?>
		</select><br>
		</form>
	</div><br>
	<h3 align="center">SUGGESTION</h3>
	<table align="center">
		<tr>
			<th style="color:navy">ID</th>
			<th style="color:navy">Details</th>
			<th style="color:navy">CreateDate</th>
			<th style="color:navy">Suggestion_type_id</th>
			<th style="color:navy">Login_ID</th>
			
		</tr>
		<?php 
			foreach ($data as $row) {
			//echo '<pre>'.print_r($row,true);
			//die();
			?>
			<tr>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['details']; ?></td>
				<td><?php echo $row['created_date']; ?></td>
				<td><?php echo $row['name']; ?></td>
				<td><?php echo $row['login_id']; ?></td>
			</tr>
		<?php }
		?>
	</table>
</body>
</html>