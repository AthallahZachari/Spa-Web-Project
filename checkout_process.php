<?php
session_start();
class Checkout
{
    public $itemId;
    public $itemAmount;
    public $itemName;
    public $itemPrice = 0;
    public $itemImage;  
}
include 'connection.php';
$index = 0;
foreach ($_POST['cartIndex'] as $cartIndex){
    $_SESSION['checkout'][] = $_SESSION['cart'][$cartIndex];
}
header('location:invoice.php');