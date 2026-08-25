<html>
<style>
body
{
background-color:#F6CA55;
}
a{color:blue;}
</style>
<?php
$conn = mysqli_connect('localhost', 'root', '', 'Hospital');
if (!$conn) {
    echo "Not Insertd";
    exit;
}
$id = isset($_GET['id']) ? $_GET['id'] : '';
$name = isset($_GET['name']) ? $_GET['name'] : '';
$gender = isset($_GET['gender']) ? $_GET['gender'] : '';
$dob = isset($_GET['dob']) ? $_GET['dob'] : '';
$age = isset($_GET['age']) ? $_GET['age'] : '';
$city = isset($_GET['city']) ? $_GET['city'] : '';
$phno = isset($_GET['phno']) ? $_GET['phno'] : '';
$blood_grp = isset($_GET['bgrp']) ? $_GET['bgrp'] : '';
$stmt = mysqli_prepare($conn, "INSERT INTO Patientdata VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
mysqli_stmt_bind_param($stmt, "isssisis", $id, $name, $gender, $dob, $age, $city, $phno, $blood_grp);
if (mysqli_stmt_execute($stmt))
    echo "<b>Data Insertd into the Table Sucessfully!<b>";
else echo "Not Insertd";
?>
