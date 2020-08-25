<?php
session_start();
extract($_POST);
include "base.php";


if(mysqli_select_db($conn,"paper")){
	echo "Database selected .<br>";
}
else{
	echo "Database does not selected .<br>";
}

$email = $_POST['email'];
$password = $_POST['passw'];

$sql4= "SELECT Email,Password,Id FROM LogTbl WHERE Email='".$email."' and Password='".md5($password)."'";

$result=mysqli_query($conn,$sql4);
$verify= mysqli_fetch_assoc($result);


if($verify['Email'] == $email && $verify['Password'] == md5($password)){


	$_SESSION["EMAIL"] = $verify['Email'];
	$_SESSION["ID"] = $verify['Id'];

	echo "id:".$_SESSION['ID']."<br>";
	echo "email:".$_SESSION['EMAIL']."<br>";

		header("Location: ../homefinal.html");
	
}
else{

	
	echo "Invalid Username or Password <br>";

		session_destroy();
		header("Location: login.php?error=1");
}


?>