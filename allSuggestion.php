<?php
	include_once "repository/SuggestionRepo.php";
	include_once "repository/SuggestionTypeRepo.php";
	$suggestionRepo = new SuggestionRepo();
	$suggestionTypeRepo = new SuggestionTypeRepo();
	$data = $suggestionRepo->getAll();
	$options = $suggestionTypeRepo->getAll();
	
	if(isset($_POST['submit'])){
		$search = $_POST['search'];
		$suggestion_type_id = $_POST['suggestion_type_id'];	
			
		if(!empty($search) && !empty($suggestion_type_id)){
			$data = $suggestionRepo->getSearchedAll($search, $suggestion_type_id);
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