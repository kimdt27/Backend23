<?php
require ("constants.php");

$connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
if(!$connection){
    die("DB DOWN MoFo!!!");
}

$dbSelect = mysqli_select_db($connection, DB_NAME);
if(!$dbSelect){
    die("DB Erororooror: ". mysqli_error($connection));
}

