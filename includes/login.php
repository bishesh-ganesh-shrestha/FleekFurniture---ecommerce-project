<!-- account page starts-->
<?php
  $page_title = "Product Details | hello";
  session_start();
  include('header.php');
?>

<?php
  $erUsername = $erPass = "";
  if (isset($_POST['customer_login'])) {
    $username = $_POST['customer_username'];
    $pass = $_POST['customer_password'];

    include('dbconn.php');

    $sql = "SELECT * FROM customers WHERE customer_username = '$username' AND customer_password = '$pass' LIMIT 1";
    $query = mysqli_query($conn, $sql);

    if (mysqli_num_rows($query) > 0) {
        foreach ($query as $data) {
            $_SESSION["customer_detail_session"] = $data;
        }
        if (isset($_SESSION["customer_detail_session"])) {
            header("location: products.php");
        }
    } else {
        $error = "Invalid Username or password!";
    }
  }
?>

<div class="account-page">
  <div class="container">
    <div class="row">
      <div class="col2">
          <img src="../images/image1.png" alt="football and players" width="100%">
      </div>
      <div class="col2">
        <div class="form-container">
          <div class="form-btn">
              <a href="login.php"><span>Login</span></a>
              <a href="register.php"><span>Register</span></a>
              <!-- <hr id="indicator"> -->
          </div>

          <?php if (isset($error)) {
              echo "<div style='color: red; font-weight: 500; background: lightgreen; margin: 5px; padding: 30px; border-radius: 5px;'>" . $error . "</div>";
          } ?>

          <form action="" method="post" id="loginForm">
              <input type="text" name="customer_username" placeholder="username">
              <input type="password" name="customer_password" placeholder="password">
              <button type="submit" name="customer_login" class="btn">Login</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>


<?php
  include('footer.php');
?>