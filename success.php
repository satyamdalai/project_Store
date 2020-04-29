<?php
require 'includes/common.php';
if(!isset($_SESSION['email'])){
    header('location: index.php?logon= Please Login to Continue!');
}
$user_id=$_SESSION['user_id'];
$item_string = $_GET['itemsid'];

$success="UPDATE users_items SET status='Confirmed' WHERE user_id = '$user_id' AND item_id IN (".$item_string.") AND status='Added to Cart'; ";
mysqli_query($con, $success) or die(mysqli_error($con));
?>
<!DOCTYPE html>
<!--
Internshala Web Development Training
Final Project
by Satyam Dalai
success.php file
-->
<html>
    <head>
        <title>Order Placed | E-Com Mobiles</title>
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
    <body>
        <?php include 'includes/header.php'; ?>
        <div class="container-fluid" id="content">
            <div class="col-md-12">
                <div class="jumbotron">

                      <h2 align="center">Thank you for shopping with us.</h2><hr>
                      <p class="text-center">Your order is confirmed and will be delivered to you shortly.</p>
                    <p align="center">Click <a href="home.php">here</a> to purchase any other item.</p>
                </div>
            </div>
        </div>
        <?php include("includes/footer.php");
        ?>
    </body>
</html>
