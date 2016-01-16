<?php include 'config.php'; ?>
<?php
session_start();
if($_SESSION['users'] == ""){
header("location:login.php");
}
?>
<table width="100%" border="0" cellspacing="0" cellpadding="10">
  <tr>
    <td width="100%" bgcolor="#FF6600" class="logo">Attendance Management</td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="10">
  <tr>
    <td width="5%" class="logo"><?php print "<img src=employee/". $_SESSION['image'] ." width=30 height=30>"; ?></td>
    <td width="88%" class="texts">Welcome <?php echo $_SESSION['name']; ?>, <?php echo $_SESSION['designation']; ?>, <?php echo date("m/d/Y"); ?>, <?php $dateget=getdate(strtotime(date("m/d/Y"))); echo $dateget['weekday']; ?></td>
    <td width="7%" align="right" class="texts"><a href="logout.php">Sign Out</a></td>
  </tr>
</table>
<table width="100%" border="0" cellpadding="10" cellspacing="0" class="menu">
  <tr>
    <td><li class="normal"><a href="mypage.php?notification=false">Home</a></li>
  <li class="normal"><a href="calendar.php?notification=false">Attendance</a></li>
      <li class="normal"><a href="leave.php?notification=false">Leave</a></li>
      <li class="normal"><a href="permission.php?notification=false">Permission</a></li>
    
       <?php 
if($_SESSION['designation'] == "Administrator"){
echo"<li class='normal'><a href='add-position.php?notification=false'>Add Positions</a></li>";
echo"<li class='normal'><a href='add-employee.php?notification=false'>Add Employee</a></li>";

echo"<li class='normal'><a href='add-government.php?notification=false'>Add Government Holidays</a></li>";
echo"<li class='normal'><a href='position-list.php?notification=false'>Positions</a></li>";
echo"<li class='normal'><a href='employee-list.php?notification=false'>Employees List</a></li>";

echo"<li class='normal'><a href='government-list.php?notification=false'>Government Holiday List</a></li>";
echo"<li class='normal'><a href='report.php?notification=false&search=no&para=no'>Reports</a></li>";
}else if($_SESSION['designation'] == "Manager"){
echo"<li class='normal'><a href='employee-list.php?notification=false'>Employees List</a></li>";
echo"<li class='normal'><a href='position-list.php?notification=false'>Positions</a></li>";
echo"<li class='normal'><a href='government-list.php?notification=false'>Government Holiday List</a></li>";
echo"<li class='normal'><a href='report.php?notification=false&search=no&para=no'>Reports</a></li>";
}
?>
<?php


?>
<?php
if($_SESSION['designation'] == "Project Manager"){
echo"<li class='normal'><a href='employee-list.php?notification=false'>Employees List</a></li>";
echo"<li class='normal'><a href='position-list.php?notification=false'>Positions</a></li>";
echo"<li class='normal'><a href='government-list.php?notification=false'>Government Holiday List</a></li>";
}
?>
<?php
if($_SESSION['designation'] == "Delivery Manager"){
echo"<li class='normal'><a href='employee-list.php?notification=false'>Employees List</a></li>";
echo"<li class='normal'><a href='position-list.php?notification=false'>Positions</a></li>";
echo"<li class='normal'><a href='government-list.php?notification=false'>Government Holiday List</a></li>";
}
?></td>

  </tr>
</table>