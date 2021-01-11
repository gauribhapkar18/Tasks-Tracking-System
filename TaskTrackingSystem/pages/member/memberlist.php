<html>
<head>
	<link rel=stylesheet type=text/css href=member.css>
</head>
<?php

$con=pg_connect("host=127.0.0.1 dbname=project user=postgres") or die("Could not connect");

//insert member in db
$query = "select fname,laname,email,mobile from madd";
$result=pg_query($query);
echo "<body bgcolor=grey >

	<h1 align=center>list of members:-</h1>
		
	<table align=center>	
	<th>Name</th>
	<th>Email</th>
	<th>Contact </th>";	
	while($r=pg_fetch_row($result))
	{
	echo"<tr>
		<td>$r[0] $r[1]</td>
		<td>$r[2]</td>
		<td>$r[3]</td>
	</tr>";
	}

echo"</table>";
pg_close($con);
echo"</body>";
?>
</html>
