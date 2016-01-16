<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Attendance Management</title>
<link href="stylesheets.css" rel="stylesheet" type="text/css">
<script>
    function validateForm()
{
var a=document.forms["uploadImage"]["nametxt"].value;
var c=document.forms["uploadImage"]["salarytxt"].value;
var d=document.forms["uploadImage"]["phototxt"].value;

if (a==null || a=="")
  {
  alert("Please enter the name");
  return false;
  }
if (c==null || c=="")
  {
  alert("Please enter the salary");
  return false;
  }
if (d==null || d=="")
  {
  alert("Please upload the photo");
  return false;
  }
}
    </script>
     <SCRIPT language=Javascript>
       <!--
       function isNumberKey(evt)
       {
          var charCode = (evt.which) ? evt.which : event.keyCode;
          if (charCode != 46 && charCode > 31 
            && (charCode < 48 || charCode > 57))
             return false;

          return true;
       }
       //-->
    </SCRIPT>
</head>

<body>
<form action="insert.php?page=employee" method="post" enctype="multipart/form-data"
name="uploadImage" id="uploadImage" onSubmit="return validateForm()"><table class="mainpage" align="center" width="980"  height="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="top" height="139"><?php include 'header.php'; ?></td>
  </tr>
  <tr>
    <td align="center" valign="middle">
    <?php 
   $name=$_GET["notification"];
if($name == "true"){
print "<span class='notification'>New Employee has been added</span><br><br>";
}
?>
<table width="300" border="0" cellpadding="10" cellspacing="0" class="formborders">
      <tr>
        <td colspan="2" class="formhead">Add Employee</td>
      </tr>
      <tr>
        <td width="81" class="formtext">Name</td>
        <td width="179"><input type="text" name="nametxt" id="nametxt"></td>
      </tr>
      <tr>
        <td class="formtext">Designation</td>
        <td><?php

 $query = "select Id,Designation from designation order by Id";

 $result = mysql_query($query,$conn);

 $selectbox='<select name=\'desigtxt\'>';

 while ($row = mysql_fetch_assoc($result)) {
     $selectbox.='<option value="' . $row['Id'] . ','.$row['Designation'].'">' . $row['Designation'] . '</option>';
 }

 $selectbox.='</select>';

 mysql_free_result($result);

 echo $selectbox;

?></td>
      </tr>
      <tr>
        <td class="formtext">Salary</td>
        <td><input type="text" name="salarytxt" id="salarytxt" onKeyPress="return isNumberKey(event)"></td>
      </tr>
      <tr>
        <td class="formtext">Photo</td>
        <td><input name="phototxt" type="file" class="textfields" id="phototxt"></td>
      </tr>
      <tr>
        <td class="formtext">&nbsp;</td>
        <td><input  name="upload" id="upload" type="submit" class="button" value="Add"></td>
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