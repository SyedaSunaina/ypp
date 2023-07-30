<?php
$infomsg = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include("connection.php");

    if (isset($_POST['add'])) {
        $name = $_POST['pname'];
        $price = $_POST['pprice'];
        $category = $_POST['pcategory'];
        $subcategory = $_POST['psub-category'];
        $image = $_FILES['pimage']['name']; // Get the name of the uploaded file
        $folder = "./assets/image/" . $image;
        $tmp_image = $_FILES['pimage']['tmp_name']; // Temporary location of the uploaded file

        $query = "INSERT INTO products (name, price, category, filter, image) VALUES (?, ?, ?, ?, ?)";
        $stmt = $con->prepare($query);
        $stmt->bind_param("sssss", $name, $price, $category, $subcategory, $image);
        
        $upload = move_uploaded_file($tmp_image, $folder);

        if($stmt->execute() && $upload) {
            $infomsg = "Product Added";
        } 
        else {
            $infomsg = "Failed to add Product or upload image.";
        }

        $stmt->close();
    }

    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Products - Yummy Pet Palate</title>
    <link rel="stylesheet" href="dash.css">
    <link rel="stylesheet" href="https://cdn.usebootstrap.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
</head>
<body>
    <div id="viewport">
        <!-- Sidebar -->
        <div id="sidebar">
          <header>
            <a href="#">YPP-ADMIN</a>
          </header>
          <ul class="nav">
          <li>
              <a href="dashboard.php">
                <i class="zmdi zmdi-view-dashboard"></i> Dashboard
              </a>
            </li>
            <li>
              <a href="add-product.php">
                <i class="zmdi zmdi-link"></i> Add Product
              </a>
            </li>
            <li>
              <a href="all-products.php">
                <i class="zmdi zmdi-widgets"></i> All Products
              </a>
            </li>
          </ul>
        </div>
        <!-- Content -->
        <div id="content">
          <nav class="navbar navbar-default">
            <div class="container-fluid">
              <ul class="nav navbar-nav navbar-right">
                <li>
                  <a href="#"><i class="zmdi zmdi-notifications text-danger"></i>
                  </a>
                </li>
                <li><a href="#">Test User</a></li>
              </ul>
            </div>
          </nav>
          <div class="container-fluid">
            <!-- <h1>Simple Sidebar</h1>
            <p>
              Make sure to keep all page content within the 
              <code>#content</code>.
            </p> -->
            <div class="container">
        
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="text-center mt-5">Add Product</h1>
                <form method="post" enctype="multipart/form-data">
                <?php if (!empty($infomsg)) : ?>
              <div class="alert alert-success mt-4">
                <?php echo $infomsg; ?>
              </div>
            <?php endif; ?>
                    <div class="form-group">
                        <input type="text" name="pname" class="form-control" placeholder="Product Name" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="pprice" class="form-control" placeholder="Product Price" required>
                    </div>
                    <div class="form-group">
                        <select name="pcategory" class="form-control" required>
                            <option value="" disabled selected>Select Category:</option>
                            <option value="cat">Cat</option>
                            <option value="dog">Dog</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="psub-category" class="form-control" required>
                            <option value="" disabled selected>Select Sub-Category:</option>
                            <option value="food">Food</option>
                            <option value="accessory">Accessory</option>
                            <option value="medicine">Medicine</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="file" name="pimage" class="form-control-file" required>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="add" class="btn btn-primary" value="Add Product">
                    </div>
                </form>
            </div>
        </div>
    </div>


          </div>
        </div>
      </div>
      <script src="https://cdn.usebootstrap.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>