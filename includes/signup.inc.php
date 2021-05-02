<?php

if(isset($_POST["signup-submit"])){
    require('dbh.inc.php');

    $name = $_POST["fname"];

    $email = $_POST["email"];

    $phoneno = $_POST['phone'];

    $password = $_POST["pwd"];

    
    if(empty($name) || empty($email) || empty($phoneno) || empty($password)){
        header("Location: ../signup.php?error=emptyfields&fname=".$name."&mail=".$email."&phone=".$phoneno);
        exit();
    }
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match('/^[0-9]*$/' ,$phoneno)){
        header("Location: ../signup.php?error=invalidmailphone");
        exit();
    }
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location: ../signup.php?error=invalidmail&fname=".$name."&phone=".$phoneno);
        exit();
    }
    elseif(!preg_match('/^[0-9]*$/', $phoneno)){
        header("Location: ../signup.php?error=invalidphone&mail=".$email."&fname=".$name);
        exit();
    }
    else{
        $sql = "SELECT emailUser FROM users WHERE emailUser= $email";

        $result = mysqli_query($conn, $sql);

        $row = mysqli_num_rows($result);

        if($row > 0){
            header("Location: ../signup.php?error=mailtaken&fname=".$fname);
            exit(); 
        }
        else {
            $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO users(nameUser, emailUser, phoneUser, pwdUser) VALUES ('$name', '$email', '$phoneno', '$hashedPwd')";

            if(!mysqli_query($conn, $sql)){
                header("Location: ../signup.php?error=sqlerror1");
                exit(); 
            }
            else{
                header("Location: ../signup.php?signup=success");
                exit();
            }
        }

            }
        }
        else{
            header("Location: ../signup.php");
        }




