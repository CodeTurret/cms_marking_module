<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>

<section class="signup-form" >
	
	<div class="container" >
	<form action="login.inc.php" method="post" >
		<h2>Log In</h2>
		<div class="form-group">
		<input type="text" name="name" placeholder="Username/Email" class="form-control"><br>
		</div>
		<div class="form-group">
		<input type="password" name="pwd" placeholder="Password" class="form-control"><br>
		</div>
		<button type="submit" name="submit" class="btn">Log In</button>
	</form>
	</div>
</section>

</body>
</html>
