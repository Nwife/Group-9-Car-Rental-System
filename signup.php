<?php require('template/firstheader.php'); ?>

    <?php echo "<link rel='stylesheet' href='signup.css'>" ?>

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

            <form action="includes/signup.inc.php" method="POST" name="email-form" data-name="Email Form">
                <h3 class="signintext">SIGN UP TO RENT A VEHICLE</h3><br>

                <?php
                if(isset($_GET['error'])){
                    if($_GET['error'] == "emptyfields"){
                        echo '<p class ="signuperror"> Fill in all fields!</p>';
                    }
                    elseif($_GET['error'] == "invalidmailphone"){
                        echo '<p class ="signuperror"> Invalid e-mail and phone no</p>';
                    }
                    elseif($_GET['error'] == "invalidmail"){
                        echo '<p class ="signuperror"> Invalid E-mail</p>';
                    }
                    elseif($_GET['error'] == "invalidphone"){
                        echo '<p class ="signuperror"> Invalid phone mo</p>';
                    }
                    elseif($_GET['error'] == "mailtaken"){
                        echo '<p class ="signuperror"> Email is already registered!</p>';
                    }
                }
                elseif(isset($_GET['signup'])){
                    if($_GET['signup'] == "success"){
                        echo '<p class ="signupsuccess">Signup Successful!</p>';
                    }
                }
                
            ?>

                <label for="Email" class="label">NAME</label><br>
                <input type="text" class="input-text" name="fname" placeholder=""><br>
                <label for="Email" class="label">EMAIL</label><br>
                <input type="email" class="input-text" name="email" placeholder=""><br>
                <label for="Email" class="label">PHONE NO</label><br>
                <input type="number" class="input-text" name="phone" placeholder=""><br>
                <label for="Password" class="label">PASSWORD</label><br>
                <input type="password" class="input-text" name="pwd"><br>
                <input type="submit" value="SIGN UP" name="signup-submit" class="submit-button"><br>
                <a href="signin.php" class="account">Already a member ? Sign in</a>
            </form>

        </div>

         
        </div>
    </div>



<?php require('template/footer.php'); ?>