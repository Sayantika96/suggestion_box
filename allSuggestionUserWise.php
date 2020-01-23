<?php
	include_once "repository/SuggestionRepo.php";
	$suggestionRepo = new SuggestionRepo();	

	$data = $suggestionRepo->getAllUserWise();

	


?>
<!DOCTYPE html>
<html>
<head>
<style>
table{
	font-family: arial;
	border-collapse: collapse;
	width:20%;
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
	<h3 align="center">USER SUGGESTION</h3>
	<table align="center">
		<tr>
			<th style="color:navy">Username</th>		
			<th style="color:navy">Suggestion</th>
			<th style="color:navy">CreateDate</th>
			<th style="color:navy">Suggestion_type_id</th>
			<!-- <th style="color:navy">Login_ID</th> -->
		</tr>
		<?php 
			$a=-1;
				foreach ($data as $row) {
					if($a != $row['Username']){
						$a = $row['Username'];
		?>
		<tr>
			<td><?php echo $row['Username']; ?></td>
			<td><?php echo '';?></td>
			<td><?php echo '';?></td>
			<td><?php echo '';?></td>

		</tr>
		<?php } else{?>
		<tr>
			<td><?php echo ' '; ?></td>
			<td><?php echo $row['details']; ?></td>
			<td><?php echo $row['created_date']; ?></td>
			<td><?php echo $row['name']; ?></td>
			<!-- <td><?php echo $row['id']; ?></td> -->
		</tr>
		<?php }}
		?>
	</table>
</body>
</html>