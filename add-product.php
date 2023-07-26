<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $con = new mysqli('localhost', 'root', '', 'ypp');
    if ($con->connect_error) {
        die('Connection failed: ' . $con->connect_error);
    }

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

        if ($stmt->execute() && $upload) {
            echo "Data Inserted";
        } else {
            echo "Failed to insert data or upload image.";
        }

        $stmt->close();
    }

    $con->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="text-center mt-5">Add Product</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form method="post" enctype="multipart/form-data">
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


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

