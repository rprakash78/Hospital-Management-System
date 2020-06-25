<?php
$conn=mysqli_connect("localhost","root","");
if ($conn)
 {
 echo"Created Database";
 }
 
$sql = "CREATE DATABASE Hospital";
if (mysqli_query($conn, $sql)) 
{
    echo "Database created successfully";
} else
{
    echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
