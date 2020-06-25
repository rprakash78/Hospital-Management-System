<?php 
$name=$_POST['name'];
$age=$_POST['age'];
$phn=$_POST['phn'];
$email=$_POST['email'];
$app_no= rand(0,50);
if(isset($_POST['gender']))
{
	$gender=$_POST['gender'];
}
echo "<b>Appointment Sucessfull!</b><br>";
echo "<b>Appointment Details will be sent through an E-Mail</b>";
?>
