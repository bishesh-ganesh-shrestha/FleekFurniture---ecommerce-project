<?php
// sql to delete a record
include('admin_side_nav.php');

try {
    $id = $_REQUEST['id'];
    $sql = "DELETE FROM products WHERE product_id='$id";
    if ($conn->query($sql) === TRUE) {
        header('admin_products.php');
    } else {
        header('admin_products.php');
    }

    $conn->close();
} catch (Throwable $th) {
    echo $th->getMessage();
}
