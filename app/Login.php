<?php
include_once("stack-modules/DOM/index.php");



?>
<!DOCTYPE html>
<html>
<head>    
    <link rel="stylesheet" href="../css/index.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Login</title>
</head>
<body>
	<div class="container" id="container">
		<div class="form-container log-in-container">
			<form action="#" method="post">
				<h1>Login</h1>
				<span>or use your account</span>
				<input type="text" name="user_name" placeholder="alhso" />
				<input type="password" name="password" placeholder="Password" />
				<a href="#">Forgot your password?</a>
                <input type="submit" value="login" style="background-color: #7E68F4; color:white; max-width:23em; border-radius:5px" placeholder="Log In">
			</form>
		</div>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-right">
					<h1>Vigilante</h1>
					<p>This login form is created using stack framework.</p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
