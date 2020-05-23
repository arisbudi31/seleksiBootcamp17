<?php

sortNumber("48172a94");
sortNumber("abc");
sortNumber("94a");


function sortNumber($input){
    $test = "/[\d]/";
    $number = [];
    if(preg_match($test,$input)>0){
        $arr = str_split($input);
        for($i=0; $i<count($arr); $i++){
            if(preg_match($test, $arr[$i])){
                array_push($number, intval($arr[$i]));
            }
        }
        sort($number);
        echo join('',$number);
        echo "\n";
    }
    else{
        echo "No number found in parameter\n";
    }

}
