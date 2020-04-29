<!--
Internshala Web Development Training
Final Project
by Satyam Dalai
login_submit.php file
-->
<?php
include 'includes/common.php';
if(isset($_SESSION['email'])){
    header('location=home.php');
}

$email= mysqli_real_escape_string($con, $_POST['email']);
$regex_email = "/[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
$pwd= mysqli_real_escape_string($con, $_POST['pwd']);

if(!preg_match($regex_email, $email) || strlen($pwd)<6){
    header('location:login.php?error= Enter a valid email or password');
}else{
$select_query="SELECT id,email,password FROM users WHERE email='$email' ;";
$select_query_result= mysqli_query($con, $select_query) or die(mysqli_error($con));
$num=mysqli_num_rows($select_query_result);
$row= mysqli_fetch_array($select_query_result);
$pass_value=$row['password'];
$password= md5($pwd);
    
if($num==0)
    {
    header('location:login.php?error=User not Registered');
    }
else{
    if($pass_value==$password)
    {
        $_SESSION['email'] = $row['email'];
        $_SESSION['user_id'] = $row['id'];
        header('location:home.php');
    }

 else {
     header('location:login.php?error=Incorrect Password!');
}
}
}
?>
