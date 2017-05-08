<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tourist";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if(!$conn){
        die("Connection Failed: " . mysqli_connect_error());
    }
    
    $sql = "INSERT INTO person (pfname,plname,pfathername,email,dob,address,gender,username,password,phone,pertype,block) values('FirstName','LastName','FatherName','TheMail@mail.com','12-12-98','Beirut Hamrah bayda','M','CyperPretech','admin','71/547847','A','1')";
    $result = mysqli_query($conn,$sql);
    mysqli_close($conn);
?>