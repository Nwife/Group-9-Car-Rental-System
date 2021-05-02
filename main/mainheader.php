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
                <li><svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 14C6.23858 14 4 16.2386 4 19C4 20.6569 5.34315 22 7 22H17C18.6569 22 20 20.6569 20 19C20 16.2386 17.7614 14 15 14H9Z" fill="#fff"/>
                            <path d="M12 2C9.23858 2 7 4.23858 7 7C7 9.76142 9.23858 12 12 12C14.7614 12 17 9.76142 17 7C17 4.23858 14.7614 2 12 2Z" fill="#fff"/>
                        </svg>
                
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