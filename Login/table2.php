<?php

include "conn.php";


if(mysqli_select_db($conn,"paper")){
	echo "Database selected .<br>";
}
else{
	echo "Database does not selected .<br>";
}

$sql3 = "CREATE TABLE LogTbl (
			Id int(10) AUTO_INCREMENT PRIMARY KEY ,
			FirstName varchar(20),
			LastName varchar(25),
			Email varchar(255),
			Password varchar(255)
		)";
    

if( mysqli_query($conn,$sql3)){

	echo "Table login created<br>";

}
else{
	echo "Table logTbl does not create<br> ".mysqli_connect_error($conn);

}

?>