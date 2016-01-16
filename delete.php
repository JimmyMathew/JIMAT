<?php include 'config.php'; ?>
<?php
$name=$_GET["page"];
$delids=$_GET["ids"];
?>
<?php
if($name == "designation"){
$sql="DELETE FROM designation WHERE id='$delids'";
$result=mysql_query($sql);
header( 'Location: position-list.php?notification=true' );
}
?>
<?php
if($name == "employee"){
$sql="DELETE FROM persons WHERE id='$delids'";
$result=mysql_query($sql);
header( 'Location: employee-list.php?notification=true' );
}
?>
<?php
if($name == "government"){
$sql="DELETE FROM government WHERE id='$delids'";
$result=mysql_query($sql);
header( 'Location: government-list.php?notification=true' );
}
?>
<?php
mysql_close($conn);
?>