<?php if (!isset($_SESSION)) {
    session_start();
}
include('dbconn.php');

$id=$_REQUEST['id'];
if(!isset($_SESSION["cart"]))
{
    $_SESSION["cart"]=array();
}
$sql = "SELECT * FROM products WHERE product_id = '$id' LIMIT 1";
$query = mysqli_query($conn, $sql);

if (mysqli_num_rows($query) > 0) {
    foreach ($query as $data) {
        array_push($_SESSION["cart"], $data);
    }
   
} else {
    $error = "Products not found.";
}

if(isset($_SESSION["cart"]))
{
    header('location:cart.php');
    // print_r($_SESSION["cart"]);
}
?>