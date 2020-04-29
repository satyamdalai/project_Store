<?php
require 'includes/common.php';
if(!isset($_SESSION['email'])){
    header('location: index.php?logon= Please Login to Continue!');
}
?>
<!DOCTYPE html>
<!--
Internshala Web Development Training
Final Project
by Satyam Dalai
home.php file
-->
<html>
    <head>
        <title>Home | E-Com Mobiles</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
        <style>
            .panel{
                border: solid #9d9d9d
            }
        </style>
    </head>
    <body>
        <?php
        include 'includes/header.php';
        include './includes/check-if-added.php';
        ?>
        <div class="container" id="content">

            <!-- Jumbotron Header -->
            <div class="jumbotron home-spacer" id="products-jumbotron">
                <h1>Welcome to E-Com Mobiles!</h1>
                <p>We have the best Mobile phone from Biggest Brands for you. No need to hunt around, we have all in one place.</p>

            </div>
            <hr>
            <div class="container-fluid">
                    <div class="row" id="apple">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2 class="about-head">APPLE</h2>
                        </div>
                            <div class="panel-body">
                        <div class="col-sm-3">
                            
                            <div class="thumbnail">
                                <img src="img/phones/iphone-1.jpeg" class="img-responsive">
                                <center>
                                <div class="caption">
                                    <h4>Apple iPhone 11 Pro Max</h4>
                                    <p>₹1,09,900 (Midnight Green, 64GB)</p>
                                    <?php
                            if(!isset($_SESSION['email'])){?>
                            <p><a href="#" data-target="#login-modal" data-toggle="modal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                            } else {
                                if(check_if_added_to_cart(1)){
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else{ ?>
                            <a href="cart-add.php?id=1" name="add" value="add"  class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                                </center>
                                </div>
                            </div>
                            <div class="col-sm-3">
                            
                            <div class="thumbnail">
                                <img src="img/phones/iphone-2.jpeg" class="img-responsive">
                                <center>
                                <div class="caption">
                                    <h4>Apple iPhone 11 Pro</h4>
                                    <p>₹99,900 (Space Grey, 64GB)</p>
                                    <?php
                            if(!isset($_SESSION['email'])){?>
                            <p><a href="#" data-target="#login-modal" data-toggle="modal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                            } else {
                                if(check_if_added_to_cart(2)){
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else{ ?>
                            <a href="cart-add.php?id=2" name="add" value="add"  class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                                </center>
                                </div>
                            </div>
                            <div class="col-sm-3">
                            
                            <div class="thumbnail">
                                <img src="img/phones/iphone-3.jpeg" class="img-responsive">
                                <center>
                                <div class="caption">
                                    <h4>Apple iPhone 11</h4>
                                    <p>₹68000 (Lavender, 64GB)</p>
                                    <?php
                            if(!isset($_SESSION['email'])){?>
                            <p><a href="#" data-target="#login-modal" data-toggle="modal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                            } else {
                                if(check_if_added_to_cart(3)){
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else{ ?>
                            <a href="cart-add.php?id=3" name="add" value="add"  class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                                </center>
                                </div>
                            </div>
                            <div class="col-sm-3">
                            
                            <div class="thumbnail">
                                <img src="img/phones/iphone-4.jpeg" class="img-responsive">
                                <center>
                                <div class="caption">
                                    <h4>Apple iPhone SE</h4>
                                    <p>₹42,000 (Black, 64GB)</p>
                                    <?php
                            if(!isset($_SESSION['email'])){?>
                            <p><a href="#" data-target="#login-modal" data-toggle="modal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                            } else {
                                if(check_if_added_to_cart(4)){
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else{ ?>
                            <a href="cart-add.php?id=4" name="add" value="add"  class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                                </center>
                                </div>
                            </div>
                        </div>
                            </div>
                    </div>
                    <div class="row" id="samsung">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2 class="about-head">SAMSUNG</h2>
                        </div>
                        <div class="panel-body">
                        <div class="col-sm-3">
                            
                            <div class="thumbnail">
                                <img src="img/phones/samsung-1.jpeg" class="img-responsive">
                                <center>
                                <div class="caption">
                                    <h4>Samsung Galaxy S20+</h4>
                                    <p>₹73,999 (Cosmic Gray, 128GB)</p>
                                    <?php
                            if(!isset($_SESSION['email'])){?>
                            <p><a href="#" data-target="#login-modal" data-toggle="modal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                            } else {
                                if(check_if_added_to_cart(5)){
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else{ ?>
                            <a href="cart-add.php?id=5" name="add" value="add"  class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                                </center>
                                </div>
                            </div>
                            <div class="col-sm-3">
                            
                            <div class="thumbnail">
                                <img src="img/phones/samsung-3.jpeg" class="img-responsive">
                                <center>
                                <div class="caption">
                                    <h4>Samsung Galaxy S10e</h4>
                                    <p>₹41,900 (Black, 128GB)</p>
                                    <?php
                            if(!isset($_SESSION['email'])){?>
                            <p><a href="#" data-target="#login-modal" data-toggle="modal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                            } else {
                                if(check_if_added_to_cart(6)){
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else{ ?>
                            <a href="cart-add.php?id=6" name="add" value="add"  class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                                </center>
                                </div>
                            </div>
                            <div class="col-sm-3">
                            
                            <div class="thumbnail">
                                <img src="img/phones/samsung-4.jpeg" class="img-responsive">
                                <center>
                                <div class="caption">
                                    <h4>Samsung Galaxy A71</h4>
                                    <p>₹29,999 (Prism Silver, 128GB)</p>
                                    <?php
                            if(!isset($_SESSION['email'])){?>
                            <p><a href="#" data-target="#login-modal" data-toggle="modal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                            } else {
                                if(check_if_added_to_cart(7)){
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else{ ?>
                            <a href="cart-add.php?id=7" name="add" value="add"  class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                                </center>
                                </div>
                            </div>
                            <div class="col-sm-3">
                            
                            <div class="thumbnail">
                                <img src="img/phones/samsung-2.jpeg" class="img-responsive">
                                <center>
                                <div class="caption">
                                    <h4>Samsung Galaxy M30s</h4>
                                    <p>₹13,999(Black, 64GB)</p>
                                    <?php
                            if(!isset($_SESSION['email'])){?>
                            <p><a href="#" data-target="#login-modal" data-toggle="modal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                            } else {
                                if(check_if_added_to_cart(8)){
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else{ ?>
                            <a href="cart-add.php?id=8" name="add" value="add"  class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                                </center>
                                </div>
                            </div>
                        </div>
                            </div>
                    </div>
                    <div class="row" id="redmi">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2 class="about-head">REDMI</h2>
                        </div>
                        <div class="panel-body">
                        <div class="col-sm-3">
                            
                            <div class="thumbnail">
                                <img src="img/phones/redmi-1.jpeg" class="img-responsive">
                                <center>
                                <div class="caption">
                                    <h4>Redmi Note 8 Pro</h4>
                                    <p>₹14,999 (Electric Blue, 64GB)</p>
                                    <?php
                            if(!isset($_SESSION['email'])){?>
                            <p><a href="#" data-target="#login-modal" data-toggle="modal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                            } else {
                                if(check_if_added_to_cart(9)){
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else{ ?>
                            <a href="cart-add.php?id=9" name="add" value="add"  class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                                </center>
                                </div>
                            </div>
                            <div class="col-sm-3">
                            
                            <div class="thumbnail">
                                <img src="img/phones/redmi-2.jpeg" class="img-responsive">
                                <center>
                                <div class="caption">
                                    <h4>POCO X2</h4>
                                    <p>₹16,999 (Phoenix Red, 64GB)</p>
                                    <?php
                            if(!isset($_SESSION['email'])){?>
                            <p><a href="#" data-target="#login-modal" data-toggle="modal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                            } else {
                                if(check_if_added_to_cart(10)){
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else{ ?>
                            <a href="cart-add.php?id=10" name="add" value="add"  class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                                </center>
                                </div>
                            </div>
                            <div class="col-sm-3">
                            
                            <div class="thumbnail">
                                <img src="img/phones/redmi-3.jpeg" class="img-responsive">
                                <center>
                                <div class="caption">
                                    <h4>Redmi K20 Pro</h4>
                                    <p>₹26,999 (Carbon Black, 128GB)</p>
                                    <?php
                            if(!isset($_SESSION['email'])){?>
                            <p><a href="#" data-target="#login-modal" data-toggle="modal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                            } else {
                                if(check_if_added_to_cart(11)){
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else{ ?>
                            <a href="cart-add.php?id=11" name="add" value="add"  class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                                </center>
                                </div>
                            </div>
                            <div class="col-sm-3">
                            
                            <div class="thumbnail">
                                <img src="img/phones/redmi-4.jpeg" class="img-responsive">
                                <center>
                                <div class="caption">
                                    <h4>Mi A3</h4>
                                    <p>₹12,999(More Than White, 64GB)</p>
                                    <?php
                            if(!isset($_SESSION['email'])){?>
                            <p><a href="#" data-target="#login-modal" data-toggle="modal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                            } else {
                                if(check_if_added_to_cart(12)){
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else{ ?>
                            <a href="cart-add.php?id=12" name="add" value="add"  class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                                </center>
                                </div>
                            </div>
                        </div>
                            </div>
                    </div>
                    <div class="row" id="realme">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2 class="about-head">REALME</h2>
                        </div>
                        <div class="panel-body">
                        <div class="col-sm-3">
                            
                            <div class="thumbnail">
                                <img src="img/phones/realme-1.jpeg" class="img-responsive">
                                <center>
                                <div class="caption">
                                    <h4>Realme X2 Pro</h4>
                                    <p>₹31,999 (Lunar White, 128GB)</p>
                                    <?php
                            if(!isset($_SESSION['email'])){?>
                            <p><a href="#" data-target="#login-modal" data-toggle="modal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                            } else {
                                if(check_if_added_to_cart(13)){
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else{ ?>
                            <a href="cart-add.php?id=13" name="add" value="add"  class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                                </center>
                                </div>
                            </div>
                            <div class="col-sm-3">
                            
                            <div class="thumbnail">
                                <img src="img/phones/realme-2.jpeg" class="img-responsive">
                                <center>
                                <div class="caption">
                                    <h4>Realme XT</h4>
                                    <p>₹15,999 (Pearl White, 64GB)</p>
                                    <?php
                            if(!isset($_SESSION['email'])){?>
                            <p><a href="#" data-target="#login-modal" data-toggle="modal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                            } else {
                                if(check_if_added_to_cart(14)){
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else{ ?>
                            <a href="cart-add.php?id=14" name="add" value="add"  class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                                </center>
                                </div>
                            </div>
                            <div class="col-sm-3">
                            
                            <div class="thumbnail">
                                <img src="img/phones/realme-3.jpeg" class="img-responsive">
                                <center>
                                <div class="caption">
                                    <h4>Realme 6</h4>
                                    <p>₹13,999 (Comet White, 64GB)</p>
                                    <?php
                            if(!isset($_SESSION['email'])){?>
                            <p><a href="#" data-target="#login-modal" data-toggle="modal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                            } else {
                                if(check_if_added_to_cart(15)){
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else{ ?>
                            <a href="cart-add.php?id=15" name="add" value="add"  class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                                </center>
                                </div>
                            </div>
                            <div class="col-sm-3">
                            
                            <div class="thumbnail">
                                <img src="img/phones/realme-4.jpeg" class="img-responsive">
                                <center>
                                <div class="caption">
                                    <h4>Realme C3</h4>
                                    <p>₹7,499 (Frozen Blue, 64GB)</p>
                                    <?php
                            if(!isset($_SESSION['email'])){?>
                            <p><a href="#" data-target="#login-modal" data-toggle="modal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                            } else {
                                if(check_if_added_to_cart(16)){
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else{ ?>
                            <a href="cart-add.php?id=16" name="add" value="add"  class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                                </center>
                                </div>
                            </div>
                        </div>
                            </div>
                    </div>
                </div>
            </div>
        <?php
            include 'includes/footer.php';
        ?>
    </body>
</html>