<!--
Internshala Web Development Training
Final Project
by Satyam Dalai
common.php file
-->
<?php
$con = mysqli_connect("localhost","root","","ecommobile","3308") or die(mysqli_error($con));
if(!isset($_SESSION)){
      session_start();
}
?>

