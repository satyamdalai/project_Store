<!--
Internshala Web Development Training
Final Project
by Satyam Dalai
signup_script.php file
-->
<?php
require 'includes/common.php';

$name= mysqli_real_escape_string($con, $_POST['name']);

$email = mysqli_real_escape_string($con, $_POST['email']);
$regex_email = "/[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";

$password = mysqli_real_escape_string($con, $_POST['pwd']);

$phone= mysqli_real_escape_string($con, $_POST['phone']);

$city= mysqli_real_escape_string($con, $_POST['city']);
$address= mysqli_real_escape_string($con, $_POST['address']);

$query="SELECT * FROM users WHERE email='$email'";
$result= mysqli_query($con, $query) or die(mysqli_error($con));

if((mysqli_num_rows($result))!=0){
    header('location: signup.php?email_error= Email already exists!');
}else if(!preg_match($regex_email, $email)){
    header('location: signup.php?email_error= Enter a valid email address');
}else if(strlen($password)<6){
    header('location: signup.php?pass_error= Enter a valid password');
}else if(strlen($phone)<10){
    header('location: signup.php?phone_error= Enter a valid phone number');
}else{

$password= md5($password);
$query="INSERT INTO users(name, email, password, contact, city, address) VALUES('$name','$email','$password','$phone','$city','$address')";
$result= mysqli_query($con, $query) or die(mysqli_error($con));
$user_id = mysqli_insert_id($id);
$_SESSION['email'] = $email;
$_SESSION['user_id'] = $user_id;
header('location: home.php');
}
