<?php

$email = "kt@easv.dk";
$regxp = "/^[A-z0-9-_]+([.][A-z0-9_]+)*[@][A-z0-9-_]+([.][A-z0-9_]+)*[.][A-z]{2,4}$/";

if(preg_match($regxp, $email)){
    echo "email is valid!";
}else{
    echo "get f.....ed!";
}