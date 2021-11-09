<?php 
	include 'config.php';
	include 'classes/user.php';

	if (isset($_POST['log_in'])){
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
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">\
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/login_style.css">
	<title>TDStore -Technology</title>
</head>
<body>
	<div class="registrationForm">
        <div class="form-box">
			<div class="" style="text-align: center;">
				<a href="index.php"><button type="button" class="btn btn-outline-dark mt-4" ">Back To Home</button></a>
			</div>
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Log In</button>
                <button type="button" class="toggle-btn" onclick="register()">Register</button>
            </div>
            <form id="login" class="input-group mt-4" action="login.php" method="POST">
                <input type="email" class="input-field" id="email-log-in" name="email" placeholder="Email" value="<?php if (isset($email)) { echo htmlspecialchars($email); }?>" required>
                <p class="error"> <?php if (isset($errors["login_email"])) echo $errors["login_email"]?> </p>
                <input type="password" class="input-field" id="password-log-in" name="password" placeholder="Password" required>
                <p class="error"> <?php if (isset($errors["login_password"])) echo $errors["login_password"] ?> </p>
                <button type="submit" class="submit-btn" id="log-in" name="log_in">Log In</button>
            </form>
            <form id="register" class="input-group mt-4" action="login.php" method="POST">

                <input type="text" class="input-field" id="username-field" name="username" placeholder="Username" value="<?php if (isset($name)) { echo htmlspecialchars($name); } ?>" required>

                <input type="email" class="input-field" id="email-field" name="email" placeholder="Email" value="<?php if (isset($email)) { echo htmlspecialchars($email); } ?>" required>
                <p class="error"><?php if(isset($errors['create_email1'])) {echo htmlspecialchars($errors['create_email1']);} ?></p>
				<p class="error"><?php if(isset($errors['create_email2'])) {echo htmlspecialchars($errors['create_email2']);} ?></p>

                <input type="password" class="input-field" id="password-field" name="password" placeholder="Password" required>
                <p class="error"> <?php if(isset($errors['create_password'])) {echo htmlspecialchars($errors['create_password']);} ?> </p>
                <input type="password" class="input-field" id="confirm-password-field" name="re_password" placeholder="Confirm Password" required>

                <button type="submit" class="submit-btn" id="sign-up" name="sign_up" >Sign Up</button>
            </form>
        </div>        
    </div>

	<script src="js/registation.js"></script>
</body>
</html>


