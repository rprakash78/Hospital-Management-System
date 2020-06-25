<?php 
$conn = mysqli_connect("localhost", "root", "","Hospital");
 if ($conn) { echo "Success"; } 
 $sql="create table Login1( Username varchar(15) PRIMARY KEY, Password varchar(10))";
 if(mysqli_query($conn,$sql)) 
 {
	 echo "Table created Sucessfully"; 
	 } 
else 
{ 
echo mysqli_error($conn); 
}
 mysqli_close($conn);
?>
