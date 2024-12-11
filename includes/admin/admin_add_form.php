<center>
    <?php
    $page_title = "ADMIN PANEL";
    if (!isset($_SESSION)) {
        session_start();
    }
    include('../dbconn.php');

    try {
        $message = '';
        if (isset($_REQUEST['admin_name'])) $admin_name =  $_REQUEST['admin_name'];
        if (isset($_REQUEST['admin_username'])) $admin_username =  $_REQUEST['admin_username'];
        if (isset($_REQUEST['admin_password'])) $admin_password =  $_REQUEST['admin_password'];
        if (isset($_REQUEST['admin_password'])) {
            $sql = "INSERT INTO admins (admin_name,admin_username, admin_password)
            VALUES ('$admin_name','$admin_username', '$admin_password')";

            if ($conn->query($sql) === TRUE) {
                $message = "New record created successfully";
            } else {
                $message = "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
        }
    } catch (Throwable $th) {
        echo 'Transaction error.';
    }


    ?>
    <br>
    <?= $message ?>
    <br>
    <h1>Admins</h1>
    <form action="" method="post" id="regForm">
        NAME: <input type="text" name="admin_name" placeholder="NAME" required>
        USERNAME: <input type="text" name="admin_username" placeholder="USERNAME" required>
        PASSWORD: <input type="password" name="admin_password" placeholder="PASSWORD" required>
        <button type="submit" name="register" class="btn">Register</button>
    </form>

</center>