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
$username = isset($_POST['user']) ? $_POST['user'] : '';
$password = isset($_POST['pass']) ? $_POST['pass'] : '';
$conn = mysqli_connect('localhost', 'root', '', 'Hospital');
if (!$conn) {
    echo "Account Registration Failed";
    exit;
}
$stmt = mysqli_prepare($conn, "INSERT INTO login1 VALUES (?, ?)");
mysqli_stmt_bind_param($stmt, "ss", $username, $password);
if (mysqli_stmt_execute($stmt))
    echo "Account Registered Sucessfully!<br>
     <li><a href='Login.html'>Login Page</a></li><br>";
else
    echo "Account Registration Failed";
?>
