<?php
$page_title = "Product Details | hello";
include('header.php');
if (!isset($_SESSION)) {
    session_start();
}
include('dbconn.php');
$id=$_REQUEST['id'];

$sql = "SELECT * FROM products WHERE product_id = '$id' LIMIT 1";
$query = mysqli_query($conn, $sql);

if (mysqli_num_rows($query) > 0) {
    foreach ($query as $data) {
        $_SESSION["customer_detail_session"] = $data;
    }
   
} else {
    $error = "Products not found.";
}


?>
<div class="small-container single-product">
    <div class="row">
        <div class="col2">
            <img src="admin/uploads/<?php echo $_SESSION["customer_detail_session"]['product_image'] ?>" alt="product details" width="100%" id="ProductImg">

        </div>
        <div class="col2">
            <p>Products</p>

            <h1><?php if(isset( $_SESSION["customer_detail_session"]['product_name']))
{
    echo $_SESSION["customer_detail_session"]['product_name'];
 } ?>
             <h4>Rs. <?php if(isset( $_SESSION["customer_detail_session"]['product_price']))
{
    echo $_SESSION["customer_detail_session"]['product_price'];
 } ?></h4>


            <a href="add_to_cart.php?id=<?php if(isset( $_SESSION['customer_detail_session']['product_id']))
{
    echo $_SESSION["customer_detail_session"]['product_id'];
 } ?>" class="btn">Add To Cart</a>
            <h3>Product Detials</h3>
            <br>
            <p><?php if(isset( $_SESSION["customer_detail_session"]['product_description']))
{
    echo $_SESSION["customer_detail_session"]['product_description'];
 } ?>.</p>
        </div>
    </div>
</div>

<!-- title -->
<div class="small-container">
    <div class="row row2">
        <h2>Related Products</h2>
        <p>View More</p>
    </div>
</div>

<div class="small-container">

    <div class="row">
        <div class="col4">
            <img src="../images/product-9.jpg" alt="watch">
            <h4>Portable Laptop table</h4>
            <p>Rs. 800</p>
        </div>
        <div class="col4">
            <img src="../images/product-10.jpg" alt="shoes">
            <h4>WALL MOUNTED SHELF FOR KITCHEN</h4>
            <p>Rs. 1200</p>
        </div>
        <div class="col4">
            <img src="../images/product-11.jpg" alt="guy wearing tshirt">
            <h4>Wooden Shoe Rack</h4>
            <p>Rs. 1500</p>
        </div>
        <div class="col4">
            <img src="../images/product-12.jpg" alt="guy wearing tshirt">
            <h4>Comfortable Blue Couch</h4>
            <p>Rs. 12500</p>
        </div>
    </div>
</div>


<?php
include('footer.php');
?>