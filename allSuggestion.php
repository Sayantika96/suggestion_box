<?php
	
	include_once "repository/SuggestionRepo.php";
	$suggestionRepo = new SuggestionRepo();
	$data = $suggestionRepo->getAll();
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
</head>
<body>
	
	<h3 align="center">SUGGESTION</h3>
	<table align="center">
		<tr>
			<th style="color:navy">ID</th>
			<th style="color:navy">Details</th>
			<th style="color:navy">CreateDate</th>
			<th style="color:navy">Suggestion_type_id</th>
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
			</tr>
		<?php }
		?>
	</table>
</body>
</html>