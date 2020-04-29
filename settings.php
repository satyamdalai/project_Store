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
settings.php file
-->
<html>
    <head>
        <title>Settings | E-Com Mobiles</title>
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
            footer{
                position: fixed;
            }
        </style>
    </head>
    <body>
        <?php
        include 'includes/header.php';
        ?>
        <div class="container" style="margin-top: 5%;">
            <div class="row">
                <div class="col-sm-offset-3 col-sm-6">
                    <form method="POST" action="settings_script.php">
                        <div class="form-group">
                            <h4 class="head">CHANGE PASSWORD</h4>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Old Password" name="opwd" id="opwd" pattern=".{6,}" required="">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="New Password" name="npwd" id="npwd" pattern=".{6,}" required="">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Re-type New Password" name="rnpwd" id="rnpwd" pattern=".{6,}" required="">
                        </div>
                        <div>
                        <?php
                        if(isset($_GET["error"])){
                          echo $_GET['error'];
                        }
                        ?>
                        <?php
                        if(isset($_GET["changed"])){
                          echo $_GET['changed'];
                        }
                        ?>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-danger">Change</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php  
            include 'includes/footer.php';
        ?>
    </body>
</html>
