<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "tourist";

// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

mysqli_query($conn,"INSERT INTO person(pfname,plname,pfathername,email,address,dob,gender,username,password,phone) values ('hassan','ali','klay','122@qwq.com','dadasdas','11-11-1111','m','hassan','123123','12345678')");

?>