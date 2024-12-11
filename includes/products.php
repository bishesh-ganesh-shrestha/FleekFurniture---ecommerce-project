<?php
$page_title = "Products | hello";
include('header.php');
include('dbconn.php');
?>

<div class="small-container">
    <!-- Search Bar -->
    <div class="row row2">
        <h2>All Products</h2>
        <!-- Search Form -->
        <form method="GET" action="products.php">
            <input type="text" name="search" placeholder="Search products..." value="<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>">
            <button type="submit">Search</button>
        </form>
        <select>
            <option>Default Sorting</option>
            <option>Sort by Price</option>
            <option>Sort by Popularity</option>
            <option>Sort by Rating</option>
            <option>Sort by Sales</option>
        </select>
    </div>

    <div class="row">
        <?php
        // Retrieve the search query if it exists
        $search_query = isset($_GET['search']) ? $_GET['search'] : '';

        // Modify the SQL query to filter products based on the search query
        $sql = "SELECT * FROM products WHERE product_name LIKE '%$search_query%'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
        ?>
                <div class="col4">
                    <a href="product-details.php?id=<?php echo $row['product_id']; ?>">
                        <img height="120" src="admin/uploads/<?php echo $row["product_image"] ?>" alt="<?php echo $row["product_name"] ?>">
                        <h4><?php echo $row["product_name"] ?></h4>
                        <p>Rs.<?php echo $row["product_price"] ?></p>
                    </a>
                </div>
        <?php
            }
        } else {
            echo "No products found.";
        }
        $conn->close();
        ?>
    </div>

</div>

<?php
include('footer.php');
?>
