<?php require('mainheader.php'); ?>

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

    <?php echo "<link rel='stylesheet' href='index.css'>" ?>

    <div class="carintro">
       <div class="content">
            <h5>GROUP 9</h5>

            <h1>Vehicle<br>Rental System</h1> <br>

            <a href="../signin.php">RENT A VEHICLE NOW</a>

            <h6>SCROLL DOWN</h6>
       </div>    
    </div>

    <div class="introtalk">
        <h2>We have what you need</h2>
        
        <p> In this chapter and the next, we are concerned with business rules that impact only an 
            organization’s databases. <br> Most organizations have a host of rules and/or policies that 
            fall outside this definition. For example, the rule “Friday is business casual dress day” <br>
            “Friday is business casual dress day”
            </p>
    </div>

    <div class="cars">
        <p><img src="profile-user.png"> Vehicles Available For Rent</p>

        <?php foreach($rowCar as $car): ?>
        <div class="carbook">
        
            <div class="car1" style= "background-image: url('../images/<?= $car["imgFullNameCar"]; ?>')">

            </div>
            <div class="cardetails">
                <p id="one"><?= $car["carName"]; ?></p>
                <p id="two"><?= $car["carPrice"] . "/Day";?></p>
                <p id="three"><img src="profile-user.png"> <?= $car["carFuel"] . " litres"; ?></p>
                <p id="four"><img src="profile-user.png"> <?= $car["carSeats"] . " seats"; ?></p>
                <p id="five"><img src="profile-user.png"> <?= $car["carYear"]; ?></p>
                <button><a href="details.php?id=<?= $car['carID']; ?>">VIEW DETAILS</a></button>
            </div>

            
        </div>
        <?php endforeach; ?>


        
        <!-- <div class="carbook">

            <div class="car1">
                Hello

            </div>
            <div class="cardetails">
                <p id="one">MERC BENZ</p>
                <p id="two">N10,000/Day</p>
                <p id="three"><img src="profile-user.png"> 4.0litres</p>
                <p id="four"><img src="profile-user.png"> 2 seats</p>
                <p id="five"><img src="profile-user.png"> 2021</p>
                <button>VIEW DETAILS</button>
            </div>

        </div> -->

        
        <!-- <div class="carbook">

            <div class="car1">
                Hello

            </div>
            <div class="cardetails">
                Bosy
            </div>

        </div>

        
        <div class="carbook">

            <div class="car1">
                Hello

            </div>
            <div class="cardetails">
                Bosy
            </div>

        </div>

        <div class="carbook">

            <div class="car1">
                Hello

            </div>
            <div class="cardetails">
                Bosy
            </div>

        </div>

        <div class="carbook">

        <div class="car1">
            Hello

        </div>
        <div class="cardetails">
            Bosy
        </div>

        </div>

         -->


        


    </div>
    
    <?php require('mainfooter.php'); ?>