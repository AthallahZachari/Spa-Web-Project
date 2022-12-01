
    <?php
    $connect = new mysqli("localhost", "root", "", "spa");

    if ($connect->connect_error) {
        die('Sorry, connection error' . $connect->connect_error);
    }
    ?>
