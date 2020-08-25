<?php

include "Login/conn.php";

mysqli_close($conn);
session_destroy(); 

echo "Logout successfull <br>";

header("Location: index.html");




?>