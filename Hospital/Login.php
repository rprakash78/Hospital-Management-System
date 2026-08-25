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
session_start();
$username = isset($_POST['user']) ? $_POST['user'] : '';
$password = isset($_POST['pass']) ? $_POST['pass'] : '';
$conn = mysqli_connect('localhost', 'root', '', 'Hospital');
if (!$conn) {
    echo "Login Failed.. Please try again";
    exit;
}
$stmt = mysqli_prepare($conn, "SELECT password FROM login1 WHERE username = ?");
mysqli_stmt_bind_param($stmt, "s", $username);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$row = $result ? mysqli_fetch_array($result, MYSQLI_ASSOC) : null;
$p = $row ? $row['password'] : '';
if ($p == '' || $password == '')
    echo "Login Falied.. Please try again";
else if ($p == $password)
{
    echo "<h2><b>Login successful</b></h2>";
    $_SESSION['name'] = $username;
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
