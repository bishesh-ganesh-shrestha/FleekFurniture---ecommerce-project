<?php
$page_title = "ADMIN PANEL";
if (!isset($_SESSION)) {
    session_start();
}
include('../dbconn.php');
if (!isset($_SESSION["admin_detail_session"])) {
    header('admin_login.php');
}
?>
<center>
    <h1>ADMIN PANEL</h1>
    <hr>
<a href="../index.php">Customer Page</a>
<a href="admin_add.php">Admins</a>
<a href="admin_add.php">Carts</a>
<a href="admin_products.php">Products</a>

</center>
