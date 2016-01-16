<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Attendance Management</title>
<link href="stylesheets.css" rel="stylesheet" type="text/css">
<script>
    function validateForm()
{
var a=document.forms["myform"]["fromtxt"].value;

if (a==null || a=="")
  {
  alert("Select the from date");
  return false;
  }
}
    </script>
</head>

<body>
<form action="insert.php?page=leave" method="post" name="myform" id="myform" onSubmit="return validateForm()">
<table class="mainpage" align="center" width="980"  height="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="top" height="139"><?php include 'header.php'; ?></td>
  </tr>
  <tr>
    <td align="center" valign="middle"><?php 
   $name=$_GET["notification"];
if($name == "true"){
print "<span class='notification'>Your leave has been applied</span><br><br>";
}
?><table width="300" border="0" cellpadding="10" cellspacing="0" class="formborders">
      <tr>
        <td colspan="2" class="formhead">Apply Leave</td>
      </tr>
      <tr>
        <td width="81" class="formtext">From</td>
        <td width="179">
      
  <input name="fromtxt" type="date" class="textfields" id="datepicker" /></td>
      </tr>
      <tr>
        <td class="formtext">To</td>
        <td><input name="totxt" type="date" class="textfields" id="datepicker1"/></td>
      </tr>
      <tr>
        <td class="formtext">&nbsp;</td>
        <td><input name="button" type="submit" class="button" id="button" value="Submit"></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="20" class="footerline" valign="bottom"><?php include 'footer.php'; ?></td>
  </tr>
</table>
</form>
</body>
</html>