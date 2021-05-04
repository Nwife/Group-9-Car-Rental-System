<?php
if(isset($_POST["car-submit"])){
    require('dbh.inc.php');

    //used to give each car picture a uinique name in the database.
    $fileIdentity = $_POST['carname'];
    $newFilename = strtolower(str_replace(" ", "-", $fileIdentity)); //you know what str_replace does

    $carName = $_POST["carname"];
    $carPrice = $_POST["carprice"];
    $carFuel = $_POST["carfuel"];
    $carSeats = $_POST["carseats"];
    $carYear = $_POST["caryear"];
    $carDesc = $_POST["cardesc"];

    //get the file superglobal variable
    $file = $_FILES['file'];

    $fileName = $file['name'];
    $fileType = $file['type'];
    $fileTempName = $file['tmp_name'];
    $fileError = $file['error'];
    $fileSize = $file['size'];

    $fileExt = explode(".", $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = ["jpg", "jpeg", "png"];

    if(in_array($fileActualExt, $allowed)){
        if($fileError === 0){
            if($fileSize < 2000000){
                $imgFullName = $newFilename . "." . uniqid("", true) . "." . $fileActualExt;
                $fileDestination = "../images/" . $imgFullName;

                //error handling for the form
                if(empty($carName) || empty($carPrice) || empty($carFuel) || empty($carSeats) || empty($carYear) || empty($carDesc)){
                    header("Location: ../administration/addvehicle.php?error=emptyfields");
                    exit();
                }else{
                    //create sql to insert
                    $sql = "INSERT INTO cars(carName, carPrice, carFuel, carSeats, carYear, carDesc, imgFullNameCar) VALUES ('$carName', '$carPrice', '$carFuel', '$carSeats', '$carYear', '$carDesc', '$imgFullName')";
                    if(!mysqli_query($conn, $sql)){
                        header("Location: ../administration/addvehicle.php?error=queryerror");
                        exit();
                    }else{
                        move_uploaded_file($fileTempName, $fileDestination);
                        header("Location: ../administration/addvehicle.php?upload=success");
                        exit();
                    }
                }
            }else{
                header("Location: ../administration/addvehicle.php?error=filebig");
                exit(); 
            }
        }else{
            header("Location: ../administration/addvehicle.php?error=fileerror");
            exit();
        }
    }else{
        header("Location: ../administration/addvehicle.php?error=wrongfiletype");
        exit();
    }

}
