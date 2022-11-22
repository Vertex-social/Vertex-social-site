<?php
include_once("stack-modules/DOM/index.php");
include_once("connect.php");
if (isset($_COOKIE["user_name"]) && isset($_COOKIE["user_id"])) {
    display ('<script>window.location="/vigilante"</script>');
}else {
    if (isset($_POST["Next"])) {
        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $dob = $_POST["dob"];
        $gender = $_POST["gender"];
        $email = $_POST["email"];
        $password = msn6($_POST["password"]);
        setcookie("first_name",$first_name,(time()+2592000));
        setcookie("last_name",$last_name,(time()+2592000));
        setcookie("dob",$dob,(time()+2592000));
        setcookie("gender",$gender,(time()+2592000));
        setcookie("password",$password,(time()+2592000));
        setcookie("email",$email,(time()+2592000));
        display ('<script>window.location="register-username"</script>');
    
    }
}


?>
<!DOCTYPE html>
<html>
<head>    
    <link rel="stylesheet" href="../css/auth.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Register</title>
</head>
<body>
	<div class="container" id="container">
		<div class="form-container log-in-container">
			<form method="post">
				<h1>Register</h1>
				<span>or use your account</span>
                <input type="email" name="email" placeholder="Email" required/>
				<input type="text" name="first_name" placeholder="First name" required/>
                <input type="text" name="last_name" placeholder="Last name" required/>
                <input type="date" name="dob" placeholder="first name" required/>
                <select name="gender" id="">
                    <option value="">Gender</option>
                    <option>Male</option>
                    <option>Female</option>
                </select>
				<input type="password" name="password" placeholder="Password" required/>
				<a href="login">Login</a>
                <input type="submit" value="Next👉" name="Next" style="background-color: #7E68F4; color:white; max-width:23em; border-radius:5px" placeholder="Next">
			</form>
		</div>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-right">
					<h1>Vertex</h1>
					<p>This registration form is created using stack framework.</p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
