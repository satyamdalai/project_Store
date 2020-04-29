<!--
Internshala Web Development Training
Final Project
by Satyam Dalai
footer.php file
-->

<footer>

    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <h4>Information</h4>
                <p><a href="about_us.php" style="color: #9d9d9d;">About Us</a></p>
                <p><a href="contact.php" style="color: #9d9d9d;">Contact Us</a></p>
            </div>
            <div class="col-sm-4">
                <h4>Account</h4>
                <?php if(!isset($_SESSION['email'])){?>
                    <p><a style="color: #9d9d9d;" href="#" data-toggle="modal" data-target="#login-modal">Login</a></p>
                    <p><a style="color: #9d9d9d;" href="signup.php">Sign-Up</a></p>
                <?php }
                else{ ?>
                    <p><a style="color: #9d9d9d;" href="settings.php">Settings</a></p>
                    <p><a style="color: #9d9d9d;" href="logout.php">Log Out</a></p>
                <?php } ?>
            </div>
            <div class="col-sm-4">
                <h4>Contact Us</h4>
                <p>Contact : +91 0123456789</p>
                <p>Made with &#9829 in India</p>
            </div>
        </div>
    </div>

</footer>