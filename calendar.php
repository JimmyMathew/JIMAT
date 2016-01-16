<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Attendance Management</title>
<link href="stylesheets.css" rel="stylesheet" type="text/css">
</head>

<body>
<form action="insert.php?page=employee" method="post" enctype="multipart/form-data"
name="uploadImage" id="uploadImage"><table class="mainpage" align="center" width="980"  height="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="top" height="139"><?php include 'header.php'; ?></td>
  </tr>
  <tr>
    <td align="center" valign="middle"> <?php 
   $name=$_GET["notification"];
if($name == "true"){
print "<span class='notification'>Today's attendance has been recorded. Have a nice day.</span><br><br>";
}
?>
    <?php include 'Calendarclass.php'; ?>
    
    <?php
// Construct a calendar to show the current month
$cal = new Calendar;
echo $cal->getCurrentMonthView();
?>
</td>
  </tr>
  <tr>
    <td height="20" class="footerline" valign="bottom"><?php include 'footer.php'; ?></td>
  </tr>
</table>
</form>
</body>
</html>