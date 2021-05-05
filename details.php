<?php require('mainheader.php'); ?>

<?php echo "<link rel='stylesheet' href='details.css'>" ?>

<?php

    require('../includes/dbh.inc.php');

    //get ID from url
    if(isset($_GET['id'])){
        $id = $_GET['id'];

        //make sql
        $sql = "SELECT * FROM cars WHERE carID = $id";

        //get query result
        $result = mysqli_query($conn, $sql);

        //fetch as an array
        $car = mysqli_fetch_assoc($result);

        mysqli_free_result($result);
        mysqli_close($conn);

    }

?>

<div class="content">

    <div class="displaycar" style= "background-image: url('../images/<?= $car["imgFullNameCar"]; ?>')">

    </div>

</div>

<div class="firstinfo">
    <h4><?= $car["carName"] ?></h4>
    <h3> <?= "N" . $car["carPrice"] . " / Day"; ?></h3>   
</div>

<div class="iconwrapper">
    <img src="profile-user.png">
    <img src="profile-user.png">
    <img src="profile-user.png">
</div>

<div class="newcontent">

    <div class="cartext">
        <h4>Vehicle Details</h4>
        <p>
            <?= $car["carDesc"]; ?>
            <!-- On the other hand, if the limits of integration are interchanged so that we have the
            multiplying factor or, equivalently, This completes the proof of Eq. (2.20).
            <br> Note that the dilation factors a and used in the time and frequency functions in
            Eq. (2.20) are <br> reciprocals. In particular, the function represents compressed in
            time by the factor a, <br> whereas the function represents expanded in frequency
            by the same factor a, assuming that Thus, the dilation rule states that the 
            transform in the frequency domain by the same factor, or vice versa.
            For the special case when the dilation rule of Eq. (2.20) reduces to the <br>
            by the same factor a, assuming that Thus, the dilation rule states that the 
            transform in the frequency domain by the same factor, or vice versa.
            For the special case when the dilation rule of Eq. (2.20) reduces to the  -->
        </p>
    </div>

    <!-- <?php require("../includes/booknow.inc.php"); ?> -->

    <div class="carform">

    <?php
                if(isset($_GET['error'])){
                    if($_GET['error'] == "emptyfields"){
                        echo '<p class ="bookerror"> Fill in all fields!</p>';
                    }
                    elseif($_GET['error'] == "wrongdate"){
                        echo '<p class ="bookerror">Invalid date sets</p>';
                    }
                    elseif($_GET['error'] == "queryerror"){
                        echo '<p class ="bookerror"> An error occurred while booking</p>';
                    }
                   
                }
                elseif(isset($_GET['book'])){
                    if($_GET['book'] == "success"){
                        echo '<p class ="booksuccess">Book Successful!</p>';
                    }
                }
                
            ?>

        <form class="book" action="../includes/booknow.inc.php" method="POST">
            <h4>BOOK NOW</h4>
            
            <input type="hidden" name="carid" value="<?= $car['carID']; ?>">

            <input type="hidden" name="car" value="<?= $car['carName']; ?>">

            <input type="date" name="date1" placeholder="From Date (mm/dd/yy)"> <br>
            
            <input type="date" name="date2" placeholder="To Date (mm/dd/yy)"> <br>

            <textarea name="bookmessage" placeholder="Message"></textarea> <br>

            <input type="submit" class="submit" name="book-submit" value="Book">
        </form>
    </div>

</div>






<?php require('mainfooter.php'); ?>