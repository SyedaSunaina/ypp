<?php
// Step 1: Database connection
$con = new mysqli('localhost', 'root', '', 'ypp');
if ($con->connect_error) {
    die('Connection failed: ' . $con->connect_error);
}

// Step 2: Fetch data from the database with category "dog"
$query = "SELECT * FROM products WHERE category = 'dog'";
$result = $con->query($query);

// Step 3: Fetch products into products array
if ($result->num_rows > 0) {
    $products = array();
    while ($row = $result->fetch_assoc()) {
        $products[] = $row;
    }
   // echo json_encode($products);
} else {
   // echo json_encode(array('message' => 'No products found in the "dog" category.'));
}

// Close the database connection
//$con->close();
?>



<!DOCTYPE html>
<html lang="en">

<?php include('header.php'); ?>

<body style="background-color: rgb(243, 155, 184) ;">
  <?php include('nav.php'); ?>

  

  <!-- cat category start -->
    <h1 class="cat-heading">"DOG CATEGORY"🍗</h1>
    <!-- filter -->
  <div class="container">
    <div class="row">
      <div class="col-2">
        <h3 class="filterby">FILTER BY</h3>
      </div>
      <div class="col-10">
        <select onchange="filterItems(this.value)" id="filter">
          <option value="All">All products</option>
          <option value="food">Food</option>
          <option value="accessory">Accessories</option>
          <option value="medicine">Medicines</option>
        </select>
        </div>
    </div>
  </div>


<!-- cart -->
<div class="container">
  <div class="list">
  </div>
</div>
<div class="card">
  <h1>Cart</h1>
  <ul class="listCard">
  </ul>

  <div class="checkOut">

    <div class="total">0</div>
    <div class="checkout"><a href="checkout.php" style="text-decoration: none; color: white;">Checkout</a></div>

  </div>
  <i class="fa-regular fa-circle-xmark closeShopping" style="color: #000000;"></i>
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
          <a href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox" target="_blank"><img src="assets/image/google.png"
              alt="gmail" id="social-icon"></a>
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
<script>
  
// cart
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
closeShopping.addEventListener('click', ()=>{
    body.classList.remove('active');
})

let products = <?php echo json_encode($products); $con->close(); ?>;
let listCards  = [];

//LOAD ALL PRODUCTS ON PAGE LOAD
function initApp(){
    products.forEach((value, key) =>{
        let newDiv = document.createElement('div');
        newDiv.classList.add('item');
        newDiv.innerHTML = `
        <div class= "container">
          <div class="row">
        <div class = "card">
      <div class = "image">
        <img src="assets/image/${value.image}">
      </div>
      <div class = "content">
       <h2 style="font-family: pacifio;" class="title"> ${value.name}</h2>
       <h4 style="font-family: pacifio;" class="price">${value.price.toLocaleString()}</h4>
       <i class="fa-solid fa-star" style="color: #ebe424;"></i>
       <i class="fa-solid fa-star" style="color: #ebe424;"></i>
       <i class="fa-solid fa-star" style="color: #ebe424;"></i>
       <i class="fa-solid fa-star" style="color: #ebe424;"></i>
       <button onclick="addToCard(${key})">Add To Cart</button>
    </div>  
  </div>  
</div>  `
        list.appendChild(newDiv);
    })
}
initApp();

//LOAD PRODUCTS ACCORDING SELECTED FILTER
function filterItems(filter) {
    list.innerHTML = ''; // Clear the existing items in the list
    products.forEach((value, key) => {
  if (filter === 'All' || value.filter === filter) {
    let newDiv = document.createElement('div');
    newDiv.classList.add('item');
    newDiv.innerHTML = `
      <div class="card">
        <div class="image">
          <img src="assets/image/${value.image}">
        </div>
        <div class="content">
          <h2 style="font-family: pacifico;" class="title">${value.name}</h2>
          <h4 style="font-family: pacifico;" class="price">${value.price.toLocaleString()}</h4>
          <i class="fa-solid fa-star" style="color: #ebe424;"></i>
          <i class="fa-solid fa-star" style="color: #ebe424;"></i>
          <i class="fa-solid fa-star" style="color: #ebe424;"></i>
          <i class="fa-solid fa-star" style="color: #ebe424;"></i>
          <button onclick="addToCard(${key})">Add To Cart</button>
        </div>
      </div>`;
    list.appendChild(newDiv);
  }
});

  }
function addToCard(key){
    if(listCards[key] == null){
        // copy product form list to list card
        listCards[key] = JSON.parse(JSON.stringify(products[key]));
        listCards[key].quantity = 1;
    }
    reloadCard();
}
function reloadCard(){
    listCard.innerHTML = '';
    let count = 0;
    let totalPrice = 0;
    listCards.forEach((value, key)=>{
        totalPrice = totalPrice + value.price;
        count = count + value.quantity;
        if(value != null){
            let newDiv = document.createElement('li');
            newDiv.innerHTML = `
                <div><img src="assets/image/${value.image}"/></div>
                <div>${value.name}</div>
                <div>${value.price.toLocaleString()}</div>
                <div>
                    <button onclick="changeQuantity(${key}, ${value.quantity - 1})">-</button>
                    <div class="count">${value.quantity}</div>
                    <button onclick="changeQuantity(${key}, ${value.quantity + 1})">+</button>
                </div>`;
                listCard.appendChild(newDiv);
        }
    })
    total.innerText = totalPrice.toLocaleString();
    quantity.innerText = count;
}
function changeQuantity(key, quantity){
    if(quantity == 0){
        delete listCards[key];
    }else{
        listCards[key].quantity = quantity;
        listCards[key].price = quantity * products[key].price;
    }
    reloadCard();
  }

</script>
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
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