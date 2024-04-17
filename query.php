<?php
include "connection.php";


if(isset($_REQUEST["btn"])){

print_r(($_FILES["image"]));

$fileName = $_FILES["image"]["name"];
$tempName = $_FILES["image"]["tmp_name"];

    $name= $_REQUEST["username"];
    $email= $_REQUEST["email"];

    $folder = "images/".$fileName; 

    $query= "insert into userinfo values ('$name', '$email', '$fileName')";

    mysqli_query($connection, $query);
    move_uploaded_file($tempName, $folder);
    mysqli_close($connection);
 
}

?>