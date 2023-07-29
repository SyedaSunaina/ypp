// LOGIN
// JavaScript code for handling user-btn and close-btn clicks
document.getElementById('user-btn').addEventListener('click', function () {
  document.getElementById('overlay').style.display = 'block';
  document.body.style.overflow = 'hidden'; // Prevent scrolling in the background
});

document.getElementById('close-btn').addEventListener('click', function () {
  document.getElementById('overlay').style.display = 'none';
  document.body.style.overflow = 'auto'; // Allow scrolling again
});
// MENU
function onclickmenu() {
  document.getElementById("menu").classList.toggle("icon");
  document.getElementById("nav").classList.toggle("change");
  document.getElementById("li").classList.toggle("icon");
}
// CARD SOUNDS

  // Define an object with the card names and their corresponding audio file paths
  const cardSongs = {
    'Cat': 'assets/sounds/cat.mp3',
    'Dog': 'assets/sounds/dog.mp3'
  };

  // Get all flip card elements
  const flipCards = document.querySelectorAll('.flip-card');

  // Add event listener to each flip card
  flipCards.forEach(flipCard => {
    flipCard.addEventListener('mouseover', () => {
      // Get the card name from the back side
      const cardName = flipCard.querySelector('.flip-card-back h1').innerText;

      // Get the corresponding song path from the cardSongs object
      const songPath = cardSongs[cardName];

      // Play the song if a valid path is found
      if (songPath) {
        const audio = new Audio(songPath);
        audio.currentTime = 0; // Restart the song if it's already playing
        audio.play();
      }
    });
  });
document.querySelectorAll('.num').forEach(function (element) {
    let valueDisplay = element;
    let startValue = 0;
    let endValue = parseInt(valueDisplay.getAttribute('data-val'));
    let interval = 6000;
    let duration = Math.floor(interval / endValue);

    let counter = setInterval(function () {
        startValue += 1;
        valueDisplay.textContent = startValue;
        if (startValue == endValue) {
            clearInterval(counter);
        }
    }, duration);
});
// TESTIMONALS
document.addEventListener('DOMContentLoaded', function () {
  var clientSingles = document.querySelectorAll('.client-single');

  clientSingles.forEach(function (clientSingle) {
    clientSingle.addEventListener('click', function (event) {
      event.preventDefault();

      var active = this.classList.contains('active');
      var parent = this.closest('.testi-wrap');

      if (!active) {
        var activeBlock = parent.querySelector('.client-single.active');
        var currentPos = this.getAttribute('data-position');
        var newPos = activeBlock.getAttribute('data-position');

        activeBlock.classList.remove('active', newPos);
        activeBlock.classList.add('inactive', currentPos);
        activeBlock.setAttribute('data-position', currentPos);

        this.classList.remove('inactive', currentPos);
        this.classList.add('active', newPos);
        this.setAttribute('data-position', newPos);
      }
    });
  });
});


 

document.addEventListener("DOMContentLoaded", function(event) {
      
      
  const cartButtons = document.querySelectorAll('.cart-button');

   cartButtons.forEach(button => {

            button.addEventListener('click',cartClick);

   });

   function cartClick(){
    let button =this;
    button.classList.add('clicked');
   }
  
  
  
});
/*document.addEventListener('DOMContentLoaded', function () {
  const form = document.getElementById('myForm');
  const formOverlay = document.getElementById('form-overlay');
  const overlayContent = formOverlay.querySelector('.overlay-content');
  const submitButton = form.querySelector('button[name="submit"]');
  const closeButton = formOverlay.querySelector('.close-button');

  submitButton.addEventListener('click', function (e) {
    e.preventDefault(); // Prevent form submission

    // Get form input values
    const firstName = document.getElementById('firstName').value;
    const lastName = document.getElementById('lastName').value;
    const email = document.getElementById('emailAddress').value;
    const gender = document.querySelector('input[name="gender"]:checked').nextElementSibling.textContent;
    const birthday = document.getElementById('birthdayDate').value;
    const phoneNumber = document.getElementById('phoneNumber').value;

    // Update overlay with submitted information
    document.getElementById('submittedFirstName').textContent = `First Name: ${firstName}`;
    document.getElementById('submittedLastName').textContent = `Last Name: ${lastName}`;
    document.getElementById('submittedEmail').textContent = `Email: ${email}`;
    document.getElementById('submittedGender').textContent = `Gender: ${gender}`;
    document.getElementById('submittedBirthday').textContent = `Birthday: ${birthday}`;
    document.getElementById('submittedPhoneNumber').textContent = `Phone Number: ${phoneNumber}`;

    // Show the form overlay
    formOverlay.style.display = 'flex';
  });

  closeButton.addEventListener('click', function () {
    formOverlay.style.display = 'none'; // Hide the form overlay when the close button is clicked
  });

  formOverlay.addEventListener('click', function (e) {
    if (e.target === formOverlay) {
      formOverlay.style.display = 'none'; // Hide the form overlay when clicked outside the content
    }
  });
});*/

// shop cart
document.getElementById("submit").addEventListener("click", function () {
  alert("Successfully");
});
document.querySelector('.cart-button').addEventListener('click', function () {
  document.getElementById('cart-shop-open').style.display = 'block';
  document.getElementById('cart-shop').style.display = 'none';
});
