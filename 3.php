<?php

testWord('ARKADEMY');

function testWord($input){
    $test = "/[AIUEOaiueo]/";
    $arr = str_split($input);
    $arr_cons = [];
    $arr_voc = [];
    
    for($i=0; $i<count($arr); $i++){
        if(preg_match($test, $arr[$i])){
            array_push($arr_voc, $arr[$i]);
        }
        else{
            array_push($arr_cons, $arr[$i]);
        }

    }
    
    $arr = array_merge($arr_voc, $arr_cons);
    foreach($arr as $val){
        echo $val;
        echo "\n";
    }
}