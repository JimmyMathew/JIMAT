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
    <td align="center" valign="middle">
    <?php 
   $name=$_GET["notification"];
if($name == "true"){
print "<span class='notification'>Designation has been deleted successfully</span><br><br>";
}
?>
    <?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("attendance", $con);

$result = mysql_query("SELECT * FROM designation");

echo "<table border='1' cellpadding='10' cellspacing='0' class='formborders'>
<tr class=formhead>
<th>Id</th>
<th>Designation</th>
<th>Delete</th>
</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr class='texts'>";
  echo "<td>" . $row['Id'] . "</td>";
  echo "<td>" . $row['Designation'] . "</td>";
  echo "<td><a href=delete.php?page=designation&ids=".$row['Id'].">Delete</a></td>";
  echo "</tr>";
  }
echo "</table>";

mysql_close($con);
?>
    </td>
  </tr>
  <tr>
    <td height="20" class="footerline" valign="bottom"><?php include 'footer.php'; ?></td>
  </tr>
</table>
</body>
</html>