<?php require('template\firstheader.php'); ?>

<?php echo "<link rel='stylesheet' href='adminsignin.css'>" ?>
   <main>
        <div class="title">
            <h1>SIGN IN AS ADMIN</h1>
        </div>

        <!-- <div class="formparent"> -->
            <form>
                <label for="Email" class="label">EMAIL</label><br>
                <input type="email" class="input-text" name="Email" placeholder=""><br>
                <label for="Password" class="label">PASSWORD</label><br>
                <input type="password" class="input-text" name="Password"><br>
                <input type="submit" value="SIGN IN" class="submit-button"><br>
            </form>
        <!-- </div> -->

    </main>

<?php require('template\footer.php'); ?>