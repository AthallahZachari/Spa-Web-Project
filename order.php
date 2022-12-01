<?php
include 'connection.php';
session_start();
if (empty($_SESSION['email'])) {
    header('location:index.php?message=not_yet_login');
}
$_SESSION['accepted'] = array();
$array_id = $_SESSION['accepted'];
$query = mysqli_query($connect, "SELECT * FROM (trans inner join user on trans.user_no = user.user_Number) inner join item on trans.item_code=item.item_id");
$trans_query = mysqli_query($connect, "SELECT * FROM trans");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/order.css">
    <title>Document</title>
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
                            <th>Customer</th>
                            <th>Item</th>
                            <th>Shipping Destination</th>
                            <th>Transaction Date</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_object($query)) {
                        ?>
                            <tr>
                                <td><?= $row->Fullname ?></td>
                                <td><?= $row->item_name ?></td>
                                <td><?= $row->Addr ?></td>
                                <td><?= $row->date_transaction ?></td>
                                <td><?= $row->total_price ?></td>
                                <td><a href="#"><Button>Accept</Button></a></td>
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