<?php

validasiUsername('Arisb31');

validasiUsername('Arisb31@$%#%');

validasiPassword('@ARISB3');

validasiPassword('31ARISB3@');



function validasiUsername($username){
    $user_valid = preg_match("/^[A-Za-z_][A-Za-z0-9_-]{4,13}$/", $username);
    if($user_valid){
        echo "username valid\n";
    }
    else{
        echo "username tidak valid\n";
    }
}

function validasiPassword($pwd){
    $password_valid = preg_match("/^([0-9]{1}|[A-Z]{5}|[!@#%&*]{1}){3}$/", $pwd);
    if($password_valid){
        echo "password valid\n";
    }
    else{
        echo "password tidak valid\n";
    }
}