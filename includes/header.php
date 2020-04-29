<?php
    include 'login-modal.php';
    include 'includes/common.php';
?>
<!--
Internshala Web Development Training
Final Project
by Satyam Dalai
header.php file
-->
<div class="navbar navbar-inverse navbar-fixed-top bold">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mySiteNav">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand nav_logo active" href="index.php" style="color: goldenrod;">E-Com Mobiles</a>
                </div>
                <div class="collapse navbar-collapse" id="mySiteNav">
                    <ul class="nav navbar-nav navbar-right">
                <?php
                if(isset($_SESSION['email'])){
                ?>
                        <li><a href="cart.php" style="color: goldenrod;"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                        <li><a href="settings.php" style="color: goldenrod;"><span class="glyphicon glyphicon-user"></span> Settings</a></li>
                        <li><a href="logout.php" style="color: goldenrod;"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
                        <li><a href="about_us.php" style="color: goldenrod;"><span class="glyphicon glyphicon-info-sign"></span>About Us</a></li>
                        <li><a href="contact.php" style="color: goldenrod;"><span class="glyphicon glyphicon-phone"></span>Contact Us</a></li>
                <?php }
                else {?>
                        <li><a href="signup.php" style="color: goldenrod;"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a style="color: goldenrod;" href="#" data-target="#login-modal" data-toggle="modal"><span class="glyphicon glyphicon-log-in"></span> Log In</a></li>
                        <li><a href="about_us.php" style="color: goldenrod;"><span class="glyphicon glyphicon-info-sign"></span>About Us</a></li>
                        <li><a href="contact.php" style="color: goldenrod;"><span class="glyphicon glyphicon-phone"></span>Contact Us</a></li>
                <?php } ?>
                    </ul>
                </div>
            </div>
        </div>

