<?php
include 'connection.php';
session_start();
if(empty($_SESSION['email'])){
    header('location:index.php?message=not_yet_login');
}
$order_num=mysqli_num_rows(mysqli_query($connect, "SELECT * FROM trans"));
$revenue_total = (mysqli_fetch_object(mysqli_query($connect, "SELECT sum(total_price) as revenue from trans")))->revenue;
$cust_total = mysqli_num_rows(mysqli_query($connect, "SELECT * FROM user WHERE types='user'"));
$item_total = mysqli_num_rows(mysqli_query($connect, "SELECT * FROM item"));
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/admin.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
</head>

<body>
    <div class="sidemenu">
        <div class="field">
            <div class="logo">
                <h1>Harmonie</h1>
            </div>
            <div class="menu">
                <div class="menu-list">
                    <a href="admin.php">
                        <i></i>
                        <span class="text">Home</span>
                    </a>
                </div>
                <div class="menu-list">
                    <a href="admin_main.php">
                        <i></i>
                        <span class="text">Setting</span>
                    </a>
                </div>
                <div class="menu-list">
                    <a href="logout.php">
                        <i></i>
                        <span class="text">Logout</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="main">
        <div class="cards">
            <div class="card">
                <i></i>
                <h1 class="title">Customers</h1>
                <p class="counter"><?=$cust_total?></p>
                <p class="text">have been registered</p>
            </div>
            <div class="card">
                <i></i>
                <h1 class="title">Orders</h1>
                <p class="counter"><?=$order_num?></p>
                <p class="text">have been placed</p>
            </div>
            <div class="card">
                <i></i>
                <h1 class="title">Products</h1>
                <p class="counter"><?=$item_total?></p>
                <p class="text">are ready for sale</p>
            </div>
            <div class="card">
                <i></i>
                <h1 class="title">Revenue</h1>
                <p class="counter">IDR <?=$revenue_total;?></p>
                <p class="text">has been earned</p>
            </div>
        </div>
        <div class="tables">
            <div class="table">
                <div class="types">
                    <h2>Products</h2>
                </div>
                <div class="icon">
                    <img src="img/PRODUCTS-FACE.jpg" alt="">
                </div>
                <div class="action">
                    <a href="admin_main.php">
                        <span>View</span>
                    </a>
                </div>
            </div>
            <div class="table">
                <div class="types">
                    <h2>Order</h2>
                </div>
                <div class="icon">
                    <img src="img/ORDER-FACE.jpg" alt="">
                </div>
                <div class="action">
                    <a class="customize" href="order.php">
                        <span>View</span>
                    </a>
                </div>
            </div>
            <div class="table">
                <div class="types">
                    <h2>Customers</h2>
                </div>
                <div class="icon">
                    <img src="img/CUST-FACE.jpg" alt="">
                </div>
                <div class="action">
                    <a class="customize" href="customer_view.php">
                        <span>View</span>
                    </a>
                </div>
            </div>
            <div class="latest">
                <table></table>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</body>

</html>