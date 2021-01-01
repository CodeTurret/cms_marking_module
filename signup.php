<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>

<!-- <section class="signup-form" > -->
	
	<div class="container" >
	<form action="includes/signup.inc.php" method="post" >
		<h2>Sign Up</h2>
		<div class="form-group">
		<input type="text" name="name" placeholder="Full Name" class="form-control"><br>
		</div>
		<div class="form-group">
		<input type="email" name="email" placeholder="Email" class="form-control"><br>
		</div>
		
		<div class="form-group">
		<input type="text" name="uid" placeholder="Username" class="form-control"><br>
		</div>
		<div class="form-group">
		<input type="password" name="pwd" placeholder="Password" class="form-control"><br>
		</div>
		<div class="form-group">
		<input type="password" name="pwdrepeat" placeholder="Confirm Password" class="form-control"><br>
		</div>
		<button type="submit" name="submit" class="btn">Sign Up</button>
	</form>
	</div>
<!-- </section>
 --></body>
</html>
