<?php
include 'connection.php';
session_start();
if (empty($_SESSION['email'])) {
    header('location:index.php?message=not_yet_login');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/landing.css">
    <title>Landing</title>
</head>

<body>
    <div class="container">
        <section class="page first">
            <div class="nav-container">
                <h1 class="logo">Harmonie Beauty</h1>
                <div class="mid">
                    <nav class="navbar">
                        <ul>
                            <li><a href="landing.php">Home</a></li>
                            <li><a href="shop_satu.php">Shop</a></li>
                            <li><a href="#">Setting</a></li>
                            <a class="log" href="logout.php"><button>Logout</button></a>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="content">
                <h1>ALL FOR YOUR BODY</h1>
                <p>Harmonie beauty is the place to help you become the true you. Unleash your inner beauty with our products and services such as spa, flower bath, and special massages</p>
                <button class="more button1"><a href="shop_satu.php">Visit our shop</a><i class="fa fa-light fa-arrow-right"></i></button>
            </div>
        </section>
        <section class="page second">
            <div class="second-content">
                <h1>COMING SOON PRODUCTS</h1>
                <p>As the time goes on and more people with their wide variety of skin necessitties keep coming up on top of
                    the surface, we always try to find new innovation regarding our products. Our new products will be launched for the 2023 New Year.
                </p>
            </div>
            <div class="cards">
                <div class="card 1">
                    <img src="./img/PRODUCT-5.png" alt="pot">
                    <h3>Luna Serum</h3>
                    <p>Rp 150,000</p>
                </div>
                <div class="card 2">
                    <img src="./img/PRODUCT-6.png" alt="lamp">
                    <h3>Earth Moisturizer</h3>
                    <p>Rp 150,000</p>
                </div>
                <div class="card 3">
                    <img src="./img/PRODUCT-7.png" alt="chaire">
                    <h3>N.04 Face Oil</h3>
                    <p>Rp 150,000</p>
                </div>
            </div>
        </section>
        <section class="page third">
            <div class="description">
                <p>Besides our products, we also offer you our services which is available at our places across the globe. All information regarding our services would be shown below.</p>
                <button class="more button3"><a href="#">View more</a><i class="fa fa-light fa-arrow-right icon3"></i></button>
            </div>
            <img src="./img/BG-Page3.png" alt="Room">
        </section>
        <section class="page service fourth">
            <div class="service-container">
                <div class="service-desc">
                    <h1>FULL BODY TREATMENT</h1>
                    <p>Body treatments will clear out harmful toxins in your body, allowing you to function better and boost your immune system. Improves Skin: With a body scrub, all the dead skin cells will be removed leaving your skin healthy and glowing. This can increase your self confidence tremendously.
                    </p>
                    <button class="more servicebtn"><a href="#">View more</a><i class="fa fa-light fa-arrow-right"></i></button>
                </div>
                <div class="service-pict">
                    <img src="./img/SERVICE-first.jpg" alt="service1">
                </div>
            </div>
        </section>
        <section class="page service fifth">
            <div class="service-container">
                <div class="service-pict">
                    <img src="./img/SERVICE-second.jpg" alt="service2">
                </div>
                <div class="service-desc">
                    <h1>FACE MASSAGE</h1>
                    <p>face massage can be used to help encourage relaxation physically and mentally. A face massage aims to increase relaxation by relieving muscle tightness and increasing the levels of positive hormones within the body.
                    </p>
                    <button class="more servicebtn"><a href="#">View more</a><i class="fa fa-light fa-arrow-right"></i></button>
                </div>
            </div>
        </section>
        <section class="page service sixth">
            <div class="service-container">
                <div class="service-desc">
                    <h1>FLOWER BATH</h1>
                    <p>Flower baths are usually paired with a traditional Balinese massage and scrub so that you can get the best of both worlds. Your entire body will be rubbed down with essential oils and/or natural scrubs before you move onto the flower bath.
                    </p>
                    <button class="more servicebtn"><a href="#">View more</a><i class="fa fa-light fa-arrow-right"></i></button>
                </div>
                <div class="service-pict">
                    <img src="./img/SERVICE-third.jpg" alt="service3">
                </div>
            </div>
        </section>
        <section class="page seventh">
            <div class="seventh-container">
                <h1>book now for an extra promo!</h1>
                <button class="more button7"><a href="#">View more</a><i class="fa fa-light fa-arrow-right"></i></button>
            </div>
            <div class="slides">
                <div class="slide one">
                    <span class="slide-title">
                        <i class="fa-regular fa-clock"></i>
                        <p>Shop online</p>
                    </span>
                    <span class="slide-desc">
                        <p>Shop online at anytime anywhere. Our admins are also ready to get contacted by you 24/7 if you need additional information.</p>
                    </span>
                </div>
                <div class="slide two">
                    <span class="slide-title">
                        <i class="fa fa-regular fa-bag-shopping"></i>
                        <p>Free shipping</p>
                    </span>
                    <span class="slide-desc">
                        <p>Free shipping from all across the globe. Some places might not be available for free shipping. Please read the terms and conditions for more information.</p>
                    </span>
                </div>
                <div class="slide three">
                    <span class="slide-title">
                        <i class="fa-regular fa-credit-card"></i>
                        <p>Return policy</p>
                    </span>
                    <span class="slide-desc">
                        <p>Our products are equipped with return policies. Please contact our admin for more information regarding our return policies and please read our terms and conditions.</p>
                    </span>
                </div>
                <div class="slide four">
                    <span class="slide-title">
                        <i class="fa-regular fa-coin-vertical"></i>
                        <p>PAYMENT</p>
                    </span>
                    <span class="slide-desc">
                        <p>Wide variety of payments are available for customers in this website. Debit and credit cards are available for customers. Please read our guidelines and terms and conditions for more details
                        </p>
                    </span>
                </div>
            </div>
        </section>
        <section class="page last">
            <div class="footer">
                <div class="logo">
                    <h2>Soudemy</h2>
                </div>
                <div class="lists">
                    <div class="list about">
                        <h3>About Us</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis dolorem tenetur, ex nisi
                            dolorum
                            consequuntur ad
                        </p>
                    </div>
                    <div class="list useful">
                        <h3>Useful</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis dolorem tenetur, ex nisi
                            dolorum
                            consequuntur ad
                        </p>
                    </div>
                    <div class="list download">
                        <h3>Download</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis dolorem tenetur, ex nisi
                            dolorum
                            consequuntur ad
                        </p>
                    </div>
                    <div class="list call">
                        <h3>Call Center</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis dolorem tenetur, ex nisi
                            dolorum
                            consequuntur ad
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="https://kit.fontawesome.com/2ef3e13ff1.js" rel="stylesheet"></script>
    <script src="app.js"></script>
</body>

</html>