<!--
Internshala Web Development Training
Final Project
by Satyam Dalai
cart-remove.php file
-->
<?php
require 'includes/common.php';
$item_id = $_GET['id'];
$user_id = $_SESSION['user_id'];

$query="DELETE FROM users_items WHERE item_id='$item_id' AND user_id='$user_id'";
$result= mysqli_query($con, $query);
header('location: cart.php');
?>
