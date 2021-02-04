<?php

$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);

if($conn->connect_error){
    die("Fail to connect: " . $conn->connect_error);
}

$sql1 = "CREATE DATABASE demo1";

if($conn->query($sql1) === TRUE){
    echo "Creat success";
}
else{
    echo "Error creating database: " . $conn->error;
}

$conn->close();

?>





