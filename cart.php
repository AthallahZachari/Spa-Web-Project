<?php
include 'connection.php';
session_start();
if(empty($_SESSION['email'])){
    header('location:index.php?message=not_yet_login');
}
class Checkout
{
    public $itemId;
    public $itemAmount;
    public $itemName;
    public $itemPrice = 0;
    public $itemImage;
}
$_SESSION['checkout'] = array();
$i = 0;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=q, initial-scale=1.0">
    <link rel="stylesheet" href="style/cart.css">
    <title>Cart</title>
</head>

<body>
    <div class="top-bar">
        <div class="logo">
            <h1>Harmonie Spa</h1>
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
        <p>Showing your cart</p>
    </div>

    <div class="container">
        <div class="box">
            <form action="checkout_process.php" method="post" id="checkout">
                <table class="content-table">
                    <tbody>
                        <?php
                        while ($i < sizeof($_SESSION['cart'])) { ?>

                            <tr>
                                <td>
                                    <input type="checkbox" name="cartIndex[<?= $i ?>]" value=<?= $i ?> class="checkbox">
                                </td>
                                <td>
                                    <div class="image">
                                        <img src="uploads/<?= ($_SESSION['cart'][$i]->itemImage); ?>" alt="gmbr bg" />
                                    </div>
                                </td>
                                <td>
                                    <label for="item"><?= strtoupper($_SESSION['cart'][$i]->itemName) ?></label>
                                </td>
                                <td>
                                    <label for="ammount">x<?= $_SESSION['cart'][$i]->itemAmount ?></label>
                                </td>
                                <td>
                                    <label for="price">IDR <?= $_SESSION['cart'][$i]->itemPrice ?></label>
                                </td>
                            </tr>
                        <?php
                            $i++;
                        }
                        ?>
                    </tbody>
                </table>
            </form>
            <div class="checkout">
                <input id="checkout" type="submit" value="Checkout" form="checkout">
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