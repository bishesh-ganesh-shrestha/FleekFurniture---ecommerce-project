<?php

include('admin_side_nav.php');

$error='';
if (isset($_POST['admin_login'])) {
    $username = $_POST['admin_username'];
    $pass = $_POST['admin_password'];
    $sql = "SELECT * FROM admins WHERE admin_username = '$username' AND admin_password = '$pass' LIMIT 1";
    $query = mysqli_query($conn, $sql);

    if (mysqli_num_rows($query)>0) {
        foreach ($query as $data) {
            $_SESSION["admin_detail_session"] = $data;
        }
        if (isset($_SESSION["admin_detail_session"])) {
            header("location: admin_add.php");
        }
        $error = "Login successfull!";
    } else {
        $error = "Invalid Username or password!";
    }
}

?>

<center>
<h3><?php echo $error; ?></h3>
    <form action="" method="post">
        Username:<input name="admin_username">
        Password:<input name="admin_password">
        <input name="admin_login" value="LOGIN" type="submit">
    </form>
</center>