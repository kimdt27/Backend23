<?php
require ("connection.php");

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$age = $_POST['age'];

$sql = "INSERT INTO `name` (`ID`, `fname`, `lname`, `age`) 
        VALUES (NULL, '$fname', '$lname', '$age')";

if(!mysqli_query($connection, $sql)){
    die("Could not add: ". mysqli_error($connection));
}else{
    header("Location: index.php");
}