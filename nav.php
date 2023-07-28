<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="assets/image/logo.png" alt="Yummy Pet Palate" class="
                      logo"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse mt-2" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto ">
         
          <li class="nav-item mt-1">
            <button class="cart">
              <i id="cart-shop" class="shopping quantity fa-solid fa-cart-shopping fa-lg" style="color: #c187d1;"></i>
              <i id="cart-shop-open" class="fa-solid fa-cart-plus fa-lg" style="color: #c187d1;"></i>
            </button>
  
          </li>
          <li class="nav-item mx-2 mt-1">
            <button class="icon-login" id="user-btn">
              <i class="fa-solid fa-user-plus fa-lg" style="color: #c187d1;"></i>
            </button>
  
          </li>
          <li class="nav-item ">
            <div id="navigation">
              <div id="menu" onclick="onclickmenu()">
                <div id="bar1" class="bar"></div>
                <div id="bar2" class="bar"></div>
                <div id="bar3" class="bar"></div>
              </div>
              <ol id="nav" class="nav">
                <li><img src="assets/image/home.png" alt="home" class="icon"><a href="index.php">Home</a></li>
                <li><a href="category.php"><img src="assets/image/categories.png" alt="category"
                      class="icon">Category</a></li>
                <li><a href="blogs.php"><img src="assets/image/blogger.png" alt="contact" class="icon">Blogs</a>
                </li>
                <li><a href="contact.php"><img src="assets/image/telephone.png" alt="blog" class="icon">Contact</a>
                </li>
              </ol>
            </div>
          </li>
        </ul>
  
      </div>
    </div>
  </nav>
  <!-- navbar ends -->

<!-- LOGIN STARTS -->
<div class="overlay" id="overlay">
  <div class="overlay-content">
    <div class="section">
      <div class="container">
        <div class="row full-height justify-content-center">
          <div class="col-12 text-center align-self-center py-5">
            <div class="section pb-5 pt-5 pt-sm-2 text-center">
              <h6 class="mb-0 pb-3"><span class="login">LOG IN</span><span class="login">SIGN UP</span></h6>
              <input class="checkbox" type="checkbox" id="reg-log" name="reg-log" />
              <label for="reg-log"></label>
              <div class="card-3d-wrap mx-auto">
                <div class="card-3d-wrapper">
                  <div class="card-front">
                    <div class="center-wrap">
                      <div class="section text-center">
                        <h4 class="mb-4 pb-3">LOG IN
                        </h4>
                        <div class="form-group">
                          <input type="email" class="form-style" placeholder="Email" required
                            pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$">
                          <i class="input-icon uil uil-at"></i>
                        </div>
                        <div class="form-group mt-2">
                          <input type="password" class="form-style" placeholder="Password" required>
                          <i class="input-icon uil uil-lock-alt"></i>
                        </div>
                        <a href="index.php" class="btn mt-4" id="sumbit">Login</a>
                        <p class="mb-0 mt-4 text-center"><a href="#" class="link">Forgot
                            your
                            password?</a></p>
                      </div>
                    </div>
                  </div>
                  <div class="card-back">
                    <div class="center-wrap">
                      <div class="section text-center">
                        <form action="register.php" method="post">
                          <h4 class="mb-3 pb-3">SIGN UP</h4>
                          <div class="form-group">
                            <input type="text" class="form-style" placeholder="Full Name" name="name" required
                              pattern="[a-zA-Z ]+">
                            <i class="input-icon uil uil-user"></i>
                          </div>
                          <div class="form-group mt-2">
                            <input type="tel" class="form-style" placeholder="Phone Number" name="phone" required
                              pattern="[0-9]{10}">
                            <i class="input-icon uil uil-phone"></i>
                          </div>
                          <div class="form-group mt-2">
                            <input type="email" class="form-style" placeholder="Email" name="email" required
                              pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$">
                            <i class="input-icon uil uil-at"></i>
                          </div>
                          <div class="form-group mt-2">
                            <input type="password" class="form-style" placeholder="Password" name="pass" required
                              pattern=".{6,}">
                            <i class="input-icon uil uil-lock-alt"></i>
                          </div>
                          <button type="submit" class="btn mt-4 " name="send" id="sumbit">Register</button>
                        </form>
                      </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="close-btn" id="close-btn">&times;</div>
</div>


<!-- LOGIN ENDS -->
  <!-- Navbar End -->