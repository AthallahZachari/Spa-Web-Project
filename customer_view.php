<?php
    include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/customer_view.css">
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
                    <a href="#">Logout</a>
                </div>
            </div>
        </div>
        <div class="field">
            <div class="box">
                <table class="content-table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Shopping Point</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT * FROM customers";
                        $data = $connect->query($query);
                        while ($row = mysqli_fetch_assoc($data)) {
                        ?>
                            <tr>
                                <td><?php echo $row["first_name"] ?></td>
                                <td><?php echo $row["address"] ?></td>
                                <td><?php echo $row["points"] ?></td>
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