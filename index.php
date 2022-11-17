<?php
include("stack-modules/DOM/index.php");
route("/","app/App.php");
route("/auth/login","app/Login.php");
http_response_code(404);
route("/404","404.php");