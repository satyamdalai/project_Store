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
        <div class="row center-block">
        <div class="container">
            <div class="col-sm-4">
                <center>
                    <h2 class="about-head">WHO WE ARE</h2><br>
                    <img src="img/about-img.jpg" class="img-responsive img-rounded"><br>
                <p>E-Com Mobiles was founded in October 2020 by Satyam Dalai, who is a final year B.Tech student at Institute of Technical Eduation and Research, Bhubaneswar. This 
                website was designed using HTML, CSS and Bootstrap and backend part was programmed using PHP and MySQL. This website is the part of my project 
                under the Web Developmet Course of Internshala Trainings. Softwares used are Apache NetBeans IDE and WAMP.</p>
                </center>
            </div>
            <div class="col-sm-4">
                <center>
                <h2 class="about-head">OUR HISTORY</h2><br>
                </center>
                <dl>
                    <dt><h4>Module 1</h4></dt>
                    <dd>HTML & CSS was used to designed the homepage of this website.</dd><br>
                    <dt><h4>Module 2</h4></dt>
                    <dd>Bootstrap was used to make the website fully functional and mobile responsive.</dd>
                    <dt><h4>Module 3</h4></dt>
                    <dd>MySQL was used to create database to store data of the products and our valuable customers.</dd>
                    <dt><h4>Module 4</h4></dt>
                    <dd>PHP was used to bring the website to life by adding the backend codes.</dd>
                </dl>
                <p class="text-capitalize text-info"><b><i>All the images and graphics used in this project belong to their respective 
                            owners and I does not claim any right over them.</i></b></p>
            </div>
            <div class="col-sm-4">
                <center>
                    <h2 class="about-head">OPPORTUNITIES</h2><br>
                </center>
                    <ol type="1">
                        <li>Jr./Sr. Web Developer [Full Time Role + also available as a 6 Months Internships]</li>
                        <li>Bussiness Apprentise [6 Months Internships]</li>
                        <li>Manager at backend operations[Full Time Role + also available as a 6 Months Internships]</li>
                    </ol>               
            </div>
        </div>
        </div>
        <?php
            include 'includes/footer.php';
        ?>
    </body>
</html>