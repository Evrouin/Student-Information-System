<!DOCTYPE html>
<html>

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://cdn.pup.edu.ph/img/ico/favicon.ico" rel="icon" type="image/x-icon" />

	<link rel="stylesheet" href="style.css">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

	<title> PUPSIS | Login </title>
</head>

<body style="background-image: url(../_img/PUP.jpg); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
	<div class="container">
		<div class="justify-content-center mt-4 mb-4 card" style="width: 45%; height: 550px; margin: auto; background-color: rgba(255, 255, 255, .15); backdrop-filter: blur(2px);">
			<div class="text-center">
				<form action="login.php" method="post" style="max-width: 55%; margin:auto;">
					<a href="login.php"><img class=" img-circle" alt="PUP LOGO" src="https://cdn.pup.edu.ph/img/symbols/logo88x88.png" /></a>
					<h3 class="box-title text-center"><strong>PUP-SIS</strong> Student Module</h3>
					<section id="introduction">
						<p>Sign in to start your session</p>
					</section>
					<?php if (isset($_GET['error'])) { ?>
						<p class="alert alert-warning" role="alert"><?php echo $_GET['error']; ?></p>
					<?php } ?>
					<input type="text" name="uname" class="form-control" placeholder="Student Number">
					<input type="password" name="password" class="form-control" placeholder="Password">
					<div class="mt-3 mb-4">
						<button class="btn btn-lg btn-primary btn-block" name="submit">Sign in</button>
					</div>
					<div class="card-footer">
						<div class="d-flex justify-content-center links">
							Don't have an account?<a href="signup.php">&nbsp;Sign Up</a>
						</div>
						<!-- <div class="d-flex justify-content-center">
							<a href="#">Forgot your password?</a>
						</div> -->
					</div>
				</form>
			</div>
		</div>
	</div>
</body>

</html>