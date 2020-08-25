<!DOCTYPE html>
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
	      		<a class="nav-link" href="../About/aboutus2.html"><font color="#708090">About us</font></a>
	 		</li>
	 		<li class="nav-item">
	      		<a class="nav-link" href="../Contactus/contact2.html"><font color="#708090">Contact us</font></a>
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

	<div class="filterr1">
		<?php
            if(isset($_GET['error'])){
            echo  " <i style='color :red;'>* No file founded. </i>";
            }

            ?>
		<div class="filterr2 font">

		<table class="ta">
				<form action="selectdb.php" method="POST">
					<tr>
						<th class="fa">University</th>
						<td>
								<select name="Uni" class="content custom-select ra">
								<option value="">--Select University--</option>
			   					<option value="Colombo">University of Colombo</option>
			   					<option value="Peradeniya">University of Peradeniya</option>
			   					<option value="Ruhuna">University of Ruhuna  </option>
			   					<option value="Moratuwa">University of Moratuwa</option>
			   					<option value="Kelaniya">University of Kelaniya</option>
			   					<option value="rajarata">Rajarata University</option>
			   					<option value="Eastern">Eastern University </option>
			   					<option value="Jaffna">University of Jaffna</option>
			   					<option value="South_Easten">South Eastern University</option>
								<option value="Jayawardenapura">University of Sri Jayawardenapura</option>
								<option value="Uva">Uva Wellassa University</option>
								<option value="Wayamba">Wayamba University </option>
								<option value="Open"> Open University </option>
								</select>
						</td>
					</tr>
					<tr>
						<th  class="fa">Faculty</th>
						<td>
								<select name="Fac" class="content custom-select ra">
								<option value="">--Select Faculty--</option>
			   					<option value="Engi">Faculty of Engineering</option>
			   					<option value="Medi">Faculty of Medicine</option>
			   					<option value="Sci">Faculty of Science </option>
			   					<option value="Art">Faculty of Humanities and Social Science</option>
			   					<option value="Commerce">Faculty of Management and Finance </option>
			   					<option value="Fisheri">Faculty of Fisheries and Marine Science and Technology</option>
			   					<option value="Agri">Faculty of Agriculture</option>
			   					<option value="Tech">Faculty of Technology</option>
			   					<option value="Alid">Faculty of Allied Health Science </option>
								<option value="Graduate">Faculty of Graduate Studies </option>
								</select>
						</td>
					</tr>
	
					<tr>
						<th  class="fa">Degree</th>
						<td>
							<select name="Degree" class="content custom-select ra">
							<option value="">--Select Degree--</option>
							<option value="BSc">BSc</option>
							<option value="BCS">BCS</option>
							<option value="ICT">ICT</option>
							<option value="BIT">BIT</option>
						</select>
						</td>
					</tr>
					<tr>
						<th class="fa">Year</th>
						<td>
							<select name="Year" class="content custom-select ra">
								<option value="">--Select Year--</option>
								 <?php
                                    for($i=2000;$i<=2019;$i++){
                                        echo "<option value=".$i.">".$i."</option>";
                                    }?>
							</select>
						</td>
					</tr>

					<tr>
						<th class="fa">Semester</th>
						<td>
							<select name="Semester" class="content custom-select ra">
							<option value="">--Select Semester--</option>
			   				 <?php
                                    for($i=1;$i<=8;$i++){
                                        echo "<option value=".$i.">".$i."</option>";
                                    }?>
							</select>
						</td>
					</tr>

					<tr>
						<th class="fa">Subject Name</th>
						<td>
								<select name="Subject" class="content custom-select ra" >
								<option value="">--Select Subject--</option>
			   					<option value="PMaths">Pure Mathamatics</option>
			   					<option value="AMaths">Applied Mathamatic</option>
			   					<option value="Com">Computer Science</option>
			   					<option value="Che">Chemistry</option>
			   					<option value="Phy">Physics</option>
			   					<option value="Bio">Biology</option>
			   					<option value="Zoo">Zoology</option>
			   					<option value="Bot">Botany</option>
								</select>
			 			</td>
					</tr>

					<tr>
						<td></td>
						<td align="right" rowspan="3"><input type="submit" name="submit" value="Filter" class="sub"></td>
					</tr>
					
				</form>
				
		</table>
<br>
<br>
		<table>
				<tr>
						<th width="50%" class="fb">OR<th>
						<td></td>
					</tr>

					<tr>
					<th width="50%"  class="fa">View and Download</th>
					<td align="right"><input type="button" name="btn" class="sub" onclick="window.location.href='downall.php'" value="Download"></td>
				</tr>
		</table>
	</div>

	</div>


	</div>
</div>
</body>
</html>