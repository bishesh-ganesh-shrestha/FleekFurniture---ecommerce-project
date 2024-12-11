<?php
session_start();
?>

<?php include('header.php'); ?>

<div class="small-container" style="padding:50px">
    <h1 style="margin-bottom:20px;">Order <span style="color:green;">SUCCESS !!</span></h1>
    <p style="margin-bottom:20px;">Thank you for your order! Your payment has been successfully processed.</p>
    <button style="padding: 5px 10px;"><a href="clear_cart.php">Return to Home</a></button>
</div>

<?php include('footer.php'); ?>
