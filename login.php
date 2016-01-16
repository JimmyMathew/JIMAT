<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Attendance Management</title>
<link href="stylesheets.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
$name=$_GET["login"];
if($name == "failure"){
print "<script type=\"text/javascript\">"; 
print "alert('You have entered a wrong username/password')"; 
print "</script>";  
};

?>
<table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center" valign="middle"><form name="form1" method="post" action="checklogin.php"><table width="300" border="0" class="logintable" cellspacing="0" cellpadding="10">
      <tr>
        <td colspan="3" bgcolor="#FF6600" class="tablehead">Login</td>
      </tr>
      <tr>
        <td width="98" rowspan="3"><img src="images/lock-icon.png" width="130" height="130"></td>
        <td width="50" class="texts">Username</td>
        <td width="90"><input name="myusername" type="text" class="textfields" id="myusername" size="15"></td>
      </tr>
      <tr>
        <td class="texts">Password</td>
        <td><input name="mypassword" type="password" class="textfields" id="mypassword" size="15"></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><input name="button" type="submit" class="button" id="button" value="Submit"></td>
      </tr>
    </table></form></td>
  </tr>
</table>
</body>
</html>
