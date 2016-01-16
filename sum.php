<?php
$DBhost = "localhost";
$DBuser = "root";
$DBpass = "";
$DBName = "attendance";
$table = "records";
$sum = 0;
mysql_connect($DBhost,$DBuser,$DBpass) or die("Unable to connect to database");
mysql_select_db("$DBName") or die("Unable to select database $DBName");
$result = mysql_query("SELECT * FROM $table");
while ($row = mysql_fetch_row($result)) {
   $sum += $row[3];
   }
?>

<?php
print "$sum";
?>