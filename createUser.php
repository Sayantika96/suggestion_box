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
</head>
<body>
	<div class="container" align="center" width="40%">
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
	
