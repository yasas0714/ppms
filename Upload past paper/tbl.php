<?php

include "base.php";

if(mysqli_select_db($conn,"paper")){
	echo "Database selected .<br>";
}
else{
	echo "Database does not selected .<br>";
}

$sql2 = "CREATE TABLE pastpaper (
No int(10) AUTO_INCREMENT NOT NULL PRIMARY KEY,
Id int(10), 
University varchar(255),
Faculty varchar(255),
Degree varchar(255),
Year int(255),
Semester varchar(255),
Subject varchar(255),
Location varchar(255),
CONSTRAINT ppFk FOREIGN KEY(Id) REFERENCES LogTbl(Id)
)";

if (mysqli_query($conn, $sql2)) {
    echo "Table PastPaper created successfully .<br>";
} else {
    echo "Error creating table .<br>" . mysqli_error($conn);
}
"<br>";

?>