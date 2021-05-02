<?php
$servername = "localhost";
$password = "group9123";
$username = "group9";
$dbname = "group9_cars";

//connect to database
$conn = mysqli_connect($servername, $username, $password, $dbname);

//check connection
if(!$conn){
    echo "Connection error: " . mysqli_connect_error();
    // or echo "Connection error" .mysqli_connect_error();
}