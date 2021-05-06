<?php echo "<link rel='stylesheet' href='adminindex.css'>" ?>

<?php
    require('../includes/dbh.inc.php');

    //write sql to fetch cars
    $sql3 = "SELECT * FROM bookings";

    //query the sql
    $resultBook = mysqli_query($conn, $sql3);

    //return as associative array
    $rowBook = mysqli_fetch_all($resultBook, MYSQLI_ASSOC);

    //free result
    mysqli_free_result($resultBook);

    //close conection
    mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group 9</title>
</head>
<body>
    
    <?php include('adminsidenav.php') ?>

    <div class="main">
        <?php include('adminheader.php'); ?>

        <div class="mainholder">
                <div class="title1">
                <svg width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9 14C6.23858 14 4 16.2386 4 19C4 20.6569 5.34315 22 7 22H17C18.6569 22 20 20.6569 20 19C20 16.2386 17.7614 14 15 14H9Z" fill="#000"/>
                <path d="M12 2C9.23858 2 7 4.23858 7 7C7 9.76142 9.23858 12 12 12C14.7614 12 17 9.76142 17 7C17 4.23858 14.7614 2 12 2Z" fill="#000"/>
                </svg><span>Total Bookings</span>
                </div>
        </div>

        <div class="no">Showing <?= count($rowBook); ?> Bookings</div>

        <div class="tablon">
        <table>

            <tbody>
                <tr>
                    <th>S/N</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Vehicle Name</th>
                    <th>From(date)</th>
                    <th>To(date)</th>
                </tr>


                <?php foreach($rowBook as $book): ?>
                    <?= "<tr><td>".$book['bookID']."</td>" ?>
                    <?= "<td>".$book['bookName']."</td>" ?>
                    <?= "<td>".$book['bookEmail']."</td>" ?>
                    <?= "<td>".$book['bookVehicle']."</td>" ?>
                    <?= "<td>".$book['bookStart']."</td>" ?>
                    <?= "<td>".$book['bookEnd']."</td></tr>" ?>
                <?php endforeach; ?>


                <!-- <tr>
                    <td>1</td>
                    <td>Isioma John</td>
                    <td>isioma@gmail.com</td>
                    <td>Mercedes Benz</td>
                    <td>23/02/2021</td>
                    <td>25/02/2021</td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>Ifee Amaeze</td>
                    <td>ifee@gmail.com</td>
                    <td>BMW</td>
                    <td>22/04/2021s</td>
                    <td>27/04/2021</td>
                </tr>

                <tr>
                    <td>3</td>
                    <td>Maleeku</td>
                    <td>maleeku@gmail.com</td>
                    <td>Keke</td>
                    <td>25/05/2021</td>
                    <td>29/05/2021</td>
                </tr> -->
            </tbody>
        </table>
        
        </div>

    </div>

</body>
</html>