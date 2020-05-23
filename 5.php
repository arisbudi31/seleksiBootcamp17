<?php

createMatrix(3);

function createMatrix($input){
    $matriks = [];
    $sum_r=0;
    $sum_l=0;
    for($i=0; $i<$input; $i++){
        for($j=0; $j<$input; $j++){
            $matriks[$i][$j] = rand(1, 99);
        }
    }

    for($i=0; $i<$input; $i++){
        $j=$i;
        $sum_r += $matriks[$i][$j];
    }

    for($i=$input-1; $i>=0; $i--){
        $j=$input-1-$i;
        $sum_l += $matriks[$i][$j];
    }

    $sum = $sum_r + $sum_l;
    print($sum);
}