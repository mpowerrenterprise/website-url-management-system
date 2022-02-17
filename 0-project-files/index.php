<?php

session_start();

if(isset($_SESSION["login_session"])){

	if($_SESSION['login_session'] == "admin"){

		header("Location: dashboard-index.php");
		die();

	}

}


?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Login 08</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="login-asset/css/style.css">

	</head>
	<body>
	<section class="ftco-section">

		<div class="container">
			<form action="handle_login.php" method = "POST">
				<div class="row justify-content-center">
					<div class="col-md-6 text-center mb-5">
						<h2 class="heading-section">Website URL Management System</h2>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-md-6 col-lg-5">
						<div class="login-wrap p-4 p-md-5">
					<div class="icon d-flex align-items-center justify-content-center">
						<span class="fa fa-user-o"></span>
					</div>
					<h3 class="text-center mb-4">Have an account?</h3>
							<form action="#" class="login-form">
						<div class="form-group">
							<input type="text" class="form-control rounded-left" name="username" placeholder="Username" required>
						</div>
					<div class="form-group d-flex">
					<input type="password" class="form-control rounded-left" name="password" placeholder="Password" required>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary rounded submit p-3 px-5">Login</button>
					</div>
				</form>
				</div>
					</div>
				</div>
			<form>
		</div>
	</section>

	<script src="login-asset/js/jquery.min.js"></script>
    <script src="login-asset/js/popper.js"></script>
    <script src="login-asset/js/bootstrap.min.js"></script>
    <script src="login-asset/js/main.js"></script>

	</body>
</html>
