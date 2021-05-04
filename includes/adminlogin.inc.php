<?php

if(isset($_POST["adminlogin-submit"])){

    $defaultAdminName = "admin";
    $defaultPassword = "cars";

    $adminName = $_POST['adminname'];

    $adminPassword = $_POST['adminpwd'];

    if(empty($adminName) || empty($adminPassword)){
        header("Location: ../adminsignin.php?error=emptyfields");
        exit();
    }
    else if(($adminName != $defaultAdminName) || ($adminPassword != $defaultPassword)){
        header("Location: ../adminsignin.php?error=wrongnamepwd");
        exit();
    }
    else if(($adminName == $defaultAdminName) && ($adminPassword == $defaultPassword)){
        header("Location: ../administration/adminindex.php?success=login");
        exit();
    }

    

}