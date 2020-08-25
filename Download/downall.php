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

	//echo "connected .<br>";
}

$sql1= mysqli_select_db($conn,"paper");

if(!$sql1){
	echo "DB doesn't select".mysqli_error();
	header("Location:down.php");
}

else{

	//echo "DB Connected.<br>";
	}

?>
<html>
<head>
	<title>UPMS</title>
	<meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="navi.css">
	<link rel="stylesheet" type="text/css" href="bbody.css">
	

</head>
<body>

<div class="top">
	<table>
		<tr>
			<td>
				<img src="images\logofinal.jpg" alt="Logo" style="width:100px;height:80px;">
			</td>
			<td>
				<h3 style="font-family: cursive;color: #800080">UPMS</h3>
				<h6 style="font-family: cursive;color: #800080">[University Past Paper Management System]</h6>
			</td>
		</tr>
	</table>
</div>

<div class="content2">
	<nav class="navbar sticky-top navbar-expand-sm bg-light navbar-light">


  <!-- Links -->
  <ul class="nav navbar-nav">
 
  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ab" aria-controls="ab" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
    <div class="collapse navbar-collapse" id="ab">
	    	<li class="nav-item">
	      		<a class="nav-link" href="../homefinal.html"><font color="#708090">Home</font></a>
	    	</li>
	    	<li class="nav-item">
	      		<a class="nav-link activenav" href="down.php"><font color="#708090">Download</font></a>
	    	</li>
	    	<li class="nav-item">
	      		<a class="nav-link" href="../Upload past paper/upload.php"><font color="#708090">Upload</font></a>
	 		</li>
	    	<li class="nav-item">
	      		<a class="nav-link" href="#"><font color="#708090">About us</font></a>
	 		</li>
	 		<li class="nav-item">
	      		<a class="nav-link" href="#"><font color="#708090">Contact us</font></a>
	 		</li>
 	</div>
 </ul> 

 <ul class="navbar-nav ml-auto">
 		<li class="nav-item">
 			<img src="images/user.png" width="40px" height="40px">
 		</li>
		<li class="nav-item">
			<a class="nav-link" href="../logout.php"><font color="#708090">Logout</font></a>
		</li>
 </ul>
	</nav>
	<!--mobile navbar-->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">  </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">  </script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">  </script>


	<div class="content3">
		
			<img src="images/content3.jpg" width="100%" height="1000px">

	<div class="downpp">
		<p>Download Past Papers</p>
	</div>


	<div class= "llist">
		 
		<table class="table table-striped table-responsive-sm">
			<tr>
			<th>University</th>
			<th>Faculty</th>
			<th>Degree</th>
			<th>Year</th>
			<th>Semester</th>
			<th>Subject</th>
			<th>Download link</th>
			</tr>
<?php


$sql2 = mysqli_query($conn,"SELECT count(No) FROM pastpaper");
$coun = mysqli_fetch_assoc($sql2);


for($x = 1;$x <= $coun['count(No)']; $x++){

	$sql3 = "SELECT * FROM pastpaper WHERE No='".$x."'";
	$detail = mysqli_query($conn,$sql3);
	$result = mysqli_fetch_assoc($detail);


		$University = $result['University'] ;
		$Faculty    = $result['Faculty'] ;
		$Degree     = $result['Degree'] ;
		$Year       = $result['Year'] ;
		$Semester   = $result['Semester'] ;
		$Subject    = $result['Subject'] ;

		$linkadd = "../Upload past paper/Past_Papers/$University/$Faculty/$Degree/$Year/$Semester/$Subject/$Subject.pdf";
		

		echo	"<tr>";
		echo	"<td style='color:white'>".$University."</td>";
		echo	"<td style='color:white'>".$Faculty."</td>";
		echo	"<td style='color:white'>".$Degree."</td>";
		echo	"<td style='color:white'>".$Year."</td>";
		echo	"<td style='color:white'>".$Semester."</td>";
		echo	"<td style='color:white'>".$Subject."</td>";
		echo	"<td>";
		echo    "<a href='$linkadd' Download>";
		echo	'<button type="button" class="btn btn-warning btn-md">Download</button>';
		echo    "</a>";
		echo    "</td>";
		echo    "</tr>";

		}
?>

		</table>
	</div>

	</div>
</div>
</body>
</html>