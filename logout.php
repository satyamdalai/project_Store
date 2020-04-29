<!--
Internshala Web Development Training
Final Project
by Satyam Dalai
logout.php file
-->
<?php
require 'includes/common.php';
if(!isset($_SESSION['email'])){
    header('location: index.php');
}
session_destroy();
header('location: index.php');


?>