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
login-modal.php file
-->
<html>
    <head>
        <title>Login | E-Com Mobiles</title>
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
        <div id="content">
        <div class="container" id="login-panel">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4>LOGIN</h4>
                </div>
                <div class="panel-body">
                    <p class="text-warning"><i>Login to make a purchase</i></p>
                    <form method="post" action="login_submit.php">
                        <div class="form-group">
                            <input type="email" placeholder="E-mail" class="form-control" name="email" required pattern="[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$"> 
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Password" class="form-control" name="pwd" required  pattern=".{6,}" title="Must contain at least 6 characters">
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                        <div><p class="text-danger">
                            <?php
                            if(isset($_GET['error'])){
                                echo $_GET['error'];
                            }
                            ?>
                            </p>
                        </div>
                    </form>
                    <br/>
                </div>
                <div class="panel-footer">
                    Don't have an account? <a href="signup.php">Register</a> 
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
