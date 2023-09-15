<?php
require ("connection.php");

$sql = "INSERT INTO name (fname, lname, age) 
            VALUES ('Jens', 'Jensen', '40')";

if(!mysqli_query($connection, $sql)){
    die("Query Error: ". mysqli_error($connection));
}
echo "Succeseessdse!!!";

