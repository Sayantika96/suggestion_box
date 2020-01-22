<?php 
	include_once 'repository/SuggestionTypeRepo.php';
	$suggestionTypeRepo = new SuggestionTypeRepo();
	$data = $suggestionTypeRepo->count();

	//var_dump($data);
	//die();
?>

<!DOCTYPE html>
<html>
<head>
<style>
	font-family: arial;
	border-collapse: collapse;
	width:50%;
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
	<h3 align="center">TYPE COUNT</h3>
	<table align="center" width="40%" height="30%">
		<tr>
			<th style="color:navy">Type</th>
			<th style="color:navy">Count</th>
			<!--<th style="color:navy">CreateDate</th>
			<th style="color:navy">Suggestion_type_id</th>
			<th style="color:navy">Login_ID</th>-->	
		</tr>
		<?php 
			foreach ($data as $row) {
        	?>
			<tr>
				<td><?php echo $row['name']; ?></td>
				<td><?php echo $row['N']; ?></td>
			</tr>
		<?php }
		?>
	</table>

</body>
</html>