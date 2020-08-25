<!DOCTYPE html>
<HTML>
    <HEAD>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="navi.css">
        <link rel="stylesheet" type="text/css" href="cssfile.css">

        <script type="text/javascript">
    
    function myFunction(){
        alert("Please login first!");
    }

 </script>
    </HEAD>
    
    <BODY>
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
            <li class="nav-item ">
                <a class="nav-link" href="../index.html"><font color="#708090">Home</font></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" onclick="myFunction()"><font color="#708090">Download</font></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" onclick="myFunction()"><font color="#708090">Upload</font></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../About/aboutus1.html"><font color="#708090">About us</font></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../Contactus/contact1.html"><font color="#708090">Contact us</font></a>
            </li>
    </div>
 </ul> 

 <ul class="navbar-nav ml-auto">
        <li class="nav-item activenav">
            <a class="nav-link" href="Login/Login.php"><font color="#708090">Login</font></a>
        </li>
 </ul>
    </nav>

    <!--mobile navbar-->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">  </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">  </script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">  </script>


    <div class="b">
        <div class="loginbox">
            <img src="images/logo.png" class="avatar">
            <h1>Login Here</h1>
            <?php
            if(isset($_GET['error'])){
            echo  " <i style='color :red;'>* Enter valid username or password </i>";
            }

            ?>
                <br>
                <form action="log.php" method="POST">
                    <p>Email</p>
                    <input type="text" name="email" placeholder="Enter Your Email" required>
                    <p>Password</p>
                    <input type="password" name="passw" placeholder="Enter Password" required>
                    <br>
                    <br>
                    <input type="submit" name="" value="Login">
                    <br>
                    <br>
                    <a href="signup.html">Lost your password?</a><br>
                    <a href="signup.html">Don't have an account?</a>
                </form>
        
        </div>
    </div>
    </div>
    </BODY>
</HTML>