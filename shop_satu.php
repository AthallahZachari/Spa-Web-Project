<?php
include 'connection.php';
session_start();
if (empty($_SESSION['email'])) {
    header('location:index.php?message=not_yet_login');
}
if (isset($_GET['category'])) {
    $id = $_GET['category'];
    $query = "SELECT * FROM item where category_code = $id ORDER BY category_code ASC";
} else {
    $query = "SELECT * FROM item";
}
$category_list = mysqli_query($connect, "SELECT * FROM category");
$query_result = mysqli_query($connect, $query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/shop_satu.css">
    <title>Document</title>
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
                <li><a href="#">Setting</a></li>
                <a class="log" href="logout.php"><button>Logout</button></a>
            </ul>
        </div>
    </div>

    <div class="legend">
        <p>Showing result 1 - 9</p>
        <p class="sort">Sort by Popular</p>
    </div>

    <div class="container">
        <div class="content">
            <div class="product">
                <!--while nya disini nggihh -->
                <?php
                while ($row = mysqli_fetch_object($query_result)) {
                ?>
                    <div class="card">
                        <div class="image">
                            <?php
                            $image = mysqli_fetch_object(mysqli_query($connect, "SELECT * FROM item INNER JOIN images on item.image_id = images.id WHERE item.item_id=$row->item_id"));
                            ?>
                            <img src="uploads/<?= $image->image_url ?>" alt="">
                        </div>
                        <div class="caption">
                            <p class="name"><?php echo $row->item_name; ?></p>
                            <p class="price"><?php echo "Rp " . $row->item_price; ?></p>
                            <a class="detail" href="shop_dua.php?id=<?= $row->item_id ?>"><button type="submit">Details</button></a>
                        </div>
                        <!--produk disini-->
                    </div>
                <?php
                }
                mysqli_free_result($query_result);


                ?>
            </div>
        </div>
        <div class="dashboard">
            <div class="categories">
                <div class="category">
                    <h4>Categories</h4>
                    <?php
                    while ($row = mysqli_fetch_object($category_list)) {
                    ?>
                        <a style="text-decoration: none" href="shop_satu.php?category=<?= $row->ID_category ?>">
                            <p><?= $row->category_name ?></p>
                        </a>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="sliders">
        <div class="slide-box">
            <div class="slider">
                <p>1</p>
                <p>2</p>
                <p>3</p>
                <p>4</p>
                <p>5</p>
                <p>6</p>
                <p>7</p>
            </div>
            <div class="option">
                <p>View all</p>
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
    <script src="https://kit.fontawesome.com/2ef3e13ff1.js" rel="stylesheet"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</body>

</html>