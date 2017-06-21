<?php
require_once('Connections/conn.php');
session_start();
$full_name		=	$_POST['fname'];
$card_number	=	$_POST['c_n'];
$expiry_date	=	$_POST['e_d'];
$amount			=	$_POST['am'];
$cv_number		=	$_POST['cv'];
$cc 			= 	$_POST['cc'];

$payid = $_SESSION["payid"];

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
			}			
$sql = "INSERT INTO `payment`(`payId`,`fullname`, `cardnumber`, `epiration`, `cv_code`, `coupon_code`) VALUES ('$payid','$full_name', '$card_number', '$expiry_date', '$cv_number', '$cc')";
if (mysqli_query($conn, $sql)) {
	{
    	header('Location:payment.php');
	}
}else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>