<?php
$url=''.$_SERVER['HTTP_HOST'] .'/vigilante';
$url_f=''.$_SERVER['HTTP_HOST'] .'/vigilante/friends';
$url_n=''.$_SERVER['HTTP_HOST'] .'/vigilante/notification';

$active = "";
$f_active = "";
$n_active = "";
if ($url=="localhost/vigilante") {
$active = "-fill";
}else {
    # code...
}
if ($url_f=="localhost/vigilante/friends") {
    $f_active = "-fill";
}
if ($url_n=="localhost/vigilante/notification") {
    $n_active = "-fill";
}
?>

<header>

<div class="logo">hi</div>
    
    <div class="icons">
        
    <a href="/"><i class="bi bi-house-door<?php echo $_COOKIE["current_pg_h"];?>"></i></a>
    <a href="friends"><i class="bi bi-people<?php echo $_COOKIE["current_pg_f"];?>"></i></a>
    <a href="notification"><i class="bi bi-bell<?php echo $_COOKIE["current_pg_n"];?>"></i></a>
    </div>

<nav>

    <ul>
        <li>hi</li>
    </ul>
</nav>
</header>
