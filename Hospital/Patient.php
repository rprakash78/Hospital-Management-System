<?php 
$conn = mysqli_connect("localhost", "root", "","Hospital");
 if ($conn) { echo "Success"; } 
 $sql="create table Patientdata(Id int(10),Name char(15),Gender char(10),DOB varchar(15),Age int(5),City char(15),Phone int(10),Blood_Group varchar(5) )";
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
