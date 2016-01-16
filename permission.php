<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Attendance Management</title>
<link href="stylesheets.css" rel="stylesheet" type="text/css">
<script>
    function validateForm()
{
var a=document.forms["myform"]["perdatetxt"].value;
var b=document.forms["myform"]["perfromtxt"].value;
var c=document.forms["myform"]["pertotxt"].value;

if (a==null || a=="")
  {
  alert("Select the date");
  return false;
  }
  if (b==null || b=="")
  {
  alert("Select the timing");
  return false;
  }
  if (c==null || c=="")
  {
  alert("Select the timing");
  return false;
  }
}
    </script>
</head>

<body>
<form action="insert.php?page=permission" method="post" name="myform" id="myform" onSubmit="return validateForm()">
<table class="mainpage" align="center" width="980"  height="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="top" height="139"><?php include 'header.php'; ?></td>
  </tr>
  <tr>
    <td align="center" valign="middle">
    <?php 
   $name=$_GET["notification"];
if($name == "true"){
print "<span class='notification'>Your permission has been applied</span><br><br>";
}
?>
<table width="300" border="0" cellpadding="10" cellspacing="0" class="formborders">
      <tr>
        <td colspan="2" class="formhead">Apply Permission</td>
      </tr>
      <tr>
        <td width="81" class="formtext">Date</td>
        <td width="179">
      
  <input name="perdatetxt" type="date" class="textfields" id="perdatetxt" /></td>
      </tr>
      <tr>
        <td class="formtext">From</td>
        <td>
        <script language="javascript">
        function setto(){
			document.getElementById('perfromtxt').value=Number(document.getElementById('hourlist').value)+"."+document.getElementById('seclist').value;
			document.getElementById('pertotxt').value=Number(document.getElementById('hourlist').value)+Number(2)+"."+document.getElementById('seclist').value;
        }
        </script>
        <select name="hourlist" class="texts" id="hourlist" onChange="javascript:setto();">
          <option  value="9" selected="selected">9</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          <option value="13">13</option>
          <option value="14">14</option>
          <option value="15">15</option>
          <option value="16">16</option>
          <option value="17">17</option>
          <option value="18">18</option>
          <option value="19">19</option>
        </select> <select name="seclist" class="texts" id="seclist"  onChange="javascript:setto();">
          <option value="00">00</option>
          <option value="15">15</option>
          <option value="30">30</option>
          <option value="45">45</option>
        </select>
        <input name="perfromtxt" type="text" class="textfields" id="perfromtxt" size="5" readonly/></td>
      </tr>
      <tr>
        <td class="formtext">To</td>
        <td><input name="pertotxt" type="text" class="textfields" id="pertotxt" readonly/></td>
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