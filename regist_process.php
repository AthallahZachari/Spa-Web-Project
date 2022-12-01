<?php
include 'connection.php';
session_start();

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$password = $_POST['password'];
$re_password= $_POST['re_password'];

$sameEmail= mysqli_query($connect, "SELECT * FROM user WHERE email = '$email'");
$check = mysqli_num_rows($sameEmail);

if ($password!=$re_password) {
    header("Location:reg_customer.php?message=no_match");
} else if ($check) {
    header("Location:reg_customer.php?message=email_exist");
} else {
    $query = mysqli_query($connect, "INSERT INTO user (fullname, phone_numb, email, addr, pass, types) values ('$name', '$phone', '$email', '$address', '$password', 'user')");
    header("Location:index.php?message=regist_success");
}

?>