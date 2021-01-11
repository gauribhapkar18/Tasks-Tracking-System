<?php
date_default_timezone_set('UTC');

$tname = $_POST['fname'];
$dis = $_POST['lname'];
$mname = $_POST['mname'];
$edate = $_POST['edate'];
$sdate = $_POST['sdate'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];

$date1=date_create($edate);
$date2=date_create($sdate);
$diff=date_diff($date2,$date1);
//echo $diff;
$r1= ($diff->format("%R%a"));
$r2=(int)"$r1";
//echo"$r2";
if($r2<0)
{
	echo"End Date Should Be Greater than or Equal to Start Date";
}
else
{

$con=pg_connect("host=localhost dbname=project user=postgres") or die("Could not connect");

//insert member in db
$query = "insert into tadd values('$tname', '$dis', '$mname ', '$edate', '$sdate','$mobile', '$email')";
$result=pg_query($query);
if(pg_affected_rows($result)>0)
{
	echo"task added";
	

}
pg_close($con);

}
?>
