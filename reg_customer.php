<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/reg_customer.css">
    <title>Document</title>
</head>

<body>
    <div class="title">
        <div class="logo">
            <h1>Welcome to Harmonie Beauty</h1>
        </div>
    </div>
    <form action="regist_process.php" method="post">
        <div class="container">

            <div class="content left">
                <div class="forms">
                    <div class="form">
                        <label for="name">Name</label><br>
                        <input class="input" type="text" name="name" placeholder="Enter your name" required>
                    </div>
                    <div class="form">
                        <label for="email">Email</label><br>
                        <input class="input" type="email" name="email" placeholder="Enter your email" required>
                    </div>
                    <div class="form">
                        <label for="phone">Phone Number</label><br>
                        <input class="input" type="text" name="phone" placeholder="Enter your phone number" required>
                    </div>
                    <div class="form">
                        <label for="address">Address</label><br>
                        <input class="input INaddress" type="text" name="address" placeholder="Enter your address" required>
                    </div>
                </div>
            </div>

            <div class="content right">
                <div class="forms">
                    <div class="form">
                        <label for="password">Password</label><br>
                        <input class="input" type="password" name="password" placeholder="Enter your password" required>
                    </div>
                    <div class="form">
                        <label for="re-password">Re-enter password</label><br>
                        <input class="input" type="password" name="re_password" placeholder="Re-enter your password" required>
                    </div>
                    <div class="form sBtn">
                        <input class="submit" type="submit" value="Sign Up">
                    </div>
                </div>
            </div>
        </div>
    </form>
    <?php
    if (isset($_GET['message'])) {
        if ($_GET['message'] == "no_match") {
            echo "Please make sure that the password confirmation is correct.";
        } else if ($_GET['message'] == "email_exist") {
            echo "Email already exists.";
        }
    }
    ?>
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