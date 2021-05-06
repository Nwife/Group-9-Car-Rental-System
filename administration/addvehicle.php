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
                </svg><span>Add A New Vehicle</span>
                </div>
        </div>

        <?php
                if(isset($_GET['error'])){
                    if($_GET['error'] == "emptyfields"){
                        echo '<p class ="vehicleerror"> Fill in all fields!</p>';
                    }
                    elseif($_GET['error'] == "queryerror"){
                        echo '<p class ="vehicleerror"> A database error occurred try again</p>';
                    }
                    elseif($_GET['error'] == "filebig"){
                        echo '<p class ="vehicleerror"> Image size too big!</p>';
                    }
                    elseif($_GET['error'] == "fileerror"){
                        echo '<p class ="vehicleerror"> An error occurred while uploading image</p>';
                    }
                    elseif($_GET['error'] == "wrongfiletype"){
                        echo '<p class ="vehicleerror"> File should be an image</p>';
                    }
                    elseif($_GET['error'] == "mailtaken"){
                        echo '<p class ="vehicleerror"> Email is already registered!</p>';
                    }
                }
                elseif(isset($_GET['upload'])){
                    if($_GET['upload'] == "success"){
                        echo '<p class ="vehicleerror">Vehicle added</p>';
                    }
                }
                
        ?>
        <form action="../includes/addvehicle.inc.php" method="POST" enctype="multipart/form-data">

            <div class="section1">

                <div class="innerform">
                    <label for="">NAME OF VEHICLE</label>
                    <input type="text" name="carname" id="">
                </div>

                <div class="innerform">
                    <label for="">PRICE PER DAY</label>
                    <input type="text" name="carprice" id="">
                </div>

                <div class="innerform">
                    <label for="">FUEL CAPACITY</label>
                    <input type="text" name="carfuel" id="">
                </div>

                <div class="innerform">
                    <label for="">NO OF SEATS</label>
                    <input type="text" name="carseats" id="">
                </div>

                <div class="innerform">
                    <label for="">YEAR</label>
                    <input type="text" name="caryear" id="">
                </div>

            </div>

            <div class="section2">
                <div class="outerform">
                    <label for="">VEHICLE DESCRIPTION</label>
                    <textarea name="cardesc" id="" cols="30" rows="10"></textarea>
                </div>

                <div class="outerform part2">
                    <label for="">VEHICLE IMAGE</label>
                    <input type="file" name="file" id="" value="Choose image">
                </div>
            </div>

            <div class="add">
                <input type="submit" name="car-submit" value="ADD CAR">
            </div>


        </form>


    </div>

</body>
</html>