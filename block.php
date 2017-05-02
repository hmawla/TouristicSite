<?php require_once('Connections/conn.php'); ?>


<?php 

echo $_GET['block'];
echo $_GET['perid'];
$perid =  $_GET['perid'];
$block = $_GET['block'];


mysql_select_db($database_conn, $conn);
$query_rsperson = sprintf("update person set block=%s  WHERE ID = %s" , $block , $perid );
mysql_query(  $query_rsperson , $conn  ) or die(mysql_error());

header("Location:pblock.php");

?>