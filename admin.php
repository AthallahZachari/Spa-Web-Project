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
                    <a href="#">
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
                <h1 class="title">Order</h1>
                <p class="counter">5.000</p>
                <p class="text">Description</p>
            </div>
            <div class="card">
                <i></i>
                <h1 class="title">Revenue</h1>
                <p class="counter">5.000</p>
                <p class="text">Description</p>
            </div>
            <div class="card">
                <i></i>
                <h1 class="title">Customers</h1>
                <p class="counter">5.000</p>
                <p class="text">Description</p>
            </div>
            <div class="card">
                <i></i>
                <h1 class="title">Customers</h1>
                <p class="counter">5.000</p>
                <p class="text">Description</p>
            </div>
        </div>
        <div class="tables">
            <div class="table">
                <div class="types">
                    <h2>Products</h2>
                </div>
                <div class="icon">
                    <img src="img/PRODUCT-7.png" alt="">
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
                    <img src="img/PRODUCT-7.png" alt="">
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
                    <img src="img/PRODUCT-7.png" alt="">
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