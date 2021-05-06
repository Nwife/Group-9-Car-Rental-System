<?php echo "<link rel='stylesheet' href='adminindex.css'>" ?>

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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group 9</title>
</head>
<body>

    <?php include('adminsidenav.php'); ?>

    <div class="main">
        <?php include('adminheader.php'); ?>

        <div class="mainholder">
                <div class="title1">
                <svg width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9 14C6.23858 14 4 16.2386 4 19C4 20.6569 5.34315 22 7 22H17C18.6569 22 20 20.6569 20 19C20 16.2386 17.7614 14 15 14H9Z" fill="#000"/>
                <path d="M12 2C9.23858 2 7 4.23858 7 7C7 9.76142 9.23858 12 12 12C14.7614 12 17 9.76142 17 7C17 4.23858 14.7614 2 12 2Z" fill="#000"/>
                </svg><span>Manage Vehicles</span>
                </div>

                <div class="button1">
                    <button><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <rect fill="#fff" x="4" y="11" width="16" height="2" rx="1"/>
                    <rect fill="#fff" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1"/>
                    </g>
                    </svg><span><a href="addvehicle.php"> New Vehicles </a></span> </button>
                </div>
        </div>

        <div class="no">Showing <?= count($rowCar) ?> vehicles</div>

        <div class="tablon">
        <table>

            <tbody>
                <tr>
                    <th>S/N</th>
                    <th>Name of vehicle</th>
                    <th>Price per day</th>
                    <th>Fuel Capacity(Ltrs)</th>
                    <th>No Of Seats</th>
                    <th>Year</th>
                    <th>Action</th>
                </tr>

                <?php foreach($rowCar as $cars): ?>
                    <tr><td><?= $cars['carID']; ?></td>
                    <td><?= $cars['carName']; ?></td>
                    <td><?= $cars['carPrice']; ?></td>
                    <td><?= $cars['carFuel']; ?></td>
                    <td><?= $cars['carSeats']; ?></td>
                    <td><?= $cars['carYear']; ?></td>
                    <td class='edits'>
                        <form class="deleteform" action="../includes/deletecar.inc.php" method="POST">
                            <input type="hidden" name="carid" value="<?= $cars['carID']; ?>">
                            <button class="deletecar deletecar2" type="submit" name="deletecar-submit">
                            <svg id="trash" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 19.991 23.385">
                            <path id="Path_38" data-name="Path 38" d="M66.069,2.923H61.84V2.192A2.252,2.252,0,0,0,59.533,0H56.458a2.252,2.252,0,0,0-2.307,2.192v.731H49.922A1.876,1.876,0,0,0,48,4.75V6.212a.751.751,0,0,0,.769.731H67.222a.751.751,0,0,0,.769-.731V4.75A1.876,1.876,0,0,0,66.069,2.923Zm-10.38-.731a.752.752,0,0,1,.769-.731h3.076a.752.752,0,0,1,.769.731v.731H55.689Z" transform="translate(-48)" fill="#000"/>
                            <path id="Path_39" data-name="Path 39" d="M73.6,184a.234.234,0,0,0-.24.239L74,196.893a2.256,2.256,0,0,0,2.3,2.088H87.979a2.256,2.256,0,0,0,2.3-2.088l.634-12.653a.234.234,0,0,0-.24-.239Zm11.612,1.827a.77.77,0,0,1,1.538,0v9.5a.77.77,0,0,1-1.538,0Zm-3.844,0a.77.77,0,0,1,1.538,0v9.5a.77.77,0,0,1-1.538,0Zm-3.844,0a.77.77,0,0,1,1.538,0v9.5a.77.77,0,0,1-1.538,0Z" transform="translate(-72.145 -175.596)" fill="#000"/>
                            </svg>
                            </button>
                        </form>
                        
                        
                        
                    </td></tr>
                <?php endforeach; ?>
                <!-- <tr>
                    <td>1</td>
                    <td>Mercedes Benz</td>
                    <td>14,000 naira</td>
                    <td>2.35 litres</td>
                    <td>5 Seats</td>
                    <td>2018</td>
                    <td class="edits">
                        <a href="#">
                        <svg width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 14C6.23858 14 4 16.2386 4 19C4 20.6569 5.34315 22 7 22H17C18.6569 22 20 20.6569 20 19C20 16.2386 17.7614 14 15 14H9Z" fill="#000"/>
                        <path d="M12 2C9.23858 2 7 4.23858 7 7C7 9.76142 9.23858 12 12 12C14.7614 12 17 9.76142 17 7C17 4.23858 14.7614 2 12 2Z" fill="#000"/>
                        </svg>
                        <a>
                        
                        <a href="">
                        <svg width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 14C6.23858 14 4 16.2386 4 19C4 20.6569 5.34315 22 7 22H17C18.6569 22 20 20.6569 20 19C20 16.2386 17.7614 14 15 14H9Z" fill="#000"/>
                        <path d="M12 2C9.23858 2 7 4.23858 7 7C7 9.76142 9.23858 12 12 12C14.7614 12 17 9.76142 17 7C17 4.23858 14.7614 2 12 2Z" fill="#000"/>
                        </svg>
                        </a>
                    </td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>bugatti enyata</td>
                    <td>14,000 naira</td>
                    <td>4.15 litres</td>
                    <td>5 Seats</td>
                    <td>2019</td>
                    <td></td>
                </tr>

                <tr>
                    <td>3</td>
                    <td>Sienna</td>
                    <td>14,000 naira</td>
                    <td>2.35 litres</td>
                    <td>7 Seats</td>
                    <td>2018</td>
                    <td></td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>Lamborghini</td>
                    <td>14,000 naira</td>
                    <td>2.35 litres</td>
                    <td>5 Seats</td>
                    <td>2018</td>
                    <td></td>
                </tr> -->
            </tbody>
        </table>
        </div>

    </div>

    

</body>
</html>