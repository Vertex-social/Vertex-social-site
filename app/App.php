<?php
include_once("stack-modules/DOM/index.php");

setcookie("current_pg_h","-fill",(time()+2592000));
setcookie("current_pg_f"," ",(time()+2592000));
setcookie("current_pg_n"," ",(time()+2592000));
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

<div class="grid-container">
  <div>
    <div class="user_sug">
      <h2>You may like 👍</h2>
      <div class="container">
        <div class="sug_pfp">
          <img src="https://th.bing.com/th/id/OIP.evUMYFwlMncUnlz-sqBP5wHaEo?w=281&h=180&c=7&r=0&o=5&pid=1.7" alt="">
          <p id="pfp_sug">hi john doewe</p>
          <span>@hiya</span>
        </div>
        <br>
        <div class="sug_pfp">
          <img src="https://th.bing.com/th/id/OIP.evUMYFwlMncUnlz-sqBP5wHaEo?w=281&h=180&c=7&r=0&o=5&pid=1.7" alt="">
          <p id="pfp_sug">hi john doewe</p>
          <span>@hiya</span>
        </div>
        <br>
        <div class="sug_pfp">
          <img src="https://th.bing.com/th/id/OIP.evUMYFwlMncUnlz-sqBP5wHaEo?w=281&h=180&c=7&r=0&o=5&pid=1.7" alt="">
          <p id="pfp_sug">hi john doewe</p>
          <span>@hiya</span>
        </div>
      </div>

    </div>
  </div>
  <div>2</div>
  <div>3</div>  
  <div>4</div>
  <div>5</div>
  <div>6</div>  
</div>
</body>
</html>