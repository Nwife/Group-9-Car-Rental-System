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

            <form  name="email-form" data-name="Email Form">
                <h3 class="signintext">REACH OUT TO MAKE INQUIRIES</h3><br>
                <label for="Name" class="label">NAME</label><br>
                <input type="text" class="input-text" name="name" placeholder=""><br>
                <label for="Email" class="label">EMAIL</label><br>
                <input type="email" class="input-text" name="Password"><br>
                <label for="message" class="label">MESSAGE</label><br>
                <textarea type="text" class="message-text" name="Password"></textarea><br>
                <input type="submit" value="SUBMIT" class="submit-button"><br>
                
                
            </form>
        </div>

         
        </div>
    </div>

    <?php require('mainfooter.php'); ?>
