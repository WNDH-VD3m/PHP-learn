<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demo1";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("Fail to connect" . $conn->connect_error);
}

$sql = "INSERT INTO MyGuests(firstname, lastname, email) 
VALUES ('Ma', 'Fa', 'ma@example.com'),('Ya','La','ya@example.com'),('Ga','Th','ga@example.com')";




if($conn->query($sql) === TRUE){
    echo "Success";
}
else{
    echo "Error: " . $sql. "<br>" . $conn->error;
}


$conn->close();

?>