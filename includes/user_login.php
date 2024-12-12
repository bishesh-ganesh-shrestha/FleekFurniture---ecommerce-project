<?php
  $erUsername = $erPass = "";
  if(isset($_POST['login'])){
    $username = $_POST['lusername'];
    $pass = $_POST['lpassword'];

    include('dbconn.php');

    $sql = "SELECT * FROM customers WHERE customer_username = '$username' AND customer_password = '$pass' LIMIT 1";
    $query = mysqli_query($conn, $sql);

    if(mysqli_num_rows($query) > 0){
        foreach($query as $data){
            $user_id = $data['customer_id'];
            $user_name = $data['username'];
            $user_email = $data['email'];
        }

        if(isset($user_id)){
            header("location: products.php");
            echo "Successful login!";
        }
    }

    else{
        echo "Login failed!";
        header("location: login.php");
    }
  }
?>