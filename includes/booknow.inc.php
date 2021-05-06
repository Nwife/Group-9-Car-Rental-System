<?php
session_start();
require("dbh.inc.php");
if(isset($_POST["book-submit"])){
    if(!isset($_SESSION["id"])){
        header("Location: ../signup.php");
        exit();
    }else{
        $newID = $_POST["carid"];
        $name = $_SESSION["name"];
        $email = $_SESSION["email"];
        $vehicleName = $_POST["car"];
        $startDate = $_POST["date1"];
        $endDate = $_POST["date2"];
        $message = $_POST["bookmessage"];

        if(empty($startDate) || empty($endDate) || empty($message)){
            header("Location: ../main/details.php?error=emptyfields&id=".$newID);
            exit();
        }elseif($startDate > $endDate){
            header("Location: ../main/details.php?error=wrongdate&id=".$newID);
            exit();
        }else{
            //create sql to insert elements into db
            $sql = "INSERT INTO bookings(bookName, bookEmail, bookVehicle, bookStart, bookEnd) VALUES ('$name', '$email', '$vehicleName', '$startDate', '$endDate')";

            if(mysqli_query($conn, $sql)){
                header("Location: ../main/details.php?book=success&id=".$newID);
                exit();
            }else{
                header("Location: ../main/details.php?error=queryerror&id=".$newID);
                exit();
            }
        }
    }
    
}