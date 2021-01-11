<?php

//include('dbconfig.php');

$atask = $_POST['addtask'];
$tname = $_POST['taskname'];
$dis= $_POST['dis'];
$mname= $_POST['membername'];
$edate= $_POST['edate'];
$sdate= $_POST['sdate'];
$no= $_POST['number'];
$email = $_POST['email'];

$con=pg_connect("host=127.0.0.1 dbname=project user=postgres") or die("Could not connect");

//insert member in db
$query = "insert into tadd values('$atask', '$tname', '$dis', '$mname', '$edate', '$sdate','$no','$email')";
$result=pg_query($query);
if(pg_affected_rows($result)>0)
{
	echo"here the info.........";
	/*<tr>
	<td>$atask</td>
	<td>$tname</td>
	<td>$dis</td>
	<td>$mname</td>
	<td>$edate</td>
	<td>$sdate</td>
	<td>$no</td>
	<td>$email</td>
	</tr>
	*/
}
pg_close($con);


?>
