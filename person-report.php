<?php include 'config.php'; ?>
<link href="stylesheets.css" rel="stylesheet" type="text/css">
<?php
$name=$_GET["name"];
$month=$_GET["month"];
$year=$_GET["year"];
$month1=$currentmonthyear=date("M,Y",strtotime("-1 Months"));
$month2=$currentmonthyear=date("M,Y",strtotime("-2 Months"));
$month3=$currentmonthyear=date("M,Y",strtotime("-3 Months"));
$month4=$currentmonthyear=date("M,Y",strtotime("-4 Months"));
$month5=$currentmonthyear=date("M,Y",strtotime("-5 Months"));
$month6=$currentmonthyear=date("M,Y",strtotime("-6 Months"));
$month7=$currentmonthyear=date("M,Y",strtotime("-7 Months"));
$month8=$currentmonthyear=date("M,Y",strtotime("-8 Months"));
$month9=$currentmonthyear=date("M,Y",strtotime("-9 Months"));
$month10=$currentmonthyear=date("M,Y",strtotime("-10 Months"));
$month11=$currentmonthyear=date("M,Y",strtotime("-11 Months"));
$month12=$currentmonthyear=date("M,Y",strtotime("-12 Months"));

$selected1 = explode(',', $month1);
$selected2 = explode(',', $month2);
$selected3 = explode(',', $month3);
$selected4 = explode(',', $month4);
$selected5 = explode(',', $month5);
$selected6 = explode(',', $month6);
$selected7 = explode(',', $month7);
$selected8 = explode(',', $month8);
$selected9 = explode(',', $month9);
$selected10 = explode(',', $month10);
$selected11 = explode(',', $month11);
$selected12 = explode(',', $month12);

$s_id1 = $selected1[0];
$s_id2 = $selected2[0];
$s_id3 = $selected3[0];
$s_id4 = $selected4[0];
$s_id5 = $selected5[0];
$s_id6 = $selected6[0];
$s_id7 = $selected7[0];
$s_id8 = $selected8[0];
$s_id9 = $selected9[0];
$s_id10 = $selected10[0];
$s_id11 = $selected11[0];
$s_id12 = $selected12[0];

$s_name1 = $selected1[1];
$s_name2 = $selected2[1];
$s_name3 = $selected3[1];
$s_name4 = $selected4[1];
$s_name5 = $selected5[1];
$s_name6 = $selected6[1];
$s_name7 = $selected7[1];
$s_name8 = $selected8[1];
$s_name9 = $selected9[1];
$s_name10 = $selected10[1];
$s_name11 = $selected11[1];
$s_name12 = $selected12[1];

$sum = 0;
$sum1 = 0;
$sum2 = 0;

$summonth1 = 0;
$summonth2 = 0;
$summonth3 = 0;
$summonth4 = 0;
$summonth5 = 0;
$summonth6 = 0;
$summonth7 = 0;
$summonth8 = 0;
$summonth9 = 0;
$summonth10 = 0;
$summonth11 = 0;
$summonth12 = 0;

$allotedleave=2;

$result = mysql_query("SELECT * FROM records where Name='$name' and Month='$month' and Year='$year'");
$result2 = mysql_query("SELECT * FROM records where Name='$name' and Month='$month' and Year='$year' and Attendance='' and Leaves='' and Permission=''");
$result1 = mysql_query("SELECT * FROM persons where Name='$name'");

$monthresult1 = mysql_query("SELECT * FROM records where Name='$name' and Month='$s_id1' and Year='$s_name2'");
$monthresult2 = mysql_query("SELECT * FROM records where Name='$name' and Month='$s_id2' and Year='$s_name3'");
$monthresult3 = mysql_query("SELECT * FROM records where Name='$name' and Month='$s_id3' and Year='$s_name3'");
$monthresult4 = mysql_query("SELECT * FROM records where Name='$name' and Month='$s_id4' and Year='$s_name4'");
$monthresult5 = mysql_query("SELECT * FROM records where Name='$name' and Month='$s_id5' and Year='$s_name5'");
$monthresult6 = mysql_query("SELECT * FROM records where Name='$name' and Month='$s_id6' and Year='$s_name6'");
$monthresult7 = mysql_query("SELECT * FROM records where Name='$name' and Month='$s_id7' and Year='$s_name7'");
$monthresult8 = mysql_query("SELECT * FROM records where Name='$name' and Month='$s_id8' and Year='$s_name8'");
$monthresult9 = mysql_query("SELECT * FROM records where Name='$name' and Month='$s_id9' and Year='$s_name9'");
$monthresult10 = mysql_query("SELECT * FROM records where Name='$name' and Month='$s_id10' and Year='$s_name10'");
$monthresult11 = mysql_query("SELECT * FROM records where Name='$name' and Month='$s_id11' and Year='$s_name11'");
$monthresult12 = mysql_query("SELECT * FROM records where Name='$name' and Month='$s_id12' and Year='$s_name12'");


while ($row = mysql_fetch_array($result)) {
   $sum += $row['Leaves'];
   $sum1 += $row['Permission'];
   }
$sum2=mysql_num_rows($result2);
while ($row = mysql_fetch_array($result1)) {
   $imgpath=$row['ImagePath'];
   $salary=$row['Salary'];
   }
