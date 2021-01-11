<?php
setcookie('flag','0');
?>
<html>
<head>
<title>Registration page</title>
<link rel="stylesheet" href="style.css">
<script type="text/javascript">
	function validate()
	{
		var fname=document.getElementById("fa").value;
 		var lname=document.getElementById("la").value;
		var email=document.getElementById("email").value;
		var mobile=document.getElementById("ma").value;
		var password=document.getElementById("pd").value;
		var cpassword=document.getElementById("cd").value;
		var val=/^[a-zA-Z]+$/;
                    var val2=/^[a-zA-Z]+$/;
                    var val3=/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z]+\.[a-z]{2,3}/;
                    var val11=/^[6-9]{2}[0-9]{8}/;
		var val5=/^[a-zA-Z _ 0-9]+$/;
                    var val6=/^[a-zA-Z _ 0-9]+$/;
		if(!fname.match(val))
		{
				alert("Invalid firstName ");
	
		}
		else
                   if(!lname.match(val2))
		{
				alert("Invalid lastName ");

		}
		else
		if(!email.match(val3))
		{
				alert("Invalid email ");
				

		}/*else
		if(!mobile.match(val11))
		{
				alert("Invalid mobile ");

		}*/
		else
		if(!password.match(val5))
		{
			alert("Invalid Password ");

		}else
		if(!cpassword.match(val6))
		{
				alert("Invalid cpassword ");

		}
		
}	
</script>
</head>
<body style="background-color:#bdc2c6">
<div id="main-wrapper">
<center>
<h2 aligin="center">Registration form</h2>
<img src="p.jpg" />
</center>
<form class="myform" action="" method="post">
<label align="center"><b>first name</lable><br>
<input type="text"  name="fname" id="fa"class="inputvalues" placeholder="enter your first name"/><br>
<label><b>last name</lable><br>
<input type="text"  name="lname" id="la" class="inputvalues" placeholder="enter your last name"/><br>
<label><b>email id</lable><br>
<input  type="email" name="email" id="email"class="inputvalues" placeholder="enter your email id"/><br>
<label><b>mobile no</lable><br>
<input type="text"  name="mobile" id="ma"class="inputvalues" placeholder="enter your mobile no"/><br>
<label><b>password</lable><br>
<input type="password"  enter="password" name="password" id="pd" class="inputvalues" placeholder="enter your password"/><br>
<label><b>confirm password</lable><br>
<input type="password" enter="password" name="cpassword" id="cd"  class="inputvalues" placeholder="enter your confirm password"/><br>

</form>
<button id="signup_btn" value="signup" onclick="validate()">submit</button><br>
</div>
</body>
</html>

<?php
if($_SERVER['REQUEST_METHOD']=='POST')
     {
	
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
        $password=$_POST['password'];
        $cpassword=$_POST['cpassword'];
	if((strcmp($password,$cpassword)==0)&&(strcmp($email,"")!=0) && (strcmp($password,"")!=0))
	{
		$con=pg_connect("host=localhost dbname=project user=postgres") or die("error");
         $qry="insert into re values('$fname','$lname','$email','$mobile','$password','$cpassword')";
	$result=pg_query($con,$qry) or die("<script>alert('unable to insert..')</script>");	
	
          $qry1="insert into login values('$email','$password')";
	$result1=pg_query($con,$qry1) or die("<script>alert('unable to insert..')</script>");	
            if($result && $result1)
              {
           echo"<script> alert('record inserted successfully..') </script>";
	pg_close($con);
	echo"<script>setTimeout(\"location.href='login.php';\",1500);</script>";
	}
	}
}
?>
                       

     
