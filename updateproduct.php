<?php
include("db.php");
$proid=$_POST['ITEM'];
$itemnumber=$_POST['itemnumber'];
//mysql_query("UPDATE inventory SET qtyleft='$itemnumber'
//WHERE id='$proid'");
$result = mysql_query("SELECT * FROM inventory
WHERE id='$proid'") or die(mysql_error());

$row = mysql_fetch_array( $result );

$count = $row['qtyleft'] + $itemnumber;

$result = mysql_query("UPDATE inventory SET qtyleft='$count' WHERE id='$proid'")
or die(mysql_error());
header("location: tableedit.php#page=addproitem");
?>