while ($row = mysql_fetch_array($monthresult1)) {
  echo $summonth1 += $row['Leaves'];
}
while ($row = mysql_fetch_array($monthresult2)) {
  echo $summonth2 += $row['Leaves'];
}
while ($row = mysql_fetch_array($monthresult3)) {
  echo $summonth3 += $row['Leaves'];
} 
while ($row = mysql_fetch_array($monthresult4)) {
  echo $summonth4 += $row['Leaves'];
} 
while ($row = mysql_fetch_array($monthresult5)) {
  echo $summonth5 += $row['Leaves'];
} 
while ($row = mysql_fetch_array($monthresult6)) {
  echo $summonth6 += $row['Leaves'];
} 
while ($row = mysql_fetch_array($monthresult7)) {
  echo $summonth7 += $row['Leaves'];
} 
while ($row = mysql_fetch_array($monthresult8)) {
  echo $summonth8 += $row['Leaves'];
} 
while ($row = mysql_fetch_array($monthresult9)) {
  echo $summonth9 += $row['Leaves'];
} 
while ($row = mysql_fetch_array($monthresult10)) {
  echo $summonth10 += $row['Leaves'];
} 
while ($row = mysql_fetch_array($monthresult11)) {
  echo $summonth11 += $row['Leaves'];
} 
while ($row = mysql_fetch_array($monthresult12)) {
  echo $summonth12 += $row['Leaves'];
} 
?>
<?php
	$remain1=$allotedleave-$summonth1;
	$remain2=$allotedleave-$summonth2;
	$remain3=$allotedleave-$summonth3;
	$remain4=$allotedleave-$summonth4;
	$remain5=$allotedleave-$summonth5;
	$remain6=$allotedleave-$summonth6;
	$remain7=$allotedleave-$summonth7;
	$remain8=$allotedleave-$summonth8;
	$remain9=$allotedleave-$summonth9;
	$remain10=$allotedleave-$summonth10;
	$remain11=$allotedleave-$summonth11;
	$remain12=$allotedleave-$summonth12;
	
	$totalremains=$remain1+$remain2+$remain3+$remain4+$remain5+$remain6+$remain7+$remain8+$remain9+$remain10+$remain11+$remain12;
?>
<table width="400" border="0" cellpadding="10" cellspacing="0" class="formborders">
  <tr>
    <td colspan="2" class="formhead">Report for <?php echo $name;?> for the Month of <?php echo $month."/".$year;?></td>
  </tr>
  <tr  class="texts">
    <td width="85" rowspan="4" valign="top"><img src=<?php echo "employee/".$imgpath?> width="85" height="85"></td>
    <td width="273" valign="top">Leave : <?php echo $sum;?></td>
  </tr>
  <tr  class="texts">
    <td valign="top">Permission : <?php echo $sum1;?></td>
  </tr>
  <tr  class="texts">
    <td valign="top">Attendance not given: <?php echo $sum2; ?></td>
  </tr>
  <tr  class="texts">
    <td valign="top">Salary : <?php echo $salary;?></td>
  </tr>
  <tr  class="texts">
    <td valign="top">&nbsp;</td>
    <td valign="top">Previous Leave : <?php echo $totalremains;?></td>
  </tr>
   <?php $calcleave=$totalremains-$sum;?>
  <tr  class="texts">
    <td valign="top">&nbsp;</td>
    <td valign="top">Calculated Leave : <?php echo $calcleave=$totalremains-$sum-$sum2;?></td>
  </tr>
  <tr  class="texts">
    <td valign="top">&nbsp;</td>
    <td valign="top">Deduction : 
	<?php 
	if($calcleave<0){
	$balsdalary = ($salary/30)*$calcleave;
	}else{
	$balsdalary = 0;
	}
	?></td>
  </tr>
  <tr  class="texts">
    <td valign="top">&nbsp;</td>
    <td valign="top">Total Salary : 
    <?php 
	echo $salary-$balsdalary;
	?></td>
  </tr>
 
</table>
<table width="400" border="0" cellpadding="10" cellspacing="0" class="formborders">
  <tr>
    <td width="273" class="formhead">Leave History</td>
  </tr>
  <tr>
    <td class="texts">
    <?php
	echo "<b>Current Month : ".date("M")."</b><br>";
    echo $month1." - ".$summonth1." , Alloted Leave - ".$allotedleave.", Calculation - ".$remain1."<br>";
	echo $month2." - ".$summonth2." , Alloted Leave - ".$allotedleave.", Calculation - ".$remain2."<br>";
	echo $month3." - ".$summonth3." , Alloted Leave - ".$allotedleave.", Calculation - ".$remain3."<br>";
	echo $month4." - ".$summonth4." , Alloted Leave - ".$allotedleave.", Calculation - ".$remain4."<br>";
	echo $month5." - ".$summonth5." , Alloted Leave - ".$allotedleave.", Calculation - ".$remain5."<br>";
	echo $month6." - ".$summonth6." , Alloted Leave - ".$allotedleave.", Calculation - ".$remain6."<br>";
	echo $month7." - ".$summonth7." , Alloted Leave - ".$allotedleave.", Calculation - ".$remain7."<br>";
	echo $month8." - ".$summonth8." , Alloted Leave - ".$allotedleave.", Calculation - ".$remain8."<br>";
	echo $month9." - ".$summonth9." , Alloted Leave - ".$allotedleave.", Calculation - ".$remain9."<br>";
	echo $month10." - ".$summonth10." , Alloted Leave - ".$allotedleave.", Calculation - ".$remain10."<br>";
	echo $month11." - ".$summonth11." , Alloted Leave - ".$allotedleave.", Calculation - ".$remain11."<br>";
	echo $month12." - ".$summonth12." , Alloted Leave - ".$allotedleave.", Calculation - ".$remain12."<br>";
	?>
    </td>
  </tr>
</table>
