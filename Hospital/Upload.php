<style>
body{background-color:#F6CA55}
h1{color:blue;}
</style>
<?php

$file=$_FILES['file'];

$file_name=$_FILES['file']['name'];
$file_temp=$_FILES['file']['tmp_name'];
$dest='upload/'.$file_name;
//if(move_uploaded_file($file_temp,$dest))
	echo "<b>Prescription Details successfuly uploaded</b><br>";
//else echo "<b>Prescription file not uploaded</b>";
?>