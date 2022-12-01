<?php
include 'connection.php';
session_start();
class Checkout
{
    public $itemId;
    public $itemAmount;
    public $itemName;
    public $itemPrice = 0;
    public $itemImage;
}
$order_id = 0;
$date = date('Y-m-d');
$user_no = $_SESSION['id'];

foreach ($_SESSION['checkout'] as $checkout_item) {
    $order_id+=$checkout_item->itemId;
    $input_trans=mysqli_query($connect,"INSERT INTO trans (item_code, user_no, date_transaction, total_price) VALUES ($checkout_item->itemId, $user_no, '$date', $checkout_item->itemPrice)");
}

header("Location:invoice.php?order_id=$order_id");