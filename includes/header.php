<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/products.css">
    <link rel="stylesheet" href="../css/account.css">

    
</head>

<body>
    <!-- header section starts here! -->
    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <a href="index.php"><img src="../logo/logo.png" alt="logo" width="160px"></a>
                </div>
                <nav>
                    <ul id="Menu-items">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="products.php">Products</a></li>
                        <li><a href="login.php">Login</a></li>
                        <li><a href="admin/admin_login.php">Admin</a></li>
                    </ul>
                </nav>
                <a href="cart.php"><img src="../images/cart.jpg" alt="cart" width="25px" height="25px"></a>
                <img src="../images/menu.png" class="menu-icon" alt="menu logo" width="25px" height="25px" onclick="menutoggle()">
                </div>
        </div>
    </div>
    <!-- header section ends here -->
 