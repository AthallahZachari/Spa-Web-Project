<?php
include 'connection.php';
session_start();
if (empty($_SESSION['email'])) {
    header('location:index.php?message=not_yet_login');
}
$user_id = $_SESSION['id'];
class Checkout
{
    public $itemId;
    public $itemAmount;
    public $itemName;
    public $itemPrice = 0;
    public $itemImage;
}
$total_price = 0;
$date = date('Y-m-d');
$user_object = mysqli_fetch_object(mysqli_query($connect, "SELECT * FROM user WHERE User_number=$user_id"));
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/invoice.css">
    <title>Checkout</title>
</head>

<body>
    <div class="top-bar">
        <div class="logo">
            <h1>Harmonie Beauty</h1>
        </div>
        <div class="navs">
            <ul class="nav">
                <li><a href="landing.php">Home</a></li>
                <li><a href="shop_satu.php">Shop</a></li>
                <li><a href="cart.php">Cart</a></li>
                <a href="logout.php"><button class="logout">Logout</button></a>
            </ul>
        </div>
    </div>

    <div class="legend">
        <p>Showing your invoice</p>
    </div>

    <div class="container">
        <div class="box">
            <div class="header">
                <p class="date">
                    Order date : <?= $date ?>
                </p>
                <p class="orderID">
                    <?php
                    if (isset($_GET['order_id'])) {
                        $order_id = $_GET['order_id'];
                    ?>Order ID : <?= $order_id ?>
                <?php
                    }
                ?>
                </p>
            </div>
            <div class="content">
                <p class="username">Hello, <?= $user_object->Fullname ?></p>
                <h2 class="message">
                    <?php
                    if (isset($_GET['order_id'])) {
                        echo "Thank You for Ordering";
                    } ?>
                </h2>
                <!-- pesan sukses order-->
                <p class="address"><?= $user_object->Addr ?></p>

                <div class="payment">
                    <label for="payment">Payment method </label>
                </div>

                <table class="content-table">
                    <thead>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($_SESSION['checkout'] as $checkout_item) {
                            $total_price += $checkout_item->itemPrice;
                        ?>
                            <tr>
                                <td>
                                    <div class="image">
                                        <img src="uploads/<?= ($checkout_item->itemImage); ?>" alt="gmbr bg" />
                                    </div>
                                </td>
                                <td>
                                    <p><?= strtoupper($checkout_item->itemName) ?></p>
                                </td>
                                <td>
                                    <p>x<?= $checkout_item->itemAmount ?></p>
                                </td>
                                <td>
                                    <p>IDR <?= $checkout_item->itemPrice ?></p>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td>
                                <p class="total">Total Price</p>
                            </td>
                            <td></td>
                            <td></td>
                            <td>
                                <p><?= $total_price ?></p>
                            </td>
                        </tr>
                    </tfoot>
                </table>

                <div class="action">
                    <?php
                    if (isset($_GET['order_id'])) {?>
                        <a class="Buy" href="invoice_process.php"><button disabled="disabled">Order Placed</button></a>
                        <?php
                    } else {?>
                        <a class="Buy" href="invoice_process.php"><button>Buy Now</button></a>
                        <?php
                    }?>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="logo">
            <h2>Soudemy</h2>
        </div>
        <div class="lists">
            <div class="list about">
                <h3>About Us</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis dolorem tenetur, ex nisi dolorum
                    consequuntur ad
                </p>
            </div>
            <div class="list useful">
                <h3>Useful</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis dolorem tenetur, ex nisi dolorum
                    consequuntur ad
                </p>
            </div>
            <div class="list download">
                <h3>Download</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis dolorem tenetur, ex nisi dolorum
                    consequuntur ad
                </p>
            </div>
            <div class="list call">
                <h3>Call Center</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis dolorem tenetur, ex nisi dolorum
                    consequuntur ad
                </p>
            </div>
        </div>
    </div>
</body>

</html>