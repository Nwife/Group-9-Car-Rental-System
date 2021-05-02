<?php require('template/firstheader.php'); ?>

    <?php echo "<link rel='stylesheet' href='signin.css'>" ?>

    <div class="container">
        <div class="content">
            <div class="backgroundimage">
                <div class="text">
                    <h5>GROUP 9</h5>

                    <h1>Vehicle<br>Rental System</h1>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="formparent">

            <form  name="email-form" action="includes/login.inc.php" method="POST" data-name="Email Form">
                <h3 class="signintext">SIGN IN TO RENT A VEHICLE</h3><br>

            <?php
                if(isset($_GET['error'])){
                    if($_GET['error'] == "emptyfields"){
                        echo '<p class ="signuperror"> Fill in all fields!</p>';
                    }
                    elseif($_GET['error'] == "incorrectPassword"){
                        echo '<p class ="signuperror"> Password not correct</p>';
                    }
                    elseif($_GET['error'] == "nouserfound"){
                        echo '<p class ="signuperror"> User not found</p>';
                    }
                }

            ?>

                <label for="Email" class="label">EMAIL</label><br>
                <input type="email" class="input-text" name="email" placeholder=""><br>
                <label for="Password" class="label">PASSWORD</label><br>
                <input type="password" class="input-text" name="pwd"><br>
                <input type="submit" name="login-submit" value="SIGN IN" class="submit-button"><br>
                <a href="signup.php" class="account">Not yet a member ? Sign up</a>
            </form>
        </div>

         
        </div>
    </div>



<?php require('template/footer.php'); ?>