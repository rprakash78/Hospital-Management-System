<html>
<style>
body
{
background-color:#F6CA55;
}
a{color:blue;}
</style>
<body></body>
</html>
<?php 
$username=$_POST['user'];
$password=$_POST['pass'];
$conn=mysqli_connect('localhost','root','','Hospital');
$query="insert into login1 values('{$username}','{$password}')";
if (mysqli_query($conn,$query))
	echo "Account Registered Sucessfully!<br>
     <li><a href='Login.html'>Login Page</a></li><br>";
else 
	echo "Account Registration Failed";
?>
