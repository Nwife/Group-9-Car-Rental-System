<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mainheader.css">
    <title>Group IX</title>
</head>
<body>

    <header>
        <div class="logo"><a href="index.php"> Group IX</a></div>

        <nav>
            <ul>
                <li><a href="aboutus.php">ABOUT US</a></li>
                <li><a href="contactus.php">CONTACT US</a></li>
                <li><img class="image" src="profile-user.png">
                
                <?php
                    if(isset($_SESSION['id'])){
                        echo "<span> Hello, " . $_SESSION['name'];
                    }else{
                        echo "<span> Hello, USER";
                    }
                ?>
                </li>
                <li>
                <?php if(isset($_SESSION['id'])){
                    echo " <form action='../includes/logout.inc.php' method='POST'>
                    <input type='submit' value='LOGOUT' name='logout-submit'>
                    </form>";
                }else{
                   
                    echo "<a id='logout' href='../welcome.php'>RETURN</a>";
                }
                ?>
                </li>
                <!-- <li><a id="logout" href="#">LOGOUT</a></li>
                <li><a id="logout" href="#">LOGOUT</a></li> -->
            </ul>
        </nav>

    </header>