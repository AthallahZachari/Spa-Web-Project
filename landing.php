<?php
include 'connection.php';
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/landing.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <section class="page first">
            <div class="nav-container">
                <h1 class="logo">Harmonie Spa</h1>
                <div class="mid">
                    <nav class="navbar">
                        <ul>
                            <li><a href="landing.php">Home</a></li>
                            <li><a href="shop_satu.php">Shop</a></li>
                            <li><a href="#promo">Promo</a></li>
                            <li><a href="#testimonials">Testimonials</a></li>
                            <li><a href="./logout.php">Logout</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="kanan">
                    <i class="fa fa-light fa-magnifying-glass"></i>
                    <i class="fa fa-light fa-bag-shopping"></i>
                    <i class="fa fa-thin fa-bars"></i>
                </div>
            </div>
            <div class="content">
                <h1>ALL FOR YOUR BODY</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip
                    ex ea commodo consequat.</p>
                <button class="more button1"><a href="#">View more</a><i
                        class="fa fa-light fa-arrow-right"></i></button>
            </div>
        </section>
        <section class="page second">
            <div class="second-content">
                <h1>PRODUCTS OF THE WEEK</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip</p>
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
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Soluta at adipisci doloremque, aspernatur
                    ut fugiat veniam tempore quos optio iusto quo molestias dicta, repudiandae ipsam quibusdam. Esse
                    error similique quisquam.</p>
                <button class="more button3"><a href="#">View more</a><i
                        class="fa fa-light fa-arrow-right icon3"></i></button>
            </div>
            <img src="./img/BG-Page3.png" alt="Room">
        </section>
        <section class="page service fourth">
            <div class="service-container">
                <div class="service-desc">
                    <h1>FULL BODY TREATMENT</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius quo dolore temporibus, facilis
                        deserunt deleniti praesentium soluta dolorum tempore molestias. Aut eum eligendi odio rem,
                        distinctio nobis magni dolorem mollitia!
                    </p>
                    <button class="more servicebtn"><a href="#">View more</a><i
                            class="fa fa-light fa-arrow-right"></i></button>
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
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius quo dolore temporibus, facilis
                        deserunt deleniti praesentium soluta dolorum tempore molestias. Aut eum eligendi odio rem,
                        distinctio nobis magni dolorem mollitia!
                    </p>
                    <button class="more servicebtn"><a href="#">View more</a><i
                            class="fa fa-light fa-arrow-right"></i></button>
                </div>
            </div>
        </section>
        <section class="page service sixth">
            <div class="service-container">
                <div class="service-desc">
                    <h1>FLOWER BATH</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius quo dolore temporibus, facilis
                        deserunt deleniti praesentium soluta dolorum tempore molestias. Aut eum eligendi odio rem,
                        distinctio nobis magni dolorem mollitia!
                    </p>
                    <button class="more servicebtn"><a href="#">View more</a><i
                            class="fa fa-light fa-arrow-right"></i></button>
                </div>
                <div class="service-pict">
                    <img src="./img/SERVICE-third.jpg" alt="service3">
                </div>
            </div>
        </section>
        <section class="page seventh">
            <div class="seventh-container">
                <h1>book now for an extra promo!</h1>
                <button class="more button7"><a href="#">View more</a><i
                        class="fa fa-light fa-arrow-right"></i></button>
            </div>
            <div class="slides">
                <div class="slide one">
                    <span class="slide-title">
                        <i class="fa-regular fa-clock"></i>
                        <p>Shop online</p>
                    </span>
                    <span class="slide-desc">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptate nesciunt sunt deserunt
                            odio accusamus consequatur exercitationem quo nam reiciendis</p>
                    </span>
                </div>
                <div class="slide two">
                    <span class="slide-title">
                        <i class="fa fa-regular fa-bag-shopping"></i>
                        <p>Free shipping</p>
                    </span>
                    <span class="slide-desc">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptate nesciunt sunt deserunt
                            odio accusamus consequatur exercitationem quo nam reiciendis</p>
                    </span>
                </div>
                <div class="slide three">
                    <span class="slide-title">
                        <i class="fa-regular fa-credit-card"></i>
                        <p>Return policy</p>
                    </span>
                    <span class="slide-desc">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptate nesciunt sunt deserunt
                            odio accusamus consequatur exercitationem quo nam reiciendis</p>
                    </span>
                </div>
                <div class="slide four">
                    <span class="slide-title">
                        <i class="fa-regular fa-coin-vertical"></i>
                        <p>PAYMENT</p>
                    </span>
                    <span class="slide-desc">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptate nesciunt sunt deserunt
                            odio accusamus consequatur exercitationem quo nam reiciendis</p>
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