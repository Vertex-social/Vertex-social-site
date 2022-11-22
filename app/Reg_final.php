<?php
include_once("stack-modules/DOM/index.php");
include_once("connect.php");
if (isset($_COOKIE["first_name"]) && isset($_COOKIE["last_name"]) && isset($_COOKIE["dob"]) && isset($_COOKIE["gender"]) && isset($_COOKIE["password"]) && isset($_COOKIE["email"])) {
    if (isset($_POST["Finish"])) {
        $username=$_POST["user_name"];
        $first_name = $_COOKIE["first_name"];
        $last_name = $_COOKIE["last_name"];
        $dob = $_COOKIE["dob"];
        $gender = $_COOKIE["gender"];
        $password = $_COOKIE["password"];
        $email = $_COOKIE["email"];
        $sql = mysqli_query($con,"insert into user (username,email,dob,lastname,othername,gender,reg_date,password) values ('$username','$email','$dob','$last_name','$first_name','$gender','$date','$password') ");
        if ($sql) {
            $query = mysqli_query($con,"select * from user where username = '$username' and password='".htmlspecialchars($password)."'");
            if (mysqli_num_rows($query)>0) {
                $row = mysqli_fetch_assoc($query);
                setcookie("user_name",$row['username'],(time()+2592000));
                setcookie("user_id",$row['id'],(time()+2592000));
            }
            setcookie("first_name", "", time() - 3600);
            setcookie("last_name", "", time() - 3600);
            setcookie("dob", "", time() - 3600);
            setcookie("gender", "", time() - 3600);
            setcookie("password", "", time() - 3600);
            setcookie("email", "", time() - 3600);
    
        }
        display ('<script>window.location="/"</script>');
    }
}else {
    display ('<script>window.location="register"</script>');
}


?>
<!DOCTYPE html>
<html>
<head>    
    <link rel="stylesheet" href="../css/auth.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Register</title>
    <style>
        .reg-cont{
            animation-name: reg-cont;
  animation-duration: 4s;
        }
        @keyframes reg-cont {
  0%   {background-color:red; left:0px; top:0px;}
  25%  {background-color:yellow; left:200px; top:0px;}
  50%  {background-color:blue; left:200px; top:200px;}
  75%  {background-color:green; left:0px; top:200px;}
  100% {background-color:red; left:0px; top:0px;}
}
    </style>
</head>
<body>
	<div class="container reg-cont" id="container reg-cont">
		<div class="form-container log-in-container">
			<form method="post">
				<h1>Register</h1>

				<input type="text" name="user_name" placeholder="Username" required/>
				<a></a>
                <input type="submit" value="Finish 👌" name="Finish" style="background-color: #7E68F4; color:white; max-width:23em; border-radius:5px" placeholder="Next">
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
