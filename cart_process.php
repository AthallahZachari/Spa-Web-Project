<?php
session_start();
class Checkout
{
    public $itemId;
    public $itemAmount;
    public $itemName;
    public $itemPrice=0;
    public $itemImage;
}
include 'connection.php';
$count = $_POST['count'];
$itemId = $_GET['itemId'];
$result = mysqli_fetch_object(mysqli_query($connect, "SELECT * FROM item inner join images on item.image_id=images.id WHERE item_id = $itemId"));
$cart = new Checkout();
$cart->itemId = $_GET['itemId'];
$cart->itemAmount = $count;
$cart->itemName = $result->item_name;
$cart->itemPrice = $result->item_price;
$cart->itemImage  = $result->image_url;
$index = 0;
$check = 0;
while ($index < sizeof($_SESSION['cart'])) {
    if ($_SESSION['cart'][$index]->itemId == $cart->itemId) {
        $_SESSION['cart'][$index]->itemAmount += $cart->itemAmount;
        $_SESSION['cart'][$index]->itemPrice = $_SESSION['cart'][$index]->itemAmount * $result->item_price;
        $check = 1;
        header('location:cart.php');
    }
    $index++;
}
if ($check == 0) {
    array_push($_SESSION['cart'], $cart);
    header('location:cart.php?check=0');
}
