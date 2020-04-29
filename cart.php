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
cart.php file
-->
<html>
    <head>
        <title>Cart | E-Com Mobiles</title>
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
        <div class="container-fluid" id="content">
            <div class="row decor_bg">
                <div class="col-md-6 col-md-offset-3">
                    <table class="table table-striped">
                        <?php
                        $sum=0;
                        $user_id=$_SESSION['user_id'];
                        $status="Added to Cart";
                        $query="SELECT items.price AS price, items.id, items.name AS name FROM users_items INNER JOIN items ON users_items.item_id=items.id AND users_items.user_id='$user_id' AND status='$status'";
                        $result= mysqli_query($con, $query) or die(mysqli_error($con));
                        if(mysqli_num_rows($result)>=1){
                        ?>
                        <thead>
                            <tr>
                                <th>Item Number</th>
                                <th>Item Name</th>
                                <th>Price</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $ids="";
                            while($row= mysqli_fetch_array($result)){
                                $sum+=$row['price']; 
                                $ids .= $row["id"] . ",";
                                echo    "<tr>
                                            <td>" ."#". $row['id'] . "</td>
                                            <td>" . $row['name'] . "</td>
                                            <td>Rs " . $row['price'] . "</td>
                                            <td><a href='cart-remove.php?id={$row['id']}' class='remove_item_link'> X </a></td>
                                        </tr>";
                            }   $ids= rtrim($ids, ",");                              
                                echo    "<tr>
                                            <td></td>
                                            <td>Total</td>
                                            <td>Rs ".$sum. "</td>
                                            <td><a href='success.php?itemsid={$ids}' class='btn btn-primary'>Confirm Order</a></td>
                                        </tr>";
                            ?>
                        </tbody>
                        <?php } else{
                        echo "<center><h2>Add items to the cart first!</h2></center>";
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
            <?php
            include'./includes/footer.php';
            ?>
    </body>
</html>
