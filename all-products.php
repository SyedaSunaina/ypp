<!DOCTYPE html>
<html>
<head>
    <title>All Products</title>
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">All Products</h1> 
        <div style="float: right; padding: 10px;" class="addnewbtn"><a href="add-product.php" target="_blank" class="btn btn-primary">+ Add New Product</a></div>
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
                $con = new mysqli('localhost', 'root', '', 'ypp');
                if ($con->connect_error) {
                    die('Connection failed: ' . $con->connect_error);
                }

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
                $con = new mysqli('localhost', 'root', '', 'ypp');
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

    <!-- Add Bootstrap JS and jQuery scripts at the end of the body -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
