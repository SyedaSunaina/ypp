
<?php
// Step 1: Database connection
$con = new mysqli('localhost', 'root', '', 'ypp');
if ($con->connect_error) {
    die('Connection failed: ' . $con->connect_error);
}

?>