<html>
<style>
body
{
background-color:#F6CA55;
}
</style>
<body></body>
</html>
<?php
$username=$_POST['user'];
$password=$_POST['pass'];
$conn=mysqli_connect('localhost','root','','Hospital');
$query="select password from login1 where username='{$username}'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$p=$row['password'];
if($p=='' || $password=='')
echo "Login Falied.. Please try again";
else if($p==$password)
{
echo "<h2><b>Login successful</b></h2>";
session_start();
$_SESSION['name']=$username;
echo "<h3>St John's Hospital</h3>";
	echo "<ul>";
	echo "<li><a href='PatientRecord.html'>Maintain Patient Record</a></li><br>";
	echo "<li><a href='patientinfo.html'>Get Appointment</a></li><br>";
	echo "<li><a href='patientrcd.php'>Print </a></li><br>";
	echo "<li><a href='Prescription.html'>Prescription</a></li><br>";

}
else
{
echo "Login Falied.. Please try again";
}
?>