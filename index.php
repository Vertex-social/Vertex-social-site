<?php
include("stack-modules/DOM/index.php");
route("/","app/App.php");
route("/auth/login","app/Login.php");
route("/auth/forgotpassword","app/Forgotpassword.php");
route("/auth/register","app/Register.php");
route("/auth/register-username","app/Reg_final.php");
http_response_code(404);
route("/404","404.php");



