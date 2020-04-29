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
signup.php file
-->
<html>
    <head>
        <title>Sign Up | E-Com Mobiles</title>
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
        <?php
        include './includes/header.php';
        ?>
        <div class="container">
                <div class="col-md-6">
                    <img src="img/yess.jpg" class="img-responsive">
                </div>
                <div class="col-md-6">
                    <form action="signup_script.php" method="post">
                        <div class="form-group">
                        <h2>SIGN UP</h2>                       
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Name" class="form-control" name="name" required >
                        </div>
                        <div class="form-group">
                            <input  class="form-control" type="email" placeholder="Email" name="email" required pattern="[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$" title="Enter a valid email!">
                            <p class="text-warning"><?php
                                if(isset($_GET["email_error"])){
                                  echo $_GET['email_error'];
                                }
                                ?></p>
                        </div>                                                                              
                        <div class="form-group">
                            <input type="password" placeholder="Password" class="form-control" name="pwd" required pattern=".{6,}" title="Must contain at least 6 characters">                            
                            <p class="text-warning"><?php
                                if(isset($_GET["pass_error"])){
                                  echo $_GET['pass_error'];
                                }
                                ?></p>
                        </div>                                 
                        <div class="form-group">
                            <input type="tel" placeholder="Contact" class="form-control" name="phone" required size="10" maxlength="10" title="Enter a valid number!">
                            <p class="text-warning"><?php
                                if(isset($_GET["phone_error"])){
                                  echo $_GET['phone_error'];
                                }
                                ?></p>
                        </div>                                                      
                        <div class="form-group">
                            <input type="text" placeholder="City" class="form-control" required name="city">                           
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Address" class="form-control" required name="address">
                        </div>
                        <div>
                        <button type="submit" class="btn btn-primary">Submit</button>                    
                        </div>
                        <div><p class="text-warning">                         
                            </p></div>
                    </form>
                    <div class="form-group">
                        <p class="text-info">Already have an account? Click <a href="#" data-toggle="modal" data-target="#login-modal">here</a> to Login.</p>
                    </div>
                </div>
            </div>
        <?php
            include 'includes/footer.php';
        ?>
    </body>
</html>
