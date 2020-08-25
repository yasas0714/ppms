<?php

$servername="localhost";
$username ="root";
$password ="";

$conn = mysqli_connect($servername,$username,$password);


if(!$conn)
{
	die("connection failed .<br>".mysqli_connect_error());
}
else
{

	echo "connected .<br>";
}


?>