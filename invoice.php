<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/invoice.css">
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
                    Order date : 17th Dec 2001
                </p>
                <p class="orderID">
                    Order ID : #696969
                </p>
            </div>
            <div class="content">
                <p class="username">Hello Username</p>
                <h2 class="message"> Thank You for Ordering!</h2>
                <!-- pesan sukses order-->
                <p class="address">Kel. Pingit Kec. Pringsurat Kab. Temanggung</p>

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
                        <tr>
                            <td>
                                <div class="image">
                                    <img src="" alt="">
                                </div>
                            </td>
                            <td>
                                <p>Kadarius Serum</p>
                            </td>
                            <td>
                                <p>x3</p>
                            </td>
                            <td>
                                <p>cepeklimpul</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="image">
                                    <img src="" alt="">
                                </div>
                            </td>
                            <td>
                                <p>Kadarius Serum</p>
                            </td>
                            <td>
                                <p>x3</p>
                            </td>
                            <td>
                                <p>cepeklimpul</p>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td>
                                <p class="total">Total Price</p>
                            </td>
                            <td></td>
                            <td></td>
                            <td>
                                <p>cepek ceng</p>
                            </td>
                        </tr>
                    </tfoot>
                </table>

                <div class="action">
                    <a class="Buy" href="invoice.php"><button>Buy Now</button></a>
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