<?php 
	include 'config.php';
	include 'classes/user.php';

	if (isset($_POST['sign_in'])){
		$email = $_POST['email'];
		$password = $_POST['password'];
		$user = new User($conn);
		$user->checkLogin($email, $password);
		$errors = $user->errors;
	}

	if (isset($_POST['sign_up'])) {
		$name = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$re_password = $_POST['re_password'];
		$user = new User($conn);
		$user->checkRegistration($name, $email, $password, $re_password);
		$errors = $user->errors;
	}

?>

 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>TDStore</title>
    <link rel="stylesheet" href="index.css">
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <link rel="stylesheet" href="dev/css/new-prism.css" />
    <!-- Custom styles -->
  </head>
  <style>
	  a#tab-login, a#tab-register, button.btn.btn-primary.btn-block.mb-4, button.btn.btn-primary.btn-block.mb-3 {
    border-radius: 30px;
	}
	body {
		background-color: grey;
	}
  </style>
  <body>

<div class="container" style="padding: 15%;">
	<div class="jumbotron jumbotron-fluid p-lg-5 bg-white" style="box-shadow: 10px 10px 5px #312e2e;">
	
	<!-- Pills navs -->
	<ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
	<li class="nav-item" role="presentation">
		<a
		class="nav-link active"
		id="tab-login"
		data-mdb-toggle="pill"
		href="#pills-login"
		role="tab"
		aria-controls="pills-login"
		aria-selected="true"
		>Login</a
		>
	</li>
	<li class="nav-item" role="presentation">
		<a
		class="nav-link"
		id="tab-register"
		data-mdb-toggle="pill"
		href="#pills-register"
		role="tab"
		aria-controls="pills-register"
		aria-selected="false"
		>Register</a
		>
	</li>
	</ul>
	<!-- Pills navs -->

	<!-- Pills content -->
	<div class="tab-content">
	<div
		class="tab-pane fade show active"
		id="pills-login"
		role="tabpanel"
		aria-labelledby="tab-login"
	>
		<form id="login" action="login.php" method="POST">
		<div class="text-center mb-3">
			<p>Sign in with:</p>
			<button type="button" class="btn btn-primary btn-floating mx-1">
			<i class="fab fa-facebook-f"></i>
			</button>

			<button type="button" class="btn btn-primary btn-floating mx-1">
			<i class="fab fa-google"></i>
			</button>

			<button type="button" class="btn btn-primary btn-floating mx-1">
			<i class="fab fa-twitter"></i>
			</button>

			<button type="button" class="btn btn-primary btn-floating mx-1">
			<i class="fab fa-github"></i>
			</button>
		</div>

		<p class="text-center">or:</p>

		<!-- Email input -->
		<div class="form-outline mb-4">
			<input name="email" type="email" id="loginName" class="form-control" />
			<label  class="form-label" for="loginName">Email</label>
		</div>

		<!-- Password input -->
		<div class="form-outline mb-4">
			<input name="password" type="password" id="loginPassword" class="form-control" />
			<label class="form-label" for="loginPassword">Password</label>
		</div>

		<!-- 2 column grid layout -->
		<div class="row mb-4">
			<div class="col-md-6 d-flex justify-content-center">
			<!-- Checkbox -->
			<div class="form-check mb-3 mb-md-0">
				<input
				class="form-check-input"
				type="checkbox"
				value=""
				id="loginCheck"
				checked
				/>
				<label class="form-check-label" for="loginCheck"> Remember me </label>
			</div>
			</div>

			<div class="col-md-6 d-flex justify-content-center">
			<!-- Simple link -->
			<a href="#!">Forgot password?</a>
			</div>
		</div>

		<!-- Submit button -->
		<button name="sign_in" type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>

		<!-- Register buttons -->
		<div class="text-center">
			<p>Not a member? <a href="#!">Register</a></p>
		</div>
		</form>
	</div>
	<div
		class="tab-pane fade"
		id="pills-register"
		role="tabpanel"
		aria-labelledby="tab-register"
	>
		<form id="register"  action="login.php" method="POST">
		<div class="text-center mb-3">
			<p>Sign up with:</p>
			<button type="button" class="btn btn-primary btn-floating mx-1">
			<i class="fab fa-facebook-f"></i>
			</button>

			<button type="button" class="btn btn-primary btn-floating mx-1">
			<i class="fab fa-google"></i>
			</button>

			<button type="button" class="btn btn-primary btn-floating mx-1">
			<i class="fab fa-twitter"></i>
			</button>

			<button type="button" class="btn btn-primary btn-floating mx-1">
			<i class="fab fa-github"></i>
			</button>
		</div>

		<p class="text-center">or:</p>

		<!-- Username input -->
		<div class="form-outline mb-4">
			<input name="username" type="text" id="registerUsername" class="form-control" />
			<label class="form-label" for="registerUsername">Username</label>
		</div>

		<!-- Email input -->
		<div class="form-outline mb-4">
			<input name="email" type="email" id="registerEmail" class="form-control" />
			<label class="form-label" for="registerEmail">Email</label>
		</div>

		<!-- Password input -->
		<div class="form-outline mb-4">
			<input name="passaword" type="password" id="registerPassword" class="form-control" />
			<label class="form-label" for="registerPassword">Password</label>
		</div>

		<!-- Repeat Password input -->
		<div class="form-outline mb-4">
			<input name="re_password" type="password" id="registerRepeatPassword" class="form-control" />
			<label class="form-label" for="registerRepeatPassword">Repeat password</label>
		</div>

		<!-- Checkbox -->
		<div class="form-check d-flex justify-content-center mb-4">
			<input
			class="form-check-input me-2"
			type="checkbox"
			value=""
			id="registerCheck"
			checked
			aria-describedby="registerCheckHelpText"
			/>
			<label class="form-check-label" for="registerCheck">
			I have read and agree to the terms
			</label>
		</div>

		<!-- Submit button -->
		<button name="sign_up" type="submit" class="btn btn-primary btn-block mb-3">Sign in</button>
		</form>
	</div>
	</div>
	<!-- Pills content -->
	</div>
  </div>







  <?php 
    include 'includes/footer.php'; 
?>