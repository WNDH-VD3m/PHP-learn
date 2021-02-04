<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demo1";

$conn =new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("connect fail: " . $conn->connect_error);
}

$sql1 = "CREATE TABLE test2(id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
nkname VARCHAR(30) NOT NULL, pname VARCHAR(30) NOT NULL, address VARCHAR(100))";


if($conn->query($sql1) === TRUE){
    echo "Table test2 created successfully";
}
else{
    echo "Create failed: " . $conn->error;
}

$conn->close();


?>
