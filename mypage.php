<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Attendance Management</title>
<link href="stylesheets.css" rel="stylesheet" type="text/css">
</head>

<body>
<table class="mainpage" align="center" width="980"  height="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="top" height="139"><?php include 'header.php'; ?></td>
  </tr>
  <tr>
    <td align="center" valign="middle"><table width="500" border="0" cellspacing="0" cellpadding="5">
      <tr>
        <td rowspan="2" align="left" valign="top"><table width="100%" border="0" cellpadding="10" cellspacing="0" class="formborders">
          <tr>
            <td class="formhead">This month Government Holidays</td>
          </tr>
          <tr>
            <td height="349" valign="top"><p class="formtext">
              <?php
$currentmonths=date('M');
$result = mysql_query("SELECT * FROM government where Month='$currentmonths'");
if(mysql_num_rows($result)!=0){
while($row = mysql_fetch_array($result))
  {
  		echo $row['Reason'] . " - ". $row['Date']."<br>";
  }
}else{
	echo "No government holidays this month";
}
?>
            </p></td>
          </tr>
        </table></td>
        <td height="200" align="left" valign="top"><table width="100%" border="0" cellpadding="10" cellspacing="0" class="formborders">
          <tr>
            <td class="formhead">Current month leave list</td>
          </tr>
          <tr>
            <td height="150" valign="top"><p class="formtext">
<?php
$currentmonths=date('M');
$currentname=$_SESSION['name'];
$result = mysql_query("SELECT * FROM records where Month='$currentmonths' and Name='$currentname'");
if(mysql_num_rows($result)!=0){
while($row = mysql_fetch_array($result))
  {
	  if($row['Leaveto']!=""){
  		echo $row['Leavefrom']." - ".$row['Leaveto']."<br>";
	  }else{
		 echo $row['Leavefrom']."<br>";
	  }
  }
}else{
	echo "No leave taken for this month";
}
?>
</p></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="200" align="left" valign="top"><table width="100%" border="0" cellpadding="10" cellspacing="0" class="formborders">
          <tr>
            <td class="formhead">Current month Permissions list</td>
            </tr>
          <tr>
            <td height="150" valign="top"><p class="formtext"><?php
$currentmonths=date('M');
$result = mysql_query("SELECT * FROM records where Month='$currentmonths' and Name='$currentname'");
if(mysql_num_rows($result)!=0){
while($row = mysql_fetch_array($result))
  {
	  if($row['Permissiondate']!=""){
  		echo $row['Permissiondate']."<br>";
	  }
  }
}else{
	echo "No permissions taken for this month";
}
?></p></td>
            </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="20" class="footerline" valign="bottom"><?php include 'footer.php'; ?></td>
  </tr>
</table>
</body>
</html>