<?php
if (isset($_POST['submit'])){
    if((($_FILES['picture']['type']=="image/gif")||
        ($_FILES['picture']['type']=="image/jpeg")||
        ($_FILES['picture']['type']=="image/jpg")||
        ($_FILES['picture']['type']=="image/png"))&&(
    ($_FILES['picture']['size']<1000000)
    ))
    if ($_FILES['picture']['error']>0){
        echo "Error ". $_FILES['picture']['error'];
    }else{
        echo "Upload: ". $_FILES['picture']['name']."</br>";
        echo "Type: ". $_FILES['picture']['type']."</br>";
        echo "Size: ". ($_FILES['picture']['size']/1024)." kb. </br>";
        echo "Stored: ". $_FILES['picture']['tmp_name'];
        if(file_exists("img/".$_FILES['picture']['name'])){
            echo "Can't upload. file already there!!!";
        }else{
            move_uploaded_file($_FILES['picture']['tmp_name'],
                                "img/".$_FILES['picture']['name']);
            echo "Stored in: img/".$_FILES['picture']['name'];
            $conn = mysqli_connect("localhost","root","","img");
            $pic = $_FILES['picture']['name'];
            $sql = "INSERT INTO `imgs` (`filename`) VALUES ('$pic')";
            mysqli_query($conn, $sql);
        }
    }
}