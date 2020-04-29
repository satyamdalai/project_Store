<!--
Internshala Web Development Training
Final Project
by Satyam Dalai
settings_script.php file
-->
<?php
require 'includes/common.php';
if(!isset($_SESSION['email'])){
    header('location: index.php?logon= Please Login to Continue!');
}

$email=$_SESSION['email'];

$opwd= mysqli_real_escape_string($con, $_POST['opwd']);
$opwd= md5($opwd);

$npwd= mysqli_real_escape_string($con, $_POST['npwd']);
$npwd= md5($npwd);

$rnpwd= mysqli_real_escape_string($con, $_POST['rnpwd']);
$rnpwd= md5($rnpwd);

$query="SELECT email,password FROM users WHERE email='$email'";
$result= mysqli_query($con, $query) or die(mysqli_error($con));
$row= mysqli_fetch_array($result);

$pass=$row['password'];

if($npwd!=$rnpwd){
    header('location: settings.php?error=The two passwords does not match!');
}
else{
    if($opwd==$pass){
        $query="UPDATE users SET password='$npwd' WHERE email='$email'";
        $res= mysqli_query($con, $query) or die(mysqli_error($con));
        header('location: settings.php?changed=Password Updated');
    } else{
        header('location: settings.php?error=Wrong Old Password.');
    }
}
?>
