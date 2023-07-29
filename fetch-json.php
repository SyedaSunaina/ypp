<?php
// Step 1: Database connection
$con = new mysqli('localhost', 'root', '', 'ypp');
if ($con->connect_error) {
    die('Connection failed: ' . $con->connect_error);
}

// Step 2: Fetch data from the database with category "cat"
$query = "SELECT * FROM products WHERE filter = 'food'";
$result = $con->query($query);

// Step 3: Convert data to JSON
if ($result->num_rows > 0) {
    $products = array();
    while ($row = $result->fetch_assoc()) {
        $products[] = $row;
    }
    echo json_encode($products);
} else {
    echo json_encode(array('message' => 'No products found.'));
}

// Close the database connection
$con->close();
?>