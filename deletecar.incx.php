<?php

require('dbh.inc.php');

if(isset($_POST['deletecar-submit'])){

    $idDelete = $_POST['carid'];

    $sql = "DELETE FROM cars WHERE carID = $idDelete";

    if(mysqli_query($conn, $sql)){
        header("Location: ../administration/managevehicles.php?delete=success");
        exit();
    }else{
        header("Location: ../administration/managevehicles.php?error=queryerror");
        exit();
    }
}