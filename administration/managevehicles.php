<?php echo "<link rel='stylesheet' href='adminindex.css'>" ?>

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

        <div class="no">Showing 4 vehicles</div>

        <div class="tablon">
        <table>

            <tbody>
                <tr>
                    <th>S/N</th>
                    <th>Name of vehicle</th>
                    <th>Price per day</th>
                    <th>Fuel Capacity</th>
                    <th>No Of Seats</th>
                    <th>Year</th>
                    <th>Action</th>
                </tr>
                <tr>
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
                </tr>
            </tbody>
        </table>
        </div>

    </div>

    

</body>
</html>