<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products - Yummy Pet Palate</title>
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
          <div class="container mt-5">
        <h1 class="text-center">All Products</h1> 
        <!-- <div style="float: right; padding: 10px;" class="addnewbtn"><a href="add-product.php" target="_blank" class="btn btn-primary">
            + Add New Product</a></div> -->
        <table class="table">
            <thead>
                <tr> 
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Category</th>
                    <th>Sub-Category</th>
                    <th>Image</th>
                    <th>Update</th>
                    <th>Delete</th> <!-- New column for Delete button -->
                </tr>
            </thead>
            <tbody>
                <?php
                // Database connection
                
                include("connection.php");

                // Pagination settings
                $products_per_page = 5;
                $current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                $offset = ($current_page - 1) * $products_per_page;

                // Fetch products from the database with pagination
                $query = "SELECT * FROM products LIMIT $offset, $products_per_page";
                $result = $con->query($query);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['price']; ?></td>
                            <td><?php echo $row['category']; ?></td>
                            <td><?php echo $row['filter']; ?></td>
                            <td><img src="./assets/image/<?php echo $row['image']; ?>" alt="Product Image" width="50"></td>
                            <td><a href="edit-product.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Update</a></td>
                            <td>
                                <!-- Delete button with form submission -->
                                <form method="post" action="delete-product.php" onsubmit="return confirm('Are you sure you want to delete this product?')">
                                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        <?php
                    }
                } else {
                    ?>
                    <tr>
                        <td colspan="8">No products found.</td>
                    </tr>
                    <?php
                }

                $con->close();
                ?>
            </tbody>
        </table>

        <!-- Pagination links -->
        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center">
                <?php
                // Calculate the total number of pages
                // Database connection              
                include("connection.php");
                
                $query = "SELECT COUNT(*) AS total FROM products";
                $result = $con->query($query);
                $total_products = $result->fetch_assoc()['total'];
                $total_pages = ceil($total_products / $products_per_page);

                // Display pagination links
                for ($i = 1; $i <= $total_pages; $i++) {
                    $active_class = ($current_page === $i) ? 'active' : '';
                    echo "<li class='page-item $active_class'><a class='page-link' href='all-products.php?page=$i'>$i</a></li>";
                }

                $con->close();
                ?>
            </ul>
        </nav>
    </div>

          </div>
        </div>
      </div>
      <script src="https://cdn.usebootstrap.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>