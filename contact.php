<?php
require './includes/common.php';
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
    </head>
    <body style="padding-top: 50px;">
        <?php
        include 'includes/header.php';
        ?>
        <div class="container">
            <div class="row">
                <div class="col-sm-10">
                    <h1 class="about-head">LIVE SUPPORT</h1>
                    <h3>24 hours|7 days a week| 365 days a year Live Technical Support</h3>
                    <div>
                        <p>
                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters. 
                            There are many variations of passages of Lorel Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. 
                            If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
                        </p>
                    </div>
                </div>
                <div class="col-sm-2">
                    <img src="img/contact.png" class="img-responsive" alt="contactus">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-9">
                    <h2 class="about-head">CONTACT US</h2>
                    <form>
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Name" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" placeholder="E-mail" class="form-control">
                        </div>
                        <div class="form-group">
                            <textarea name="message" placeholder="Your Message Here" rows="7" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="button" name="submit" class="btn btn-primary" value="Submit">
                        </div>
                    </form>
                </div>
                <div class="col-sm-3">
                    <h2 class="title">Contact Info</h2>
	               <address>
				<p>500 Lorem Ipsum Dolar Sit,</p>
				<p>22-56-3-5 Sit Amet, Lorem,</p>
				<p>USA</p>
				<p>Phone:(00) 222 555 3333</p>
				<p>Fax:(000) 222 55 33 6</p>
				<p>Email: info@estore.com</p>
	               </address>
                    <div><h2 class="title">Follow us on :</h2>
                        <a href="http://www.facebook.com/" target="_blank">Facebook</a>
                        <a href="http://www.twitter.com/" target="_blank">Twitter</a>
               </div>
                </div>
            </div>
        </div>
        <?php
            include 'includes/footer.php';
        ?>
    </body>
</html>
