<?php
echo "<center><h1>Hospital Management System</h1>";
echo "<h2>Patient Record</h2>";
session_start();
$name=$_SESSION['name'];
$conn=mysqli_connect('localhost','root','','Hospital');
$query="select * from patientdata where Name= 'madhumitha'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
echo "ID : ".$row['Id']."<br>";
echo "Name : ".$row['Name']."<br>";
echo "Gender : ".$row['Gender']."<br>";
echo "Age : ".$row['Age']."<br>";
echo "City : ".$row['City']."<br>";
echo "Phone Number ".$row['Phone']."<br>";
echo "Blood Group ".$row['Blood_Group'];
?>
<html>
<head>
<style>
body{
	background-color:#afcae0;
}
</style>
</head></html>

