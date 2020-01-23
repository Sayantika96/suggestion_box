<!DOCTYPE>
<html>
<head>
	<style> 
	body {font-family: Arial;}
	form {border: 3px solid #f1f1f1;}

	input[type=text], input[type=password] {
    width: 30%;
  	padding: 8px 8px;
 	margin: 8px 0;
 	display: inline-block;
 	border: 1px solid #ccc;
 	box-sizing: border-box;
}
	button {
  	background-color: #4CAF50;
  	color: white;
  	padding: 14px 20px;
  	margin: 8px 0;
 	border: none;
 	cursor: pointer;
 	width: 35%;
}

	button:hover {
  opacity: 0.8;
}
.cancelbutton {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}
.container {
  padding: 10px;
  
}
span.psw {
  float: right;
  padding-top: 16px;
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
	<div class="container" align="center">
	<h3>NEW USER</h3>
	<form method="post" action="submitUser.php">
			<label for="user"><b>User</b></label>
			<input type="text" name="user" placeholder="New User" required><br>
			<br>
			<label for="psw"><b>Password</b></label>
    		<input type="password" name="password" placeholder="New Password" required><br>
    		<br>
    		<button type="submit" name="submit" value="submit" id="btn">Login</button>				
		<div>
			<br>
			<div class="container" style="background-color:#f1f1f1">
   		    <button type="button" class="cancelbutton">Cancel</button>
   		    <span class="psw">Forgot <a href="#">password?</a></span>
	    </div>
	</div>
	</form>
</body>
</html>
	
