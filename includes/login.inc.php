<?php

if(isset($_POST["login-submit"])){

    require('dbh.inc.php');

    $email = $_POST["email"];

    $password = $_POST["pwd"];

    if(empty($email) || empty($password)){
        header("Location: ../signin.php?error=emptyfields");
        exit();
    }
    else{
        $sql = "SELECT * FROM users WHERE emailUser = '$email'";

        $result = mysqli_query($conn, $sql);

        // $count = mysqli_num_rows($result);
        if($row = mysqli_fetch_assoc($result)){
            // $row = mysqli_fetch_assoc($result);
            $pwdCheck = password_verify($password, $row["pwdUser"]);
                if($pwdCheck === false){
                    header("Location: ../signin.php?error=incorrectPassword");
                    exit();
                }
                elseif($pwdCheck === true){
                    session_start();
                    $_SESSION['id'] = $row["id"];
                    $_SESSION['name'] = $row["nameUser"];

                    
                    header("Location: ../main?login=success");
                    exit();
                }
                else {
                    header("Location: ../signin.php?error=incorrectPassword");
                    exit();
                }
            }else{
                header("Location: ../signin.php?error=nouserfound");
                exit();
            }

        }
         
    }

else{
    header("Location: ../signin.php");
}
