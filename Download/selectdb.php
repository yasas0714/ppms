<?php

session_start();
extract($_POST);


$hostname="localhost";
$username="root";
$pass="";

$conn = mysqli_connect($hostname,$username,$pass);

if(!$conn)
{
	die("connection failed .<br>".mysqli_connect_error());
}
else
{

	echo "connected .<br>";
}

$sql1= mysqli_select_db($conn,"paper");

if(!$sql1){
	echo "DB doesn't select".mysqli_error();
	header("Location:down.php");
}

else{

	echo "DB Connected.<br>";



$University = $_POST['Uni'];
$Faculty = $_POST['Fac'];
$Degree =  $_POST['Degree'];
$Year =  $_POST['Year'];
$Semester = $_POST['Semester'];
$Subject =  $_POST['Subject'];



$dwl1="SELECT * FROM pastpaper WHERE University ='".$University."' and Faculty= '".$Faculty."' and Degree= '".$Degree."' and Year= '".$Year."' and Semester= '".$Semester."' and Subject= '".$Subject."' ";
$dwl2="SELECT * FROM pastpaper WHERE University='".$University."'";
$dwl3="SELECT * FROM pastpaper WHERE University='".$University."' and Faculty= '".$Faculty."'";
$dwl4="SELECT * FROM pastpaper WHERE University ='".$University."' and Faculty= '".$Faculty."' and Degree= '".$Degree."'";
$dwl5="SELECT * FROM pastpaper WHERE University ='".$University."' and Faculty= '".$Faculty."' and Degree= '".$Degree."' and Year= '".$Year."'";
$dwl6="SELECT * FROM pastpaper WHERE University ='".$University."' and Faculty= '".$Faculty."' and Degree= '".$Degree."' and Year= '".$Year."' and Semester= '".$Semester."'";


if(empty($University)){
	header("Location: down.php?error=1");
}
elseif (!empty($University) && empty($Faculty) && empty($Degree) && empty($Year) && empty($Semester) && empty($Subject)) {
	
$result= mysqli_query($conn,$dwl2);
$dlink= mysqli_fetch_assoc($result);

$_SESSION['UNI1'] = $dlink['University'];

echo $_SESSION['LOC']."<br>";

header("Location:downlist.php");

}
elseif (!empty($University) && !empty($Faculty) && empty($Degree) && empty($Year) && empty($Semester) && empty($Subject)) {
	
$result= mysqli_query($conn,$dwl3);
$dlink= mysqli_fetch_assoc($result);

$_SESSION['UNI2'] = $dlink['University'];
$_SESSION['FAC'] = $dlink['Faculty'];

header("Location:downlist.php");

}
elseif (!empty($University) && !empty($Faculty) && !empty($Degree) && empty($Year) && empty($Semester) && empty($Subject)) {
	
$result= mysqli_query($conn,$dwl4);
$dlink= mysqli_fetch_assoc($result);

$_SESSION['UNI3'] = $dlink['University'];
$_SESSION['FAC'] = $dlink['Faculty'];
$_SESSION['DEG'] = $dlink['Degree'];

header("Location:downlist.php");
}
elseif (!empty($University) && !empty($Faculty) && !empty($Degree) && !empty($Year) && empty($Semester) && empty($Subject)) {
	
$result= mysqli_query($conn,$dwl5);
$dlink= mysqli_fetch_assoc($result);

$_SESSION['UNI4'] = $dlink['University'];
$_SESSION['FAC'] = $dlink['Faculty'];
$_SESSION['DEG'] = $dlink['Degree'];
$_SESSION['YER'] = $dlink['Year'];

header("Location:downlist.php");
}
elseif (!empty($University) && !empty($Faculty) && !empty($Degree) && !empty($Year) && !empty($Semester) && empty($Subject)) {

$result= mysqli_query($conn,$dwl6);
$dlink= mysqli_fetch_assoc($result);

$_SESSION['UNI5'] = $dlink['University'];
$_SESSION['FAC'] = $dlink['Faculty'];
$_SESSION['DEG'] = $dlink['Degree'];
$_SESSION['YER'] = $dlink['Year'];
$_SESSION['SEM'] = $dlink['Semester'];


header("Location:downlist.php");
}
elseif (!empty($University) && !empty($Faculty) && !empty($Degree) && !empty($Year) && !empty($Semester) && !empty($Subject)) {

$result= mysqli_query($conn,$dwl1);
$dlink= mysqli_fetch_assoc($result);

$_SESSION['UNI6'] = $dlink['University'];
$_SESSION['FAC'] = $dlink['Faculty'];
$_SESSION['DEG'] = $dlink['Degree'];
$_SESSION['YER'] = $dlink['Year'];
$_SESSION['SEM'] = $dlink['Semester'];
$_SESSION['SUB'] = $dlink['Subject'];
$_SESSION['LOC'] = $dlink['Location'];

header("Location:downlist.php");

}

//echo  $_SESSION['UNI']."<br>";


}

?>