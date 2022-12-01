<?php
include 'connection.php';
session_start();
$email = $_POST['email'];
$password = $_POST['password'];

$data = mysqli_query($connect, "SELECT * FROM user where (email = '$email') and pass = '$password'") or die(mysqli_error($connect));
$type = mysqli_fetch_object($data);

$check = mysqli_num_rows($data);
if ($check > 0) {
    session_start();
    $_SESSION['email'] = $email;
    $_SESSION['status'] = "login";
    $_SESSION['cart'] = array();
    $_SESSION['id'] = $type->User_number;
    if ($type->types=='user') {
        header("Location:landing.php");
    } 
    else{
        header("Location:admin.php");
    }
} else {
    header("Location:index.php?message=failed");
}
