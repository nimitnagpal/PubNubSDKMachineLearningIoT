<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Transparent Login Form</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<div class="loginBox">
			<img src="user.png" class="user">
			<h2>Log In Here</h2>
			<form action="second.php" method="post">
				<p>Username</p>
				<input type="text" name="UserName" placeholder="Enter Username" value="UserName">
				<p>Password</p>
				<input type="password" name="Password" placeholder="••••••" value="Password">
				<input type="submit" name="submit" value="submit">
				<a href="#">Forget Password</a>
			</form>
		</div>
	</body>
</html>