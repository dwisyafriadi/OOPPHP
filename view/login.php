<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="frm">
	<form action="http://localhost/mvc2/mvc/model/process.php" method="post">
		<p>
			<label>Username :</label>
			<input type="text" name="username">
		</p>
		<p>
			<label>Password :</label>
			<input type="text" name="password">
		</p>
		<p>
			<input type="submit" id="btn" value="Login">
		</p>
	</form>
</div>
</body>
</html>