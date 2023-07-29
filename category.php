<!DOCTYPE html>
<html lang="en">
<?php           
include("header.php");
?>

<body style="background-color:  rgb(198, 242, 248);">
  <?php
  include("nav.php");
  include("cart.php");
  ?>
  <!-- CATEGORY START  -->

  <!-- Banner Starts -->
  <img src="assets/image/catcategory.png" alt="" class="categorybanner w-100">

  <!-- Banner Ends -->
  <!-- Shop by category starts -->
  <div class="container">
    <div class="row mt-4">
      <h3 class="shop-h1">"Shop By Category"</h3>

    </div>
  </div>
  <div class="container-fluid">
    <div class="row justify-content-center mt-3 " style="margin-left: 100px;">
      <div class="flip-card col-sm-5 col-md-5 col-lg-5 col-xl-5 flip-card-1">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img src="assets/image/cat category.jpg" alt="Avatar" class="flip-card-img">
          </div>
          <div class="flip-card-back">
            <h1 style="margin-top: 40px;"><a href="cat.php" style="text-decoration: none; color: black;">Cat</a></h1>
          </div>
        </div>
      </div>
      <div class="flip-card col-sm-5 col-md-5 col-lg-5 col-xl-5 flip-card-2">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img src="assets/image/bananacat.jpg" alt="Avatar" class="flip-card-img">
          </div>
          <div class="flip-card-back">
            <h1 style="margin-top: 40px;"><a href="dog.php" style="text-decoration: none; color: black;">Dog</a></h1>

          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Shop by category ends -->

  <!-- start sale pet all product -->
  <div class="container mt-5">
    <div class="row">
      <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6" id="sale-card">
        <div class="row">
          <div class="col-sm-7 col-md-7 col-lg-7 col-xl-7">
            <h2 class="sale-text">Big Sale <br> Pets All Product</h2>

            <p class="sale-subheading">Save up to 50% all products</p>

            <button class="sale-btn"><a href="dog.php" style="text-decoration: none; color: black;">Shop
                Now</a></button>
          </div>
          <div class="col-sm-5 col-md-5 col-lg-5 col-xl-5">
            <img src="assets/image/greendog.jpg" alt="Sale Card" class="sale-img">
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6" id="sale-card2">
        <div class="row">
          <div class="col-sm-7 col-md-7 col-lg-7 col-xl-7">

            <h2 class="sale-text">Save up to 25%<br>On every order</h2>

            <p class="sale-subheading">Pets food and equipments</p>

            <button class="sale-btn2"><a href="cat.php" style="text-decoration: none; color: black;">Shop
                Now</a></button>
          </div>
          <div class="col-sm-5 col-md-5 col-lg-5 col-xl-5">
            <img src="assets/image/salecat2.jpg" alt="Sale Card" class="sale-img sale-img-2">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- start sale pet all product end -->
  <!-- WE DO START -->
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
        <img src="assets/image/blogimag.png" alt="" class="wedo-img">
      </div>
      <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
        <h1 class="wedo-head">"What Can We Do"</h1>
        <p class="wedo-para">We look your little family,we ensure that we will <br>give the best treatment for little
          family.</p>
      </div>
    </div>
  </div>
  <!-- WE DO END -->

  <!-- GIF -->
  <!-- <div class="container catdog-gif">
<img src="assets/image/sunainaflappy-unscreen.gif" alt="GIF" class="catdog-gif">
</div> -->
  <!-- GIF ENDS -->

  <!-- start footer -->
  <div class="container-fluid mt-5" id="footer-bg">

    <div class="row">
      <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 ml-0" id="footer-one">
        <img class="footer-logo" src="assets/image/logo.png" alt="Footer">
        <p class="footer-para mt-2" style="font-weight: bold;">A PET LOVER PARADISE</p>
      </div>
      <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3" id="footer-two">
        <img class="footer-img1" src="assets/image/blogimg4.png" alt="Footer">
        <p class="footer-para mt-3">Cherish every moment with your pet and create cute memories that'll last a
          lifetime.
        </p>
      </div>
      <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3" id="footer-three">
        <img src="assets/image/footer.png" alt="Footer" class="footer-img1">
        <p class="footer-para">Remember to provide them with the care, attention, and love they deserve.</p>
      </div>
      <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 " id="footer-four">
        <span class="footer-connect ">Connect With Us Through: </span>
        <section id="footersocial">
          <a href="https://twitter.com/" target="_blank"><img src="assets/image/twitter.png" alt="twitter"
              id="social-icon"></a>
          <a href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox" target="_blank"><img
              src="assets/image/google.png" alt="gmail" id="social-icon"></a>
          <a href="https://pk.linkedin.com/" target="_blank" role="button"><img src="assets/image/linkedin.png"
              alt="Linkedin" id="social-icon"></a>
          <a href="https://www.instagram.com/" target="_blank"><img src="assets/image/instagram.png" alt="instagram"
              id="social-icon"></a>
        </section>
        <h6 class="mt-2">Useful Links:</h6>
        <p class="footer-links"><a href="index.php">Home</a><a href="category.php">Category</a> <a
            href="blogs.php">Blogs</a><a href="contact.php">Contact</a></p>
      </div>
    </div>

  </div>
  <!-- Footer End -->


  <!-- Links -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();

    let openShopping = document.querySelector('.shopping');
let closeShopping = document.querySelector('.closeShopping');
let list = document.querySelector('.list');
let listCard = document.querySelector('.listCard');
let body = document.querySelector('body');
let total = document.querySelector('.total');
let quantity = document.querySelector('.quantity');


if (openShopping) {
  openShopping.addEventListener('click', () => {
    body.classList.add('active');
  });
}

/*openShopping.addEventListener('click', ()=>{
    body.classList.add('active');
})*/
if(closeShopping) {
  closeShopping.addEventListener('click', ()=>{
    body.classList.remove('active');
  });
}
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
  <script src="assets/script.js"></script>

</body>

</html>