<?php
	
		include_once "repository/suggestionTypeRepo.php";
		$suggestionTypeRepo = new SuggestionTypeRepo();
		$data = $suggestionTypeRepo->getAll();
		//$submit_name = $_POST['submit_name'];
		//$query = 'SELECT * FROM suggestion_type';
		//$query = ('SELECT suggestion.id, suggestion.details, suggestion_type.name, suggestion.created_date FROM suggestion LEFT JOIN suggestion_type ON suggestion.suggestion_type_id = suggestion_type_id');	
		//$result = mysqli_query($connection, $query);
		//$data = mysqli_fetch_all($result, MYSQLI_ASSOC);

		
?>
<!DOCTYPE html>
<html>
<head>
	<!-- adding jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body> 
	<!-- html document -->
	<form  id="frm" method="post">
		<h4>Suggestion: </h4>
	<textarea rows="4" cols="50" name="details" id="text" align="center"></textarea>
	<br>
	<select name="suggestion_type_id" id="suggestion_type_id" align="center">

		<?php foreach ($data as $singleData) { ?>
			<option value="<?php echo $singleData['id'] ?>"><?php echo $singleData['name'] ?></option>
		<?php } ?>
	</select><br>
	<input type="submit" name="submit_name" value="ADD" id="submit" onclick="submitvalue()">
	</form>

	<!-- submit data by ajax code -->
	<script type="text/javascript">
		function submitvalue(){
				//$(document).ready(function(){
			    	//$("#submit").click(function(){
					$.ajax({
						url: "submitSuggestion.php",
						type: "post",
						data: {"details":$("#text").val(),
								"suggestion_type_id":$("#suggestion_type_id").val()},
						success: function(response)
						{
							alert(response);
						}
					});
				}
	</script>

</body>
</html>
