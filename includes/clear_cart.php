<?php
// Start session
session_start();

// Include database connection file
include('dbconn.php');  // Ensure this file contains your database connection logic

// Step 1: Delete all cart items
$query = "DELETE FROM carts"; // This will delete all rows in the 'carts' table

if (mysqli_query($conn, $query)) {
    // Step 2: Clear cart session data
    unset($_SESSION['cart']); // Clear session cart data

    // Step 3: Redirect to the homepage
    header("Location: index.php");
    exit();  // Ensure no further code is executed
} else {
    // If an error occurs while deleting, show an error message
    echo "Error deleting cart items: " . mysqli_error($conn);
}
?>
