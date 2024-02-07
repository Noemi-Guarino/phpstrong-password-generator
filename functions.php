<?php

$psw = $_GET['lengthinput'];

function getRandomPsw($psw){
$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$password = '';
for($i = 0; $i < $psw; $i++){
    $password .= $characters[rand (0, strlen($characters)- 1)];
}
return $password;
};

?> 