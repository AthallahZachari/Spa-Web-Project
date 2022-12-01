<?php
    include 'connection.php';
    session_start();
    if(empty($_SESSION['email'])){
        header('location:index.php?message=not_yet_login');
    }
    $data = (mysqli_query($connect, "SELECT * FROM user WHERE types='user'"));
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/customer_view.css">
    <title>Customer List</title>
</head>

<body>
    <div class="container">
        <div class="sidebar">
            <div class="logo">
                <h1>Harmonie</h1>
            </div>
            <div class="list">
                <div class="menu-list">
                    <a href="admin.php">Home</a>
                </div>
                <div class="menu-list">
                    <a href="#">Setting</a>
                </div>
                <div class="menu-list">
                    <a href="logout.php">Logout</a>
                </div>
            </div>
        </div>
        <div class="field">
            <div class="box">
                <table class="content-table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Phone Number</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_object($data)) {
                        ?>
                            <tr>
                                <td><?=$row->Fullname?></td>
                                <td><?=$row->email?></td>
                                <td><?=$row->Addr ?></td>
                                <td><?=$row->phone_numb ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>