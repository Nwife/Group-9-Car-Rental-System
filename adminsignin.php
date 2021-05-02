<?php require('template\firstheader.php'); ?>

<?php echo "<link rel='stylesheet' href='adminsignin.css'>" ?>
   <main>
        <div class="title">
            <h1>SIGN IN AS ADMIN</h1>
        </div>


        <!-- <div class="formparent"> -->
            <form action="includes/adminlogin.inc.php" method="POST">
            <?php

            if(isset($_GET['error'])){
                if($_GET['error'] == "emptyfields"){
                    echo '<p class ="signuperror"> Fill in all fields!</p>';
                }
                elseif($_GET['error'] == "wrongnamepwd"){
                    echo '<p class ="signuperror"> Invalid username or password!</p>';
                }
            }

            ?>
                <label for="name" class="label">USERNAME</label><br>
                <input type="text" class="input-text" name="adminname" placeholder=""><br>
                <label for="Password" class="label">PASSWORD</label><br>
                <input type="password" class="input-text" name="adminpwd"><br>
                <input type="submit" value="SIGN IN" class="submit-button" name="adminlogin-submit"><br>
            </form>
        <!-- </div> -->

    </main>

<?php require('template\footer.php'); ?>