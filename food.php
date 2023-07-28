<!DOCTYPE html>
<html lang="en">

<?php
include("header.php");
?>
<body style="background-color: rgb(243, 155, 184) ;">
  <?php
  include("nav.php");
  ?>


  <!-- cat category start -->
  <h1 class="cat-heading">"FOOD"</h1>

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





  <!-- CARDS STARTS -->
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
        name: 'Whiskas',
        image: 'catfood1.png',
        price: 2200,
        filter: 'food'
      },
      {
        id: 2,
        name: 'Me-O',
        image: 'catfood8.png',
        price: 1800,
        filter: 'food'
      }
      ,
      {
        id: 3,
        name: 'Josera',
        image: 'catfood3.png',
        price: 4000,
        filter: 'food'
      }
      ,
      {
        id: 4,
        name: 'Meaoon',
        image: 'catfood4.png',
        price: 2600,
        filter: 'food'
      }
      ,
      {
        id: 5,
        name: 'Reflex',
        image: 'catfood5.png',
        price: 3100,
        filter: 'food'
      }
      ,
      {
        id: 6,
        name: 'Kitty Kat',
        image: 'catfood6.png',
        price: 2300,
        filter: 'food'
      }
      ,
      {
        id: 7,
        name: 'Whiskas Jelly',
        image: 'jelly1.png',
        price: 500,
        filter: 'food'
      }
      ,
      {
        id: 8,
        name: 'Felix',
        image: 'jelly2.png',
        price: 550,
        filter: 'food'
      }
      ,
      {
        id: 9,
        name: 'Brit',
        image: 'jelly3.png',
        price: 650,
        filter: 'food'
      },
      {
        id: 10,
        name: 'Royal Canin',
        image: 'jelly4.png',
        price: 450,
        filter: 'food'
      },
      {
        id: 11,
        name: 'Applaws',
        image: 'jelly5.png',
        price: 800,
        filter: 'food'
      }
      ,
      {
        id: 12,
        name: 'Josera Jelly',
        image: 'jelly6.png',
        price: 300,
        filter: 'food'
      }, {
        id: 13,
        name: 'Ultra',
        image: 'food01.png',
        price: 2200,
        filter: 'food'
      },
      {
        id: 14,
        name: 'Pedigree',
        image: 'food2.png',
        price: 1800,
        filter: 'food'
      }
      ,
      {
        id: 15,
        name: 'Hypro',
        image: 'food3.png',
        price: 4000,
        filter: 'food'
      }
      ,
      {
        id: 16,
        name: 'Woof',
        image: 'food4.png',
        price: 2600,
        filter: 'food'
      }
      ,
      {
        id: 17,
        name: 'Puppy paw',
        image: 'food5.png',
        price: 3100,
        filter: 'food'
      }
      ,
      {
        id: 18,
        name: 'Pedigree',
        image: 'food6.png',
        price: 2300,
        filter: 'food'
      }
      ,
      {
        id: 19,
        name: 'Pedigree',
        image: 'dogjelly1.png',
        price: 500,
        filter: 'food'
      }
      ,
      {
        id: 20,
        name: 'Husky',
        image: 'dogjelly02.png',
        price: 550,
        filter: 'food'
      }
      ,
      {
        id: 21,
        name: 'Bona Cibo',
        image: 'dogjelly3.png',
        price: 650,
        filter: 'food'
      },
      {
        id: 22,
        name: 'Winalot',
        image: 'dogjelly4.png',
        price: 450,
        filter: 'food'
      },
      {
        id: 23,
        name: 'Whiskas',
        image: 'dogjelly5.png',
        price: 800,
        filter: 'food'
      }
      ,
      {
        id: 24,
        name: 'Cesar',
        image: 'dogjelly6.png',
        price: 300,
        filter: 'food'
      },


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
</div>
</div>  `
        list.appendChild(newDiv);
      })
    }
    initApp();
    function addToCard(key) {
      if (listCards[key] == null) {
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
</div>
</div>`;
          list.appendChild(newDiv);
        }
      });
    }
  // CARDS END
  </script>
  <!-- script -->
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

</body>

</html>