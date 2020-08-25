<?php
session_start();
include "tbl.php";
extract($_POST);


$University = $_POST['Uni'];
$Faculty = $_POST['Fac'];
$Degree =  $_POST['Degree'];
$Year =  $_POST['Year'];
$Semester = $_POST['Semester'];
$Subject =  $_POST['Subject'];
$Id = $_SESSION['ID'];
$email = $_SESSION['EMAIL'];




$pth=mkdir("Past_Papers/$University/$Faculty/$Degree/$Year/$Semester/$Subject",0777,true);

if($pth){
	echo "Directory created .<br>";
}
else{
	echo "Directory does not created .<br>";
}

echo "id:".$_SESSION['ID']."<br>";
echo "id:".$Id."<br>";

$target_dir = "Past_Papers/$University/$Faculty/$Degree/$Year/$Semester/$Subject/";
$target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
	$fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	$fileSize =$_FILES["fileToUpload"]["size"];
	$rename = $Subject.".pdf";
	
	if($fileSize > 5000000)
	{
		echo "File is too large. Maximum size is 5MB <br>";
	}

	else{

		move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_dir.$rename);
		echo "File Uploaded successfull <br>";
		echo $target_dir ."<br>";  
			}
	


$sql3="insert into pastpaper (Id,University,Faculty,Degree,Year,Semester,Subject,Location) values('$Id','$University','$Faculty',
		'$Degree','$Year','$Semester','$Subject','$target_dir')";

$sql4=" select Location from pastpaper where Location = '".$target_dir."'";

$same = mysqli_query($conn,$sql4);



if(mysqli_num_rows($same)>0){

	echo "Record already exists <br>".mysqli_connect_error($conn);
		header("Location:upload.php?error=1");
		
}
else{
	
	mysqli_query($conn,$sql3);
	echo "Record added <br>";

	header("Location: upload.php?sucess=1");



}



?>