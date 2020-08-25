<?php
session_start();
include "table2.php";

extract($_POST);


$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$pass = $_POST["pass"];


$sql5 = "SELECT Id,Email FROM LogTbl WHERE Email='".$email."'";

	$result=mysqli_query($conn,$sql5);
	$verif= mysqli_fetch_assoc($result);
	

if($verif['Email'] == $email){

		echo "Your email already exists<br>";
			session_destroy();
			header("Location:login.php?error=1");
			
	
}

else{


	$sql6= "insert into LogTbl (FirstName,LastName,Email,Password) values('$fname','$lname','$email',md5($pass))";

	mysqli_query($conn,$sql6);

	$sql7 = "SELECT Id,Email FROM LogTbl WHERE Email='".$email."'";

	$result=mysqli_query($conn,$sql7);
	$verif= mysqli_fetch_assoc($result);
	$_SESSION['EMAIL'] = $verif["Email"];
	$_SESSION['ID'] = $verif["Id"];

	echo "Login sucessfull<br>";
	echo "id:".$_SESSION['ID']."<br>";
	echo "email:".$_SESSION['EMAIL']."<br>";

	header("Location:../homefinal.html");


}


?>