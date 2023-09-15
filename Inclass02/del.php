<?php
require ("connection.php");
if(isset($_GET['lname'])) {
    $lname = $_GET['lname'];
    $sql = "DELETE FROM name WHERE lname = '$lname'";

    if (!mysqli_query($connection, $sql)) {
        die("You F....ed up: " . mysqli_error($connection));
    }else{
        header("Location: index.php");
    }
}else{
    header("Location: index.php");
}
