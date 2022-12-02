<?php
include 'connection.php';
session_start();
if(empty($_SESSION['email'])){
    header('location:index.php?message=not_yet_login');
}
$item_id = $_GET['id'];
$item_join = mysqli_query($connect, "SELECT * FROM item INNER JOIN images ON images.id = item.image_id where item.item_id = $item_id");
$category_join = mysqli_query($connect, "SELECT * FROM category INNER JOIN item ON item.category_code = category.ID_category");
$item_object = mysqli_fetch_object($item_join);
$category_object = mysqli_fetch_object($category_join);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/shop_dua.css">
    <title>Document</title>
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
                <li><a href="#">Setting</a></li>
                <a class="log" href="logout.php"><button>Logout</button></a>
            </ul>
        </div>
    </div>

    <div class="legend">
        <p>Shop 2</p>
    </div>

    <div class="container">
        <div class="display info">
            <div class="pict">
                <div class="image">
                    <img src="uploads/<?= $item_object->image_url ?>" alt="product image">
                     </div>
                </div>
            <div class="description">
                <div class="title">
                    <h4><?=$item_object->item_name?></h4>
                    <p class="price">Rp <?=$item_object->item_price?></p>
                    <div class="option">
                        <div class="wrapper"><!--
                            <span class="minus">-</span>
                            <span class="num">1</span>
                            <span class="plus">+</span>-->
                            <form action="cart_process.php?itemId=<?=$item_id?>" method="post" id="cart">
                                <input class="count" type="number" value="1" name="count" min="1" max="9">
                            </form>
                        </div>
                        <input class="add" type="submit" type="button" class="add" value="Add to Cart" form="cart">
                        <!--<a href=""><button class="add">Add to Cart</button></a>-->
                        <a href=""><button class="order">Order Now</button></a>
                    </div>
                    <div class="stock">
                        <p>Category: <?=$category_object->category_name; ?></p>
                    </div>
                    <p class="desc" >Description</p>
                    <p class="price tag"><?=$item_object->item_desc?></p>
                </div>
                <div class="etc">
                    <p class="etc-desc">Additional Information</p>
                    <p class="etc-text"><?=$item_object->item_info?>
                    </p>
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
    <p id="output1"></p>
    <script src="shop.js"></script>
    <script src="https://kit.fontawesome.com/2ef3e13ff1.js" rel="stylesheet"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</body>

</html>