<!DOCenter html>
<html>
<head>
<title>Login page</title>
<link rel="stylesheet" href="style.css">
<script type="text/javascript">
	function validate()
	{
		var email=document.getElementById("un").value;
		var password=document.getElementById("pd").value;
		var val=/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z]+\.[a-z]{2,3}/;
		var val2=/^[a-zA-Z _ 0-9]+$/;
		if(!email.match(val))
		{
				alert("Invalid email");
		}
		else
		if(!password.match(val2))
		{
			alert("Invalid user ");
		}
}	
</script>


</head>
<body align="center" style="background-color:#bdc3c7">
<div id="main-wrapper">
<center>
<h2>Login form</h2>
<img src="p.jpg" />
</center>
<form class="myform" action="" method="post">
<label><b>emailID</lable><br>
<input type="email" class="inputvalues" placeholder="enter your email" name="email" id="un"  required/><br>
<label><b>password</lable><br>
<input type="password" class="inputvalues" placeholder="enter your password" name="password" id="pd"  required/><br>
<input type="submit" id="login_btn" value="login" onclick="validate()" href="index.html"/><br>
</form>
<form class="myform" action="registration.php" method="post">
<button id="register_btn" value="register" onclick="validate()">registration</button><br>
</form>
</div>
</body>
</html>


<?php
if($_SERVER['REQUEST_METHOD']=='POST')
     { 
	$flag=0;
        $email=$_POST['email'];
        $password=$_POST['password'];
         if((strcmp($email,"")==0) && (strcmp($password,"")==0))
              {
                echo "<script>alert(' this is invalid...')</scprit>";
                echo "<script>alert('record does not added..')</scprit>";
               }
else
  {
     $con=pg_connect("host=127.0.0.1 dbname=project user=postgres") or die("error");
         $qry="select * from login where login.email='$email' and password='$password'";
              $result=pg_query($con,$qry) or die("<script>alert('unable to insert..')</script>");
	while($row=pg_fetch_assoc($result))
	{
		if((strcmp($row['email'],$email)==0)&&(strcmp($row['password'],$password)==0))
		   {
			echo"<script> alert('login successfully..') </script>";
			echo"<script>setTimeout(\"location.href='index.html';\",1500);</script>";	
			$flag=1;
              	}
			
	          	
	}
	if($flag==0)
	{
				echo"<script> alert('invalid user first register yourself') </script>";
		           
	}
	$flag=1;
            pg_close($con);
	}
}     
?>
