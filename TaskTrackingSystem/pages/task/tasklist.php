<html>
<head>
	<link rel=stylesheet type=text/css href=task.css>
</head>
<?php


$con=pg_connect("host=127.0.0.1 dbname=project user=postgres") or die("Could not connect");

//insert member in db
@$query = "select tname,dis,mname,edate,sdate from tadd";
@$result=pg_query($query);
echo "<body bgcolor=grey align=center>	
	<h1 align=center>list of Task:-</h1>
		
	<table align=center>	
	<th>Task Name</th>
	<th>Discription</th>
	<th>Member Name</th>
        <th>End Date</th>
	<th>Start Date</th>";	
while($r=pg_fetch_row($result))
{
echo"<tr>
		<td>$r[0] </td>
		<td>$r[1] </td>
		<td>$r[2] </td>
		<td>$r[3]</td>
		<td>$r[4]</td>
	</tr>";
	

}
echo"</table>";
pg_close($con);
echo"</body>";
?>
</html>



