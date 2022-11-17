<?php

function route($string,$inf){
    $file ='package.json';
    $js_dec = json_decode(file_get_contents($file),true);
    
$request = $_SERVER['REQUEST_URI'];
$route = str_replace($js_dec["install-path"] ,"" , $request);
    if ($route == $string) {
        include_once($inf);
    }
}


function display ($disp){
    echo "$disp";
}

function pause ($cs){
    sleep($cs);
}

function reload (){
    echo '<script type="text/JavaScript"> location.reload(); </script>';
}

function db_connect ($servername,$username,$password,$db){
    mysqli_connect($servername, $username, $password,$db);
}
function db_query($conect,$sql){
    mysqli_query($conect,$sql);
}
function db_rows($query){
    mysqli_num_rows($query);
}
function db_fetch ($query){
    mysqli_fetch_assoc($query);
}
function rmn ($number){
    $num = $number ;
    $ma = number_format($num);
    $exp = explode(",",$ma );
    if ($num<1000) {
        $num_show = $num;
    }elseif ($num>999 && $num<1000000) {
        $num_show = $exp[0] . 'K';
    }elseif ($num>999999 && $num<1000000000) {
    $num_show = $exp[0] . 'M';
    }elseif ($num>999999999 && $num<1000000000000) {
    $num_show = $exp[0] . 'B';
    }else {
        $num_show = $ma ;
    }
    return $num_show;
    }

function Math_sign($num){
    echo 'Math.sign('.$num.');';
}