<html>
    <?php
    include("header.php");
    ?>

<body>
    <body style="background-color: rgb(198, 242, 248) ;">
    <script>
var style = document.createElement('link');
style.rel = 'stylesheet';
style.href = 'checkout.css';

document.head.appendChild(style);
    </script>

       <?php
       include("nav.php");
       ?>
      
<h1>Checkout Form</h1>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form >
      
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" >
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" >
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" >
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" >

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" >
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" >
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" >
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" >
              </div>
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <input type="submit" value="Continue to checkout" class="btn">
      </form>
    </div>
  </div>
 
</div>

  <!-- start footer -->
  <div class="container-fluid mt-3" id="footer-bg">

    <div class="row">
      <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 ml-0" id="footer-one">
        <img class="footer-logo" src="assets/image/logo.png" alt="Footer">
        <p class="footer-para mt-2" style="font-weight: bold;">A PET LOVER PARADISE</p>
      </div>
      <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3" id="footer-two">
        <img class="footer-img1" src="assets/image/blogimg4.png" alt="Footer">
        <p class="footer-para mt-3">Cherish every moment with your pet and create cute memories that'll last a lifetime.
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
  
  <!-- script -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();

  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
  <script src="assets/script.js"></script>
</body>
</html>

