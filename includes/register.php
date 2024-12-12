<?php
$page_title = "Product Details | hello";
include('header.php');
?>
<?php
include('dbconn.php');

$flag = 0;

$erPhone = $erUser = $erPassword = "";
try {
  if(isset($_POST['register'])){
      if (isset($_REQUEST['customer_name'])) $customer_name =  $_REQUEST['customer_name'];
      if (isset($_REQUEST['customer_mobile'])) $customer_mobile =  $_REQUEST['customer_mobile'];

      if(isset($customer_mobile)){
          if(!preg_match("/^98[0-9]{8}$/", $customer_mobile)){
              $flag = 1;
              $erPhone = "Enter a valid phone!";
          }
      }

      if (isset($_REQUEST['customer_username'])) $customer_username =  $_REQUEST['customer_username'];

      $sql = "SELECT * FROM customers WHERE customer_username = '$customer_username'";
      $query = mysqli_query($conn, $sql);

      if(mysqli_num_rows($query) > 0){
          $flag = 1;
          $erUser = "Username already exists!";
      }

      if (isset($_REQUEST['customer_password'])) {
          $customer_password =  $_REQUEST['customer_password'];

          if (strlen($customer_password) < 8) {
              $flag = 1;
              $erPassword = "Password must be at least 8 characters long!";
          }
      }

      if (isset($_REQUEST['customer_name']) && isset($_REQUEST['customer_mobile']) && isset($_REQUEST['customer_username']) && isset($_REQUEST['customer_password']) && $flag == 0) {
          $sql = "INSERT INTO customers (customer_name, customer_mobile, customer_username, customer_password)
              VALUES ('$customer_name', '$customer_mobile', '$customer_username', '$customer_password')";

          if ($conn->query($sql) === TRUE) {
              echo "New record created successfully";
              header("location: login.php");
          } else {
              echo "Error: " . $sql . "<br>" . $conn->error;
          }

          $conn->close();
      }
  }
} catch (Throwable $th) {
    echo 'Transaction error.';
}
?>

<div class="account-page">
    <div class="container">
        <div class="row">
            <div class="col2">
                <img src="../images/image1.png" alt="football and players" width="100%">
            </div>

            <div class="col2">

                <div class="form-container" style="height:500px;">
                    <div class="form-btn">
                        <a href="login.php"><span>Login</span></a>
                        <a href="register.php"><span>Register</span></a>
                        <!-- <hr id="indicator"> -->
                    </div>
                    <form action="" method="post" id="regForm" >
                        <input type="text" name="customer_name" placeholder="NAME" required>
                        <input type="text" name="customer_mobile" placeholder="MOBILE" required>
                        <?php
                            if(isset($erPhone)){
                                echo "<span>" . $erPhone . "</span>";
                            }
                        ?>

                        <input type="text" name="customer_username" placeholder="USERNAME" required>
                        <?php
                            if(isset($erUser)){
                                echo "<span>" . $erUser . "</span>";
                            }
                        ?>

                        <input type="password" name="customer_password" placeholder="PASSWORD" required>
                        <?php
                            if(isset($erPassword)){
                                echo "<span>" . $erPassword . "</span>";
                            }
                        ?>

                        <button type="submit" name="register" class="btn">Register</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>

<?php
include('footer.php');
?>
