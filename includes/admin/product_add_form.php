<center>
    <?php
    $page_title = "PRODUCT PANEL";
    if (!isset($_SESSION)) {
        session_start();
    }
    include('../dbconn.php');

    try {
        $message = '';
        if (isset($_REQUEST['product_name'])) $product_name =  $_REQUEST['product_name'];
        if (isset($_REQUEST['product_price'])) $product_price =  $_REQUEST['product_price'];
        if (isset($_REQUEST['product_image'])) $product_image =  $_REQUEST['product_image'];
        if (isset($_REQUEST['product_price'])) {
// image code
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["product_image"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["product_image"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["product_image"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["product_image"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["product_image"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
$product_image= htmlspecialchars( basename( $_FILES["product_image"]["name"]));

//end image code
            if (isset($_REQUEST['product_description'])) $product_description =  $_REQUEST['product_description'];
            if (isset($_REQUEST['product_description']) && isset($_REQUEST['product_name'])) {
                $sql = "INSERT INTO products (product_name,product_price, product_image,product_description)
            VALUES ('$product_name','$product_price', '$product_image','$product_description')";

                if ($conn->query($sql) === TRUE) {
                    $message = "New record created successfully";
                } else {
                    $message = "Error: " . $sql . "<br>" . $conn->error;
                }

                $conn->close();
            }
        }
    } catch (Throwable $th) {
        echo 'Transaction error.';
    }


    ?>
    <br>
    <?= $message ?>
    <br>
    <h1>Products</h1>
    <form action="" method="post" enctype="multipart/form-data">
        NAME: <input type="text" name="product_name" placeholder="NAME" required>
        PRICE: <input type="number" name="product_price" placeholder="PRICE" required>
        IMAGE: <input type="file" name="product_image" placeholder="Image" required>
        PRODUCT DESCRIPTION:
        <textarea name="product_description" require min='50'></textarea>
        <button type="submit" name="submit" class="btn">Upload</button>
    </form>

</center>