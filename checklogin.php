<?php

ob_start();
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="attendance"; // Database name 
$tbl_name="persons"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// Define $myusername and $mypassword 
$myusername=$_POST['myusername']; 
$mypassword=$_POST['mypassword']; 

// To protect MySQL injection 
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$sql="SELECT * FROM $tbl_name WHERE Username='$myusername' and Password='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "mypage.php"
session_start();
while($row = mysql_fetch_array($result))
  {
	  $_SESSION['id'] = $row['Id'];
	  $_SESSION['name'] = $row['Name'];
	  $_SESSION['designation'] = $row['Designation'];
	  $_SESSION['image'] = $row['ImagePath'];
	  $_SESSION['users'] = $myusername;
	  $_SESSION['pass'] = $mypassword;
  }

header("location:mypage.php");
}
else {
header("location:login.php?login=failure");
}
ob_end_flush();
?>