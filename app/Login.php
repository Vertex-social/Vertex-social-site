<?php
include_once("stack-modules/DOM/index.php");
include_once("connect.php");
if (isset($_COOKIE["user_name"]) && isset($_COOKIE["user_id"])) {
    display ('<script>window.location="/vigilante"</script>');
}else {
    if (isset($_POST["Login"])) {
        $password = msn6($_POST["password"]);
        $username = $_POST["user_name"];
        $query = db_query($con,"select * from from user where username = '$username' and password='".htmlspecialchars($password)."'");
        if (db_rows($query)>0) {
            $row = db_fetch($qry);
            setcookie("user_name",$row['username'],(time()+2592000));
            setcookie("user_id",$row['id'],(time()+2592000));
            display ('<script>window.location="/"</script>');
        }else {
            display('<script>alert("Failed to Login pls check yur password or username")</script>');
        }
    }
}



?>
<!DOCTYPE html>
<html>
<head>    
    <link rel="stylesheet" href="../css/auth.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Login</title>
</head>
<body>
	<div class="container" id="container">
		<div class="form-container log-in-container">
			<form method="post">
				<h1>Login</h1>
				<span>or use your account</span>
				<input type="text" name="user_name" placeholder="@alhso" required/>
				<input type="password" name="password" placeholder="Password" required/>
				<a href="forgotpassword">Forgot your password?</a>
                <input type="submit" value="Login" name="Login" style="background-color: #7E68F4; color:white; max-width:23em; border-radius:5px" placeholder="Log In">
			</form>
		</div>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-right">
					<h1>Vertex</h1>
					<p>This login form is created using stack framework.</p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
