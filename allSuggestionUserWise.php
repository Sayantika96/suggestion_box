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