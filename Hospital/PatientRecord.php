<html>
<style>
body
{
background-color:#F6CA55;
}
a{color:blue;}
</style>
<?php
 $conn=mysqli_connect('localhost','root','','Hospital');
 $id=$_GET['id'];
 $name=$_GET['name'];
 $gender=$_GET['gender'];
 $dob=$_GET['dob'];
 $age=$_GET['age'];
 $city=$_GET['city'];
  $phno=$_GET['phno'];
 $blood_grp=$_GET['bgrp'];
 $query="insert into Patientdata values({$id},'{$name}','{$gender}','{$dob}',{$age},'{$city}',{$phno},'{$blood_grp}')";
 if(mysqli_query($conn,$query))
  echo "<b>Data Insertd into the Table Sucessfully!<b>";
 else echo "Not Insertd";
 ?>

