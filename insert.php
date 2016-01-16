<?php include 'config.php'; ?>
<?php
$name=$_GET["page"];
?>
<?php
if($name == "designation"){
$sql = "INSERT INTO designation ".
       "(Designation) ".
       "VALUES ( '$_POST[desigtxt]')";
	   $retval = mysql_query( $sql, $conn );
	   header( 'Location: add-position.php?notification=true' );
}

?>
<?php
if($name == "employee")
{
define ('MAX_FILE_SIZE', 1024 * 768);

if (array_key_exists('upload', $_POST)) 
{
  // define constant for upload folder
  define('UPLOAD_DIR', 'employee/');
  // replace any spaces in original filename with underscores
  $file = str_replace(' ', '_', time()."_".$_FILES['phototxt']['name']);
  // create an array of permitted image types
  $permitted = array('image/gif', 'image/jpeg', 'image/pjpeg',
'image/png');
  
  // upload if file is OK
  if (in_array($_FILES['phototxt']['type'], $permitted)
      && $_FILES['phototxt']['size'] > 0 
      && $_FILES['phototxt']['size'] <= MAX_FILE_SIZE) {
    switch($_FILES['phototxt']['error']) {
      case 0:
        // check if a file of the same name has been uploaded
        if (!file_exists(UPLOAD_DIR . $file)) {
          // move the file to the upload folder and rename it
          $success =
move_uploaded_file($_FILES['phototxt']['tmp_name'], UPLOAD_DIR .
$file);
        } else {
          echo $result = 'A file of the same name already exists.';
        }
        if ($success) {
          echo $result = "$file uploaded successfully.";
        } else {
          echo $result = "Error uploading $file. Please try again.";
        }
        break;
      case 3:
      case 6:
      case 7:
      case 8:
        echo $result = "Error uploading $file. Please try again.";
        break;
      case 4:
        echo $result = "You didn't select a file to be uploaded.";
    }
  } else {
    echo $result = "$file is either too big or not an image.";
  }
}

$selected = explode(',', $_POST['desigtxt']);
echo $_POST['desigtxt'];
$s_id = $selected[0];
$s_name = $selected[1];

$result = mysql_query("SELECT    *
FROM      persons
ORDER BY  Id DESC
LIMIT     1");
$row = mysql_fetch_array($result);

$total = $row[0]+1;
$userpass= "$_POST[nametxt]".$total;
$sql = "INSERT INTO persons ".
       "(Name,Designation,Salary,ImagePath,Username,Password,Type) ".
       "VALUES ('$_POST[nametxt]','$s_name','$_POST[salarytxt]','$file','$userpass','$userpass','$s_id')";
	   
	   
	   $retval = mysql_query( $sql, $conn );
	 header( 'Location: add-employee.php?notification=true' );
}
?>
<?php
$unixtime = strtotime($_POST["datetxt"]);
$datemonths=date('M', $unixtime); //month
if($name == "government"){
$sql = "INSERT INTO government".
       "(Reason,Month,Date)".
       "VALUES ( '$_POST[reasontxt]','$datemonths','$_POST[datetxt]')";
	   $retval = mysql_query( $sql, $conn );
	   header( 'Location: add-government.php?notification=true');
}

?>
<?php
session_start();
?>
<?php
$currentattendance=date("m/d/Y");
$currentmonth=date("M");
$currentyear=date("Y");
$dateget=getdate(strtotime(date("m/d/Y")));
$currentday=$dateget["weekday"];
if($name == "calendar"){
$sql = "INSERT INTO records".
       "(EmpId,Name,Designation,Leaves,Permission,Month,Year,Leavefrom,Leaveto,Permissiondate,Permissionfrom,Permissionto,Attendance,Weekname)".
       "VALUES ('$_SESSION[id]','$_SESSION[name]','$_SESSION[designation]','','','$currentmonth','$currentyear','','','','','','$currentattendance','$currentday')";
	   $retval = mysql_query( $sql, $conn );
	   header( 'Location: calendar.php?notification=true');
}
?>
<?php
$currentmonth=date("M");
$currentyear=date("Y");
$startleave = strtotime($_POST["fromtxt"]);
$endleave = strtotime($_POST["totxt"]);
if($_POST["totxt"]!=""){
$days_between = ceil(abs($endleave - $startleave) / 86400)+1;
}else{
$days_between=1;
}
if($name == "leave"){
$sql = "INSERT INTO records".
       "(EmpId,Name,Designation,Leaves,Permission,Month,Year,Leavefrom,Leaveto,Permissiondate,Permissionfrom,Permissionto,Attendance,Weekname)".
       "VALUES ('$_SESSION[id]','$_SESSION[name]','$_SESSION[designation]','$days_between','','$currentmonth','$currentyear','$_POST[fromtxt]','$_POST[totxt]','','','','','')";
	   $retval = mysql_query( $sql, $conn );
	   header( 'Location: leave.php?notification=true');
}
?>
<?php
if($name == "permission"){
$sql = "INSERT INTO records".
       "(EmpId,Name,Designation,Leaves,Permission,Month,Year,Leavefrom,Leaveto,Permissiondate,Permissionfrom,Permissionto,Attendance,Weekname)".
       "VALUES ('$_SESSION[id]','$_SESSION[name]','$_SESSION[designation]','','2','$currentmonth','$currentyear','','','$_POST[perdatetxt]','$_POST[perfromtxt]','$_POST[pertotxt]','','')";
	   $retval = mysql_query( $sql, $conn );
	   header( 'Location: permission.php?notification=true');
}
?>
<?php
mysql_close($conn);
?>