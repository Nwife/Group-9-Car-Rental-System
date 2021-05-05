<?php require('mainheader.php'); ?>

    <?php echo "<link rel='stylesheet' href='contactus.css'>" ?>

    <div class="container">
        <div class="content">
            <div class="backgroundimage">
                <div class="text">
                    <!-- <h5>GROUP 9</h5> -->

                    <h1>CONTACT US</h1>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="formparent">

            <form  action="../includes/contact.inc.php" method="POST">
                <h3 class="signintext">REACH OUT TO MAKE INQUIRIES</h3><br>

                <?php
                if(isset($_GET['error'])){
                    if($_GET['error'] == "emptyfields"){
                        echo '<p class ="contacterror"> Fill in all fields!</p>';
                    }
                    elseif($_GET['error'] == "queryerror"){
                        echo '<p class ="contacterror"> An error occured</p>';
                    }
                }
                elseif(isset($_GET['success'])){
                    if($_GET['success'] == "submitted"){
                        echo '<p class ="contactsuccess">Message Sent</p>';
                    }
                }
                
            ?>

                <label for="Name" class="label">NAME</label><br>
                <input type="text" class="input-text" name="name" placeholder=""><br>
                <label for="Email" class="label">EMAIL</label><br>
                <input type="email" class="input-text" name="email"><br>
                <label for="message" class="label">MESSAGE</label><br>
                <textarea type="text" class="message-text" name="message"></textarea><br>
                <input type="submit" value="SUBMIT" name="contact-submit"><br>
                
                
            </form>
        </div>

         
        </div>
    </div>

    <?php require('mainfooter.php'); ?>
