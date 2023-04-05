<?php

$char = ["お", "ち", "ん", "こ", "ま", "う"];
$str = null;
$point = 0;

for($i=0; $i<6; $i++){
    $str .= $char[mt_rand(0,5)];
}

if(mb_strpos($str,"ちんこ") !== false){
    $point+=1;
}

echo $str. " ".$point."\n";


