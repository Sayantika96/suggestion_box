<DOCTYPE html>
<html>
<head>
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
		<li><a href="#home">Home</a></li>
		<li><a href="allSuggestionUserWise.php">User</a></li>
		<li><a href="allSuggestion.php">Submit Suggestion</a></li>
		<li style="float: right"><a href="Login.php">Sign In</a></li>
		<li style="float: right"><a href="createUser.php">Sign Up</a></li>
	</ul>
</body>
<body>
		<div align="center">
				<font size="5" color="navy"><p style="font-family: 'Courier New'"><h1>WELCOME TO MY HOMEPAGE</h1></p></font>
		</div>
</body>
</head>
</html>