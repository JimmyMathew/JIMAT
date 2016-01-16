<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Attendance Management</title>
<link href="stylesheets.css" rel="stylesheet" type="text/css">
</head>

<body>
<script language="javascript">
function submit_name()  {
    document.myform.action = "report.php?notification=false&search=yes&para=name";
    document.myform.submit();
}
function submit_desig()  {
    document.myform.action = "report.php?notification=false&search=yes&para=desig";
    document.myform.submit();
}
function submit_month()  {
    document.myform.action = "report.php?notification=false&search=yes&para=month";
    document.myform.submit();
}
function submit_year()  {
    document.myform.action = "report.php?notification=false&search=yes&para=year";
    document.myform.submit();
}
function submit_personreport()  {
	vars1=document.getElementById("namelist1").value;
	vars2=document.getElementById("monthlist1").value;
	vars3=document.getElementById("yearlist1").value;
	if(vars1!="" && vars2!="" && vars3!=""){
    window.open("person-report.php?name="+vars1+"&month="+vars2+"&year="+vars3, "_blank");
	}else{
	alert("Please select an employee name | Month | Year");
	}
}
</script>
<table class="mainpage" align="center" width="980"  height="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="top" height="139"><?php include 'header.php'; ?></td>
  </tr>
  <tr>
    <td align="center" valign="middle">
    <table border='1' width='100%' cellpadding='10' cellspacing='0' class='formborders'>
    <tr class=texts>
    <td><form method="post"  name="myform" id="myform">Filter by : Name 
    <?php
 $query = "select Id,Name from persons order by Id";
 $result = mysqli_query($query,$conn);
 $selectbox='<select name=\'namelist\' onChange="javascript:submit_name();"><option value="">Employee</option>';
 while ($row = mysqli_fetch_assoc($result)) {
     $selectbox.='<option value="'.$row['Name'].'">' . $row['Name'] . '</option>';
 }
 $selectbox.='</select>';
 mysqli_free_result($result);
 echo $selectbox;
?> or
Designation
<?php
 $query = "select Id,Designation from designation order by Id";
 $result = mysqli_query($query,$conn);
 $selectbox='<select name=\'desiglist\'  onChange="javascript:submit_desig();"><option value="">Designation</option>';
 while ($row = mysqli_fetch_assoc($result)) {
     $selectbox.='<option value="'.$row['Designation'].'">' . $row['Designation'] . '</option>';
 }
 $selectbox.='</select>';
 mysqli_free_result($result);
 echo $selectbox;
?>or 
Month
<select name="monthlist" onChange="javascript:submit_month();">
  <option value="">Month</option>
  <option value="Jan">Jan</option>
  <option value="Feb">Feb</option>
  <option value="Mar">Mar</option>
  <option value="Apr">Apr</option>
  <option value="May">May</option>
  <option value="Jun">Jun</option>
  <option value="Jul">Jul</option>
  <option value="Aug">Aug</option>
  <option value="Sep">Sep</option>
  <option value="Oct">Oct</option>
  <option value="Nov">Nov</option>
  <option value="Dec">Dec</option>
</select> or
Year
<select name="yearlist" onChange="javascript:submit_year();">
<option value="">Year</option>
  <option value="2013">2013</option>
  <option value="2012">2012</option>
</select>
</form></td>
    </tr>
    </table>
<table border='1' width='100%' cellpadding='10' cellspacing='0' class='formborders'>
    <tr class=texts>
    <td>Show result only for : 
    <?php
 $query = "select Id,Name from persons order by Id";
 $result = mysqli_query($query,$conn);
 $selectbox='<select name=\'namelist1\' id=\'namelist1\'><option value="">Employee</option>';
 while ($row = mysqli_fetch_assoc($result)) {
     $selectbox.='<option value="'.$row['Name'].'">' . $row['Name'] . '</option>';
 }
 $selectbox.='</select>';
 mysqli_free_result($result);
 echo $selectbox;
?> Month
<select name="monthlist1" id="monthlist1">
  <option value="">Month</option>
  <option value="Jan">Jan</option>
  <option value="Feb">Feb</option>
  <option value="Mar">Mar</option>
  <option value="Apr">Apr</option>
  <option value="May">May</option>
  <option value="Jun">Jun</option>
  <option value="Jul">Jul</option>
  <option value="Aug">Aug</option>
  <option value="Sep">Sep</option>
  <option value="Oct">Oct</option>
  <option value="Nov">Nov</option>
  <option value="Dec">Dec</option>
</select> Year <select name="yearlist1" id="yearlist1">
<option value="">Year</option>
  <option value="2013">2013</option>
  <option value="2012">2012</option>
</select><input name="Show report" type="button" class="button" id="Show report" value="Show report" onClick="javascript:submit_personreport();">
</td>
    </tr>
    </table>
    <?php
	$name=$_GET["search"];
	$name1=$_GET["para"];
if($name == "yes" and $name1=="name"){
$result = mysqli_query($conn,"SELECT * FROM records where Name='$_POST[namelist]'");
}else if($name == "yes" and $name1=="desig"){
$result = mysqli_query($conn,"SELECT * FROM records where Designation='$_POST[desiglist]'");
}else if($name == "yes" and $name1=="month"){
$result = mysqli_query($con,"SELECT * FROM records where Month='$_POST[monthlist]'");
}else if($name == "yes" and $name1=="year"){
$result = mysqli_query($conn,"SELECT * FROM records where Year='$_POST[yearlist]'");
}else{
$result = mysqli_query($conn,"SELECT * FROM records");
}

echo "<table border='1' width='100%' cellpadding='10' cellspacing='0' class='formborders'>
<tr class=formhead>
<th>Name</th>
<th>Designation</th>
<th>Month</th>
<th>Year</th>
<th>Leaves</th>
<th>Leavesfrom</th>
<th>Leavesto</th>
<th>Permission</th>
<th>Permissiondate</th>
<th>Permissionfrom</th>
<th>Permissionto</th>
<th>Attendance</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr class='texts'>";
  echo "<td>" . $row['Name'] . "</td>";
  echo "<td>" . $row['Designation'] . "</td>";
  echo "<td>" . $row['Month'] . "</td>";
  echo "<td>" . $row['Year'] . "</td>";
  echo "<td>" . $row['Leaves'] . "</td>";
  echo "<td>" . $row['Leavefrom'] . "</td>";
  echo "<td>" . $row['Leaveto'] . "</td>";
  echo "<td>" . $row['Permission'] . "</td>";
  echo "<td>" . $row['Permissiondate'] . "</td>";
  echo "<td>" . $row['Permissionfrom'] . "</td>";
  echo "<td>" . $row['Permissionto'] . "</td>";
  echo "<td>" . $row['Attendance'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysqli_close($conn);
?>
    </td>
  </tr>
  <tr>
    <td height="20" class="footerline" valign="bottom"><?php include 'footer.php'; ?></td>
  </tr>
</table>
</body>
</html>