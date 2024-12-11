<?php
include('admin_side_nav.php');
?>
<center>

    <table border="2">
        <tr>
            <th>SN</th>
            <th>Name</th>
            <th>Price</th>
            <th>Image</th>
            <th>Description</th>
        </tr>
        <?php
        $sql = "SELECT * FROM products";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            $i = 1;
            while ($row = $result->fetch_assoc()) {
        ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row["product_name"] ?></td>
                    <td><?php echo $row["product_price"] ?></td>
                    <td> <img height="100" src="uploads/<?php echo $row["product_image"] ?>" alt=""></td>
                    <td><?php echo $row["product_description"] ?></td>

                </tr>
        <?php
                $i++;
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
        <hr>
        <?php
        include('product_add_form.php');
        ?>
        <hr>
    </table>
</center>