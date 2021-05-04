
<?php echo "<link rel='stylesheet' href='adminindex.css'>" ?>

<?php

    require('../includes/dbh.inc.php');

    //write sql to fetch users
    $sql = "SELECT * FROM users";

    //query the sql
    $resultUser = mysqli_query($conn, $sql);

    //return as associative array
    $rowUser = mysqli_fetch_all($resultUser, MYSQLI_ASSOC);

    //free result
    mysqli_free_result($resultUser);

    //close conection
    mysqli_close($conn);
?>

<?php
    require('../includes/dbh.inc.php');

    //write sql to fetch cars
    $sql2 = "SELECT * FROM cars";

    //query the sql
    $resultCar = mysqli_query($conn, $sql2);

    //return as associative array
    $rowCar = mysqli_fetch_all($resultCar, MYSQLI_ASSOC);

    //free result
    mysqli_free_result($resultCar);

    //close conection
    mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <?php include('adminsidenav.php'); ?>

    <div class="main">
        <?php include('adminheader.php'); ?>


        <div class="page">
            <div class="cards">
                <div class="cardbody">
                    <div class="firsthold">
                        <svg width="70" height="70" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 14C6.23858 14 4 16.2386 4 19C4 20.6569 5.34315 22 7 22H17C18.6569 22 20 20.6569 20 19C20 16.2386 17.7614 14 15 14H9Z" fill="#fff"/>
                            <path d="M12 2C9.23858 2 7 4.23858 7 7C7 9.76142 9.23858 12 12 12C14.7614 12 17 9.76142 17 7C17 4.23858 14.7614 2 12 2Z" fill="#fff"/>
                        </svg>
                        <span><?php echo count($rowUser); ?></span> 
                    </div>
                    <div class="innertext"><p>REGISTERED USERS</p></div>
                </div>

                <div class="cardbody">
                    <div class="firsthold">
                        <svg width="70" height="70" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 14C6.23858 14 4 16.2386 4 19C4 20.6569 5.34315 22 7 22H17C18.6569 22 20 20.6569 20 19C20 16.2386 17.7614 14 15 14H9Z" fill="#fff"/>
                            <path d="M12 2C9.23858 2 7 4.23858 7 7C7 9.76142 9.23858 12 12 12C14.7614 12 17 9.76142 17 7C17 4.23858 14.7614 2 12 2Z" fill="#fff"/>
                        </svg>
                        <span><?php echo count($rowCar); ?></span> 
                    </div>
                    <div class="innertext"><p>LISTED VEHICLES</p></div>
                </div>

                <div class="cardbody">
                    <div class="firsthold">
                        <svg width="70" height="70" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 14C6.23858 14 4 16.2386 4 19C4 20.6569 5.34315 22 7 22H17C18.6569 22 20 20.6569 20 19C20 16.2386 17.7614 14 15 14H9Z" fill="#fff"/>
                            <path d="M12 2C9.23858 2 7 4.23858 7 7C7 9.76142 9.23858 12 12 12C14.7614 12 17 9.76142 17 7C17 4.23858 14.7614 2 12 2Z" fill="#fff"/>
                        </svg>
                        <span>8</span> 
                    </div>
                    <div class="innertext"><p>TOTAL BOOKINGS</p></div>
                </div>
            </div>
        </div>
    </div>

    
</body>
</html>