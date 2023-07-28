<!DOCTYPE html>
<html lang="en">

<?php
include("header.php");
?>
<body style="background-color: rgb(243, 155, 184) ;">
  <?php
  include("nav.php");
  ?>
  <h1 class="cat-heading">"ACCESSORIES" </h1>

  <!-- cart -->
  <div class="container">
    <div class="list">
    </div>
  </div>
  <div class="card">
    <i class="fa-regular fa-circle-xmark closeShopping" style="color: #000000;"></i>

    <h1>Cart</h1>
    <ul class="listCard">
    </ul>

    <div class="checkOut">

      <div class="total">0</div>
      <div class="checkout"><a href="checkout.php"  style="text-decoration: none; color: white;">Checkout</a></div>

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

    openShopping.addEventListener('click', () => {
      body.classList.add('active');
    })
    closeShopping.addEventListener('click', () => {
      body.classList.remove('active');
    })

    let products = [

      {
        id: 1,
        name: 'Bowl',
        image: 'bowl.png',
        price: 2200,
        filter: 'accessories'
      },
      {
        id: 2,
        name: 'Collar',
        image: 'collar.png',
        price: 800
        ,
        filter: 'accessories'
      }
      ,
      {
        id: 3,
        name: 'House',
        image: 'house2.png',
        price: 4000,
        filter: 'accessories'
      }
      ,
      {
        id: 4,
        name: 'Shoulder Bag',
        image: 'shoulderbag.png',
        price: 2600,
        filter: 'accessories'
      }
      ,
      {
        id: 5,
        name: 'Leash',
        image: 'leash.png',
        price: 1500,
        filter: 'accessories'
      }
      ,
      {
        id: 6,
        name: 'Kitty Kat',
        image: 'taadaa.png',
        price: 5500,
        filter: 'accessories'
      }
      ,
      {
        id: 7,
        name: 'Cage',
        image: 'cage.png',
        price: 3000,
        filter: 'accessories'
      },
      {
        id: 8,
        name: 'Carrier',
        image: 'carrier.png',
        price: 4000,
        filter: 'accessories'
      }

      ,
      {
        id: 9,
        name: 'Carrier',
        image: 'bag.png',
        price: 4000,
        filter: 'accessories'
      }


      ,
      {
        id: 10,
        name: 'Bag',
        image: 'acc1.png',
        price: 2200,
        filter: 'accessories'
      },
      {
        id: 12,
        name: 'Cage',
        image: 'acc2.png',
        price: 4000,
        filter: 'accessories'
      }
      ,
      {
        id: 13,
        name: 'Leash',
        image: 'acc3.png',
        price: 700,
        filter: 'accessories'
      }
      ,
      {
        id: 14,
        name: 'Shoulder Bag',
        image: 'acc4.png',
        price: 2600,
        filter: 'accessories'
      }
      ,
      {
        id: 15,
        name: 'bag',
        image: 'acc5.png',
        price: 1500,
        filter: 'accessories'
      }
      ,
      {
        id: 16,
        name: 'house',
        image: 'acc6.png',
        price: 5500,
        filter: 'accessories'
      }
      ,
      {
        id: 17,
        name: 'Collar',
        image: 'acc7.png',
        price: 1000,
        filter: 'accessories'
      },
      {
        id: 18,
        name: 'Bowls',
        image: 'acc8.png',
        price: 550,
        filter: 'accessories'
      }

      ,
      {
        id: 19,
        name: 'Carrier',
        image: 'acc9.png',
        price: 4000,
        filter: 'accessories'
      }



    ];
    let listCards = [];
    function initApp() {
      products.forEach((value, key) => {
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
    function addToCard(key) {
      if (listCards[key] == null) {
        // copy product form list to list card
        listCards[key] = JSON.parse(JSON.stringify(products[key]));
        listCards[key].quantity = 1;
      }
      reloadCard();
    }
    function reloadCard() {
      listCard.innerHTML = '';
      let count = 0;
      let totalPrice = 0;
      listCards.forEach((value, key) => {
        totalPrice = totalPrice + value.price;
        count = count + value.quantity;
        if (value != null) {
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
    function changeQuantity(key, quantity) {
      if (quantity == 0) {
        delete listCards[key];
      } else {
        listCards[key].quantity = quantity;
        listCards[key].price = quantity * products[key].price;
      }
      reloadCard();
    }
    function filterItems(filter) {
      list.innerHTML = ''; // Clear the existing items in the list

      products.forEach((value, key) => {
        if (value.filter === filter) {
          let newDiv = document.createElement('div');
          newDiv.classList.add('item');
          newDiv.innerHTML = `
        <div class= "container">
          <div class= "row">
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
        }
      });
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
  </script>
  <script src="https://code.jquery.com/jquery-3.7.0.min.js"
    integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
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