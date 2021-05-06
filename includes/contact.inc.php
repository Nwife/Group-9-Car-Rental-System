<?php

if(isset($_POST["contact-submit"])){
    require('dbh.inc.php');

    $contactname = $_POST["name"];
    $contactemail = $_POST["email"];
    $contactmessage = $_POST["message"];

    if(empty($contactname) || empty($contactemail) || empty($contactmessage)){
        header("Location: ../main/contactus.php?error=emptyfields");
        exit();
    }else{
        //craete sql to insert into the database
        $sql = "INSERT INTO contact(nameContact, emailContact, messageContact) VALUES ('$contactname', '$contactemail', '$contactmessage')";

        if(mysqli_query($conn, $sql)){
            header("Location: ../main/contactus.php?success=submitted");
            exit();
        }else{
            header("Location: ../main/contactus.php?error=queryerror");
            exit();
        }
    }
}