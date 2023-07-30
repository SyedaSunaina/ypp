<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard  - Yummy Pet Palate</title>
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
            <h1>Simple Sidebar</h1>
            <p>
              Make sure to keep all page content within the 
              <code>#content</code>.
            </p>
          </div>
        </div>
      </div>
      <script src="https://cdn.usebootstrap.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>