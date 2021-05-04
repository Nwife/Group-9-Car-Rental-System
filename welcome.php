<?php require('template/firstheader.php'); ?>

<?php echo "<link rel='stylesheet' href='welcome.css'>" ?>

   <main>
        <div class="title">
            <h1>Vehicle Rental System</h1>
            <p></h5>SIGN IN AS</p>
        </div>

        <div class="icons">
            <div class="icon">
                <a href="adminsignin.php"><i class="fa fa-user-circle-o fa-5x" aria-hidden="true"></i></a>
                <h4>ADMIN</h4>
            </div>
            <div class="icon">
                <a href="signin.php" ><i class="fa fa-user-circle-o fa-5x" aria-hidden="true"></i></a>
                <h4>A USER</h4>
            </div>
            <div class="icon">
                <a href="main/index.php" ><i class="fa fa-user-circle-o fa-5x" aria-hidden="true"></i></a>
                <h4>GUEST</h4>
            </div>
        </div>
    </main>

<?php require('template/footer.php'); ?>