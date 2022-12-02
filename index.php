<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/index.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
</head>

<body>
    <div class="page background">
        <div class="BG-logo">
            <h1>Harmonie Beauty</h1>
            <h2>Be kind to your body</h2>
        </div>
        <div class="links">
            <ul class="link">
                <li><a href="gotoIG-HarmonieSpa"><i class="fa-brands fa-instagram"></i> Harmonie.Spa</a></li>
                <li><a href="gotoAct-HarmonieSpa">Our Activities <i class="fa fa-light fa-arrow-right"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="page input">
        <form class="field Input" action="check_login.php" method="post">
            <div class="logo">
                <h1>Welcome <br> Back</h1>
            </div><br><br>
            <label for="email">Email</label>
            <input class="input email" type="email" name="email" placeholder="Enter your email">
            <br>
            <label for="password">Password</label>
            <input class="input password" type="password" name="password" placeholder="Enter your password">
            <div class="option">
                <div class="label">
                    <input type="checkbox" name="Remember me" value="Remember me">
                    <label for="Remember me">Remember me</label>
                </div>
            </div>
            <div class="enter">
                <input class="login" type="submit" value="Login">
                <label for="or">Or</label>
            </div>
        </form>
        <div class="field Button">
            <button class="button sign"><a href="reg_customer.php">Sign Up</a></button>
        </div>
        <P class="message">
            <?php
            if (isset($_GET['message'])) {
                if ($_GET['message'] == "failed") {
                    echo "Login failed! Wrong username or password!";
                } else if ($_GET['message'] == "logout") {
                    echo "Logout successfully!";
                } else if ($_GET['message'] == "not_yet_login") {
                    echo "Not yet logged in!";
                } else if ($_GET['message'] == "regist_success") {
                    echo "Registered successfully!";
                }
            }
            ?>
        </P>
    </div>
</body>
<script src="index.js"></script>
<script src="https://kit.fontawesome.com/2ef3e13ff1.js" crossorigin="anonymous"></script>

</html>