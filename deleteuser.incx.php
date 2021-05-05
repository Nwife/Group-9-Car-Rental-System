<?php

require('dbh.inc.php');

if(isset($_POST['deleteuser-submit'])){

    $idDelete = $_POST['userid'];

    $sql = "DELETE FROM users WHERE id = $idDelete";

    if(mysqli_query($conn, $sql)){
        header("Location: ../administration/registeredusers.php?delete=success");
        exit();
    }else{
        header("Location: ../administration/registeredusers.php?error=queryerror");
        exit();
    }
}