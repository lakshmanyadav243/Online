<?php

include("connect.php");

?>



<html>
<head>
	<title>online voting system</title>
	<link rel="stylesheet" href="http://localhost/my%20files/stylesheet.css">
</head>
<body>
	<center>
	<div id="headersection">
<body >
	<center><h1>Online voting system</h1></center>
	
</div>
	<hr>

	<div id="bodysection">
	<h3>Registration</h3>
	<form action="http://localhost/my%20files/register.php"method="POST" >

	   <h3>signup</h3>
		<input type="text"name="username" placeholder="enter username" required><br><br>
		<input type="varchar"name="Gmail_id"placeholder="enter Gmail_id" required><br><br>
		<input type="number"name="mobile_no"placeholder="enter mobile_no"required><br><br>
		<input type="password"name="password"placeholder="password" required><br><br>
		<input type="password"name="confirm_password"placeholder="confirm_password" required><br><br>
		<select id="dropbox" name="role">
			<option value="1">voter</option>
			<option value="2">Group</option>
	</select><br><br>
	<button style="padding: 5px;
	font-size: 15px;
	background-color:  #ff8c1a;
	color: white;
	border-radius: 5px;">Register</button><br><br>
	Already user? <a href="http://localhost/my%20files/online%20voting%20system.php">Login here</a>
	</form>
</div>
</center>
</body>
</html>


