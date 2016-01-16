<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Attendance Management</title>
<link href="stylesheets.css" rel="stylesheet" type="text/css">
<script>
    function validateForm()
{
var a=document.forms["myform"]["desigtxt"].value;

if (a==null || a=="")
  {
  alert("Enter the designation");
  return false;
  }
}
    </script>
</head>

<body>
<form action="insert.php?page=designation" method="post" name="myform" id="myform" onSubmit="return validateForm()">
<table class="mainpage" align="center" width="980"  height="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="top" height="139"><?php include 'header.php'; ?></td>
  </tr>
  <tr>
    <td align="center" valign="middle">
   <?php 
   $name=$_GET["notification"];
if($name == "true"){
print "<span class='notification'>New Designation has been added</span><br><br>";
}
?>
<table width="300" border="0" cellpadding="10" cellspacing="0" class="formborders">
      <tr>
        <td colspan="2" class="formhead">Add Postions</td>
      </tr>
      <tr>
        <td width="81" class="formtext">Designation</td>
        <td width="179"><input type="text" name="desigtxt" id="desigtxt"></td>
      </tr>
      <tr>
        <td class="formtext">&nbsp;</td>
        <td><input name="button" type="submit" class="button" id="button" value="Add"></td>
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