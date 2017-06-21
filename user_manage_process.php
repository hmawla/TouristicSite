<?php
session_start();
require_once('Connections/conn.php');	
if(isset($_POST['b']))
{
$block = $_POST['b'];
echo $block;

$sql_b = "UPDATE person SET block = '1' WHERE id = $block";
if (mysqli_query($conn, $sql_b)) {
	header('location:admin.php');
	$R = '<script> alert("The User is Blocked");</script>';
} else {
    $R = "Error blocked user: " . mysqli_error($conn);
}
$_SESSION['block'] = $R;
}
if(isset($_POST['ub']))
{
$unblock = $_POST['ub'];
echo $unblock;

$sql_un = "UPDATE person SET block = '0' WHERE id = $unblock";
if (mysqli_query($conn, $sql_un)) {
	header('location: admin.php');
	$R = '<script> alert("The User is un block");</script>';
} else {
	header("location: user_manage.php");
    $R = "Error unblocked user: " . mysqli_error($conn);
}
$_SESSION['unblock'] = $R;
}

?>