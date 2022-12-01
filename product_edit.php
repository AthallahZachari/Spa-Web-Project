<?php
include 'connection.php';
session_start();

$id = $_POST['id'];
$name = $_POST['name'];
$category = $_POST['category'];
$price = $_POST['price'];
$info = $_POST['info'];
$desc = $_POST['desc'];

if (isset($_POST['submit']) && isset($_FILES['product_image'])) {
    echo "<pre>";
    print_r($_FILES['product_image']);
    echo "</pre>";

    $img_name = $_FILES['product_image']['name'];
    $img_size = $_FILES['product_image']['size'];
    $tmp_name = $_FILES['product_image']['tmp_name'];
    $error = $_FILES['product_image']['error'];

    if ($error === 0) {
        if ($img_size > 5000000) {
            header("Location: admin_edit.php?error=Sorry, your file is too large.");
        } else {
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);

            $allowed_exs = array("jpg", "jpeg", "png");

            if (in_array($img_ex_lc, $allowed_exs)) {
                $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
                $img_upload_path = 'uploads/' . $new_img_name;
                move_uploaded_file($tmp_name, $img_upload_path);

                $sql = "INSERT INTO images(image_url) VALUES('$new_img_name')";
                mysqli_query($connect, $sql);
                $image_row = mysqli_query($connect, "SELECT * FROM images WHERE image_url = '$new_img_name'");
                $image_object = mysqli_fetch_object($image_row);
                $image_id = $image_object->id;
                $insert_query = mysqli_query($connect, "UPDATE item set item_name='$name', category_code=$category, image_id=$image_id, item_price=$price, item_info='$info', item_desc='$desc' where item_id=$id") or die(mysqli_error($connect));
                header("Location: admin_main.php?message=success");
            } else {
                header("Location: admin_edit.php?error=You can't upload files of this type");
            }
        }
    } else {
        header("Location: admin_edit.php?error=unknown error occurred!");
    }
} else {
    header("Location: admin_edit.php");
}


if ($query) {
    header("Location: admin_main.php");
} else {
    echo "The update process was failed";
}
