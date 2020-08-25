<?php
include "conn.php";

$sql1= "CREATE DATABASE paper";

if(mysqli_query($conn,$sql1)){

	echo "Database created .<br>";
	
}
else{
	echo "Database creating error .<br>".mysqli_connect_error($conn);
}


?>