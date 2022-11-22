<?php
include_once("stack-modules/DOM/index.php");
setcookie("current_pg_n","-fill",(time()+2592000));
setcookie("current_pg_f"," ",(time()+2592000));
setcookie("current_pg_h"," ",(time()+2592000));

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>
<body>
<?php include("Header.php");?>
</body>
</html>