<?php

//include('dbconfig.php');

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];

$con=pg_connect("host=127.0.0.1 dbname=project user=postgres") or die("Could not connect");

//insert member in db
$query = "select fname,lname,email,mobile from madd";
$result=pg_query($query);
if($r=pg_fetch_row($result))
{
	echo $r[0]."<br/>";
	echo"Member is added";
	echo"please check the details of the Member";
	/*	<tr>
	<td>$fname</td>
	<td>$lname</td>
	<td>$gender</td>
	<td>$bdate</td>
	<td>$mobile</td>
	<td>$email</td>
	<td>$email</td>
	</tr>*/

}
pg_close($con);


?>
