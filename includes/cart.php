<?php
$page_title = "Cart Details | hello";
include ('header.php');
if (!isset($_SESSION)) {
    session_start();
}
$total=0;
include('dbconn.php');
?>
  
    <!-- cart item Detials -->

    <div class="small-container cart-page">
        <table>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Sub-total</th>
            </tr>
            <?php
            if(isset($_SESSION["cart"]))
            {
                foreach($_SESSION['cart'] as $key => $cartSingleDetais)
                {
            
            ?>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="admin/uploads/<?php echo $cartSingleDetais['product_image'] ?>" alt="cart">
                        <div>
                            <p><?php echo $cartSingleDetais['product_name'] ?></p>
                            <small>Price:  Rs. <?php echo $cartSingleDetais['product_price'] ?></small>
                            <br>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1" readonly></td>
                <td>Rs. <?php echo $cartSingleDetais['product_price'] ?></td>
            </tr>
            <?php
            $total=$total+$cartSingleDetais['product_price'];
            }
        }
            
            ?>
        </table>


        <div class="total-price">
            <table>
                <tr>
                    <td>Sub-total</td>
                    <td>Rs. <?= $total ?></td>
                </tr>
               
                <tr>
                    <td>Total</td>
                    <td>Rs. <?= $total ?></td>
                </tr>
            </table>
        </div>
    </div>

    <button style="position:absolute;left:84%;bottom:12%;padding:5px 10px"><a href="payment.php">Pay Now</a></button>

    <?php
    include('footer.php');
?>