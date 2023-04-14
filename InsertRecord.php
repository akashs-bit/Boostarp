<html>
<body style='background:gray;'>
<center>
<h1 style='background: orange; color:whitesmoke;'> Register here </h1>
<hr>
<form action="" method="POST">
<table border="5" cellpadding="5" cellspacing="5" style="border-radius: 10px 10px 10px 10px; background:khaki; color:blue; border-color: green;">
<tr>
<td>User Name:</td>
<td><input type="text" id="username" name="username" placeholder="username" required/> </td></tr>

<tr>
<td>Password:</td>
<td><input id="Password" name="Password" type="Password" required/> </td></tr>

<tr>
<td>Confirm Password:</td>
<td><input id="Confirmpassword" name="Confirmpassword" style="Confirmpassword" required/></td></tr>

<tr><td colspan="2"> <input type="submit" name="submit" value="register" style="border-radius:10px 10px 10px 10px; background:khaki; color:blue; border-color:green;"> Already have an user account? <a href="http://localhost/emp/Login2.php">Click here</a></td></tr>
</table>
</form>
</body>
</html> 	

<?php
require('config.php');	

if (isset($_POST['username']) && isset($_POST['password'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	$cpassword=$_POST['confirmpassword'];

	$slquery= "SELECT 1 FROM reg WHERE username= '$username'";
	 $selectrrsult= mysql_query($slquery);

	 if(mysql_num_rows($selectrrsult)>0)
	 {
	 	$msg='user already exists';
	 echo "<h1 style='background:red; color:white'>",$msg, "</h1>";	
	 }
	 else if($password != $cpassword){
	 	$msg= "password doesn't match";
	 echo "<h1 style='background:orange; color:teal'>",$msg, "</h1>";	
	 }
	 else{
	       $query="INSERT INTO reg (userName,password) VALUES ('$username','$password')";
	       $result= mysql_query($query);
	       if($result){
	       	$msg="User created Successfully.";
	 echo "<h1 style='background:green; color:white'>",$msg, "</h1>";      	
	       } 	
	 }
}
?>
<h1 style='background:greenyellow; color:skyblue;'> BY MIT India </h1>