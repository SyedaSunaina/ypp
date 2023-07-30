<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  include("connection.php");

  if (isset($_POST['submit'])) {
      $fname = $_POST['first_name'];
      $lname = $_POST['last_name'];
      $email = $_POST['email'];
      $gender = $_POST['gender'];
      $msg = $_POST['msg'];
      $num = $_POST['num'];
      $dt = date("Y-m-d h:i:sa");
      
      $query = "INSERT INTO contact (F_Name, L_Name, Email, Gender, Msg, Num, Time_Date) VALUES (?, ?, ?, ?, ?, ?, ?)";
      $stmt = $con->prepare($query);
      $stmt->bind_param("sssssss", $fname, $lname, $email, $gender, $msg, $num, $dt);
      
    if ($stmt->execute()) {
        $sent = 'Mail Sent Successfully.';
      } else {
        $sent = 'FAILED.';
      }

      $stmt->close();
  }

  $con->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<?php
include("header.php");
?>
<body style="background-color: rgb(198, 242, 248) ;">

  <?php
  include("nav.php");
  ?>
  <!-- CONTACT US  -->
  <div class="container-fluid" data-aos="flip-left">
    <div class="row">
      <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">

        <hgroup class="contact-heading">
          <h5>CONTACT US</h5>
          <h2>Welcome to our <br> circle of friends</h1>
        </hgroup>
        <p style="margin-left: 20px;">We also offer grooming srevices to your home office,<br>so you don't even have to
          come to us - we come to you🐾</p>
      </div>
      <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
        <img src="assets/image/paw-removebg-preview.png" alt="paw" class="paw">
      </div>
    </div>
  </div>
  <br>
  <!-- CONTACT US END -->
  <!-- GET IN TOUCH  -->
  <div class="container-fluid" data-aos="flip-up">
    <div class="row">
      <div class="col-sm-5 col-md-5 col-lg-5 col-xl-5">
        <h3 class="getintouch">Get In Touch</h3>

        <ul class="contact-ul ">
          <li class="location-text"><img src="assets/image/location.png" alt="home" class="icon-location"> Location</li>
          <p class="location-para">Istiklal Street 1st Block 1st Cross, Pakistan</p>
          <li class="location-text"><img src="assets/image/clock .png" alt="home" class="icon-clock"> Grooming Hours
          </li>
          <p class="location-para">Mon-Sat 8:00pm - 12:00pm</p>
          <li class="location-text"><img src="assets/image/rocket.png" alt="home" class="icon-rocket"> Mobile Grooming
          </li>
          <p class="location-para">We also offer grooming services to your home office,<br>so you don't even have to
            come to us - we come to you</p>
        </ul>
      </div>
      <!-- FORM -->
      <!--<div id="form-overlay" class="form-overlay">
        <div class="overlay-content">
          <button class="close-button">&times;</button>
          <h3 class="sub-heading"></h3><br>
          <h3 class="sub-heading">Submitted Information:</h3>
          <p id="submittedFirstName"></p>
          <p id="submittedLastName"></p>
          <p id="submittedEmail"></p>
          <p id="submittedGender"></p>
          <p id="submittedBirthday"></p>
          <p id="submittedPhoneNumber"></p>
        </div>
      </div>-->
      <div class="col-sm-7 col-md-7 col-lg-7 col-xl-7">
        <div class="form-bg">
          <form id="myForm" method="POST">

            <div class="row">
              <div class="col-md-6 mt-3 ">

                <div class="form-outline">
                  <input placeholder="First Name" id="firstName" name="first_name" class="form-control" required />
                  <label class="form-label" for="firstName"></label>
                </div>

              </div>
              <div class="col-md-6 mt-3 m-0">

                <div class="form-outline">
                  <input placeholder="Last Name" type="text" id="lastName" name="last_name" class="form-control" required />
                  <label class="form-label" for="lastName"></label>
                </div>

              </div>
            </div>

            <div class="row">
              <div class="col-md-6 mt-0">
                <div class="form-outline">
                  <input placeholder="Email" type="email" id="emailAddress" name="email" class="form-control" required />
                  <label class="form-label" for="emailAddress"></label>
                </div>


              </div>
              <div class="col-md-6 mb-4">

                <h6 class="mb-2 pb-1">Gender: </h6>

                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="gender" id="femaleGender"
                    value="Female" checked required/>
                  <label class="form-check-label" for="femaleGender">Female</label>
                </div>

                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="gender" id="maleGender"
                    value="Male" required/>
                  <label class="form-check-label" for="maleGender">Male</label>
                </div>

                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="gender" id="otherGender"
                    value="Other" required/>
                  <label class="form-check-label" for="otherGender">Other</label>
                </div>

              </div>
            </div>

            <div class="row">
              <div class="col-md-6 ">

                <div class="form-outline">
                  <input type="text" type="text" class="form-control " placeholder="Enter Message" name="msg" id="birthdayDate"
                    required />
                  <label for="Message" class="form-label"></label>
                </div>

              </div>
              <div class="col-md-6 ">

                <div class="form-outline">
                  <input placeholder="+92 213-3799717" name="num" type="tel" id="phoneNumber" class="form-control " required />
                  <label class="form-label" for="phoneNumber"></label>
                </div>

              </div>
            </div>

            <div class="mt-4  ">
              <button class="btn-form" type="submit" name="submit">Submit</button>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid" data-aos="fade-down">
    <div class="row justify-content-center ">
      <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
        <div>
          <img src="assets/image/bond.png" alt="Wait until image load.." class="bone">
        </div>

      </div>
    </div>
  </div>

  <!-- GET IN TOUCH END -->
  <!-- MAP STARTS -->
  <div class="container-fluid" data-aos="fade-up">
    <div class="row">
      <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
        <div class="sidemap-div">
          <div class="sidemap-img">
            <img src="assets/image/cutedod.jpg" alt="Wait Until Image Load..." class="sidemap-img">
          </div>

          <img src="assets/image/email.png" class="icon-mail" alt="Email">

          <a href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox" target="_blank"
            class="mail-link">yummypetpalate@gmail.com</a>

          <img src="assets/image/phone-call.png" class="icon-mail" alt="Email"> <br>
          <a href="tel:+92-564-3567521" target="_blank" class="mail-tel">92-312918743</a>
          <img src="assets/image/time-management.png" alt="" class="icon-mail">
          <p class="mail-work">12:00am to 12:00pm</p>
        </div>
      </div>
      <div class="col-sm-8 col-md-8 col-lg-8 col-xl-8">

        <div class="map">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3619.3139925217047!2d67.14924997447825!3d24.88726914418599!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb339999415e0c3%3A0x36742eee0fd9c291!2sAptech%20Metro%20Star%20Gate!5e0!3m2!1sen!2s!4v1687648626553!5m2!1sen!2s"
            width="700" height="400" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>


    </div>
  </div>

  <!-- MAP ENDS -->
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