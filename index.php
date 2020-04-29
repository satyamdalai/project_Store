<?php
require './includes/common.php';
if(isset($_SESSION['email']))
{
    header('location:home.php');
}
?>

<!DOCTYPE html>
<!--
Internshala Web Development Training
Final Project
by Satyam Dalai
index.php file
-->
<html>
    <head>
        <title>Welcome | E-Com Mobiles</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body style="padding-top: 50px;">
        <?php
        include 'includes/header.php';
        ?>
        <div id="content">
            <div id = "banner_image">
                <div class="container">	
                    <center>
                        <div id="banner_content">
                            <h1>Fastest Growing Mobile Store</h1>
                            <p style="font-size: 20px;">Flat 10% off on featured products.</p>
                            <br/>
                            <a  href="home.php" class="btn btn-warning btn-lg active">Shop Now</a>
                            <br>
                            <br>
                            <p class="text" style="font-size: 15px;">
                            <?php
                            if(isset($_GET["logon"])){
                                echo $_GET['logon'];
                            }
                            ?>
                            </p>
                        </div>
                    </center>
                </div>
            </div>
            <div class="container text-center">
                    <h2 class="about-head">CHOOSE FROM THE BEST AVAILABLE</h2>
            </div>
            <div class="container">
                <div class="row text-center" id="item_list">
                    <div class="col-sm-3">
                        <a href="home.php#apple" >
                            <div class="thumbnail">
                                <img src="img/phones/iphone.png" alt="">
                                <div class="caption">
                                    <h3>Apple</h3>
                                </div>
                            </div> 
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <a href="home.php#samsung" >
                            <div class="thumbnail">
                                <img src="img/phones/samsung.png" alt="">
                                <div class="caption">
                                    <h3>Samsung</h3>
                                </div>
                            </div> 
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <a href="home.php#redmi" >
                            <div class="thumbnail">
                                <img src="img/phones/redmi.png" alt="">
                                <div class="caption">
                                    <h3>Redmi</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <a href="home.php#realme" >
                            <div class="thumbnail">
                                <img src="img/phones/realme.png" alt="">
                                <div class="caption">
                                    <h3>Realme</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <?php
            include 'includes/footer.php';
        ?>
    </body>
</html>
