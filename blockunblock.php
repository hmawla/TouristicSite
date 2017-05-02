
<?php require_once('Connections/conn.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_conn, $conn);
$query_rsperson = "SELECT * FROM person";
$rsperson = mysql_query($query_rsperson, $conn) or die(mysql_error());
$row_rsperson = mysql_fetch_assoc($rsperson);
$totalRows_rsperson = mysql_num_rows($rsperson);


?>
<table border="1" class="table table-bordered">
  <tr>

    <td>fname</td>
    <td>lname</td>
    <td>father</td>
    <td>email</td>
    <td>phone</td>
    <td>address</td>
    <td>block</td>
 
  </tr>
  <?php do { ?>
    <tr>
      <td><?php echo $row_rsperson['fname']; ?></td>
      <td><?php echo $row_rsperson['lname']; ?></td>
      <td><?php echo $row_rsperson['father']; ?></td>
      <td><?php echo $row_rsperson['email']; ?></td>
      <td><?php echo $row_rsperson['phone']; ?></td>
      <td><?php echo $row_rsperson['address']; ?></td>
      <td><?php 
			if ( $row_rsperson['block']  == 0 )
			{ ?>
            
            		<a href=block.php?perid=<?php echo $row_rsperson['ID']; ?>&block=1>Block</a>
				
			<?php }
			else
			{ ?>
				<a href=block.php?perid=<?php echo $row_rsperson['ID']; ?>&block=0>UnBlock</a>
				
			<?php }
			 
			 ?></td>
    </tr>
    <?php } while ($row_rsperson = mysql_fetch_assoc($rsperson)); ?>
</table>

<?php mysql_free_result($rsperson); ?>