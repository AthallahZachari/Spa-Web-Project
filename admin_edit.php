<?php
include 'connection.php';
session_start();
$item_id = $_GET['id'];
$query = mysqli_query($connect, "SELECT * FROM category");
$data = mysqli_fetch_object(mysqli_query($connect, "SELECT * FROM item inner join category on item.category_code=category.ID_category WHERE item.item_id = $item_id"));

?>

<!DOCTYPE html>
<html lang="en">

<head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Input Data</title>
       <link rel="stylesheet" href="style/admin_add.css">
</head>

<body>
       <form action="product_edit.php" method="post" enctype="multipart/form-data">
              <input type="hidden" name="id" value="<?=$item_id?>">
              <input type="text" name="name" placeholder="Product name" value="<?=$data->item_name?>" required>
              <select name="category" required>
                     <option value="<?=$data->ID_category?>" disabled selected hidden><?=$data->category_name?></option>
                     <?php
                     while ($category_data = mysqli_fetch_object($query)) {
                     ?> <option value="<?= $category_data->ID_category ?>"><?= $category_data->category_name ?></option>
                     <?php
                     }
                     ?>
              </select>
              <input type="text" name="price" placeholder="Product Price" value="<?=$data->item_price ?>" required>
              <input type="text" name="info" placeholder="Product Info" value="<?=$data->item_info?>" required>
              <input type="text" name="desc" placeholder="Product Description" value="<?=$data->item_desc?>" required>
              <input type="file" name="product_image" required>
              <input type="submit" name="submit" value="Upload">
       </form>
       <!--Bagian input gambar dan pesan errornya, pesan errornya duluan tapi-->
       <?php if (isset($_GET['error'])) : ?>
              <p><?= $_GET['error']; ?></p>
       <?php endif ?>
</body>

</html>