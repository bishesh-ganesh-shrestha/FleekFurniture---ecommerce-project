<?php
include('admin_side_nav.php');
?>
<center>

    <table border="2">
        <tr>
            <th>SN</th>
            <th>Name</th>
            <th>Username</th>
        </tr>
        <?php
        $sql = "SELECT * FROM admins";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
        ?>
                <tr>
                    <td><?php echo $row["admin_id"] ?></td>
                    <td><?php echo $row["admin_name"] ?></td>
                    <td><?php echo $row["admin_username"] ?></td>

                </tr>
        <?php
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
        <hr>
        <?php
        include('admin_add_form.php');
        ?>
        <hr>
    </table>
</center>