<!--
Internshala Web Development Training
Final Project
by Satyam Dalai
check-if-added.php file
-->
<?php

function check_if_added_to_cart($item_id)
{
    require 'common.php';
    $user_id=$_SESSION['user_id'];
    $query="SELECT * FROM users_items WHERE item_id='$item_id' AND user_id ='$user_id' and status='Added to cart';";
    $result= mysqli_query($con, $query);
    
    if(mysqli_num_rows($result)>=1){
        return 1;
    }
    else{
        return 0;
    }
}
?>

