<?php

function route($string,$inf){
    $file ='package.json';
    $js_dec = json_decode(file_get_contents($file),true);
    
$request = $_SERVER['REQUEST_URI'];
$route = str_replace($js_dec["install-path"] ,"" , $request);
    if ($route == $string) {
        include_once($inf);
    }elseif ($route == "$string/") {
        echo '<script>window.location="http://'.$_SERVER['HTTP_HOST'] .''.$js_dec["install-path"].''. $string.'"</script>';
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
    $mmh=mysqli_connect($servername, $username, $password,$db);
    if(mysqli_connect_errno()){
        echo 'Failed to connect to the database';
    }
    return $mmh ;
}
function db_query($conect,$sql){
   $stp = mysqli_query($conect,$sql);
   return $stp;
}
function db_rows($query){
    $quert=mysqli_num_rows($query);
    return $quert;
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

function msn6($string){
    $string = str_rot13($string);
    $string = strtolower($string);
    $string = str_replace('a','16',$string);
    $string = str_replace('b','1b',$string);
    $string = str_replace('c','3_1',$string);
    $string = str_replace('d','23',$string);
    $string = str_replace('e',':2',$string);
    $string = str_replace('f','1',$string);
    $string = str_replace('g','6',$string);
    $string = str_replace('h','5g',$string);
    $string = str_replace('i','2_1',$string);
    $string = str_replace('j','cs_3',$string);
    $string = str_replace('k','5',$string);
    $string = str_replace('l','10',$string);
    $string = str_rot13($string);
    $string = str_replace('m','10_=',$string);
    $string = str_replace('n','199',$string);
    $string = str_replace('o','s',$string);
    $string = str_replace(' ','5--60',$string);
    $string = strtoupper($string);
    $string = str_rot13($string);
    $string = str_replace('16','yto',$string);
    $string = str_replace('1B','__+',$string);
    $string = str_replace('3_1','1',$string);
    $string = str_replace('23','mt_-',$string);
    $string = str_replace(':2',':',$string);
    $string = str_replace('199','exe',$string);
    $string = str_replace('5--60',':__68lkd',$string);
    $string = str_replace('+','jsadu777363wygdhgzhdghs',$string);
    $string = strtolower($string);
    $string = str_replace('%',':__68ldsffksfjsjgjsfjgjhgjdfgjdfghghgsjhgkjfsgkjfghsjdfhfsdjghjkdfskkd',$string);
    return $string;
}