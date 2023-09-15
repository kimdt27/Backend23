<?php
require ("connection.php");

$query = "SELECT * FROM name";
$result = mysqli_query($connection, $query);

while($row = mysqli_fetch_array($result)){
    echo $row['ID']." - ". $row['fname']." - ".$row['lname']." - ".$row['age'];
    echo "<a href='del.php?lname=".$row['lname']."' >del</a>";
    echo "<br>";
}
?>
<br><br>
<form action="insert2.php" method="post">
    first name: <input type="text" name="fname"/>
    last name: <input type="text" name="lname"/>
    age: <input type="text" name="age"/>
    <input type="submit" name="submit" value="Click on me when you are done!!!"/>
</form>
