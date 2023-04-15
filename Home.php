<?php
  // session_start();
  //  if( isset($_SESSION['phn'])){echo $_SESSION['phn'];}

?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home | Cuisine</title>
    <link rel="stylesheet" href="./reset.css" />
    <link rel="stylesheet" href="./globalStyles.css" />
    <link rel="stylesheet" href="./components.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="./home.css">
  </head>
  <body>
    <!-- Nav BAr-->
    
      <div class="nav">
      <div class="container">
        <div class="nav__wrapper">
          <a href="./Home.php" class="nav__logo">
            <img src="./images/logo.png" alt="LOGO" />
          </a>
          <nav>
            <div class="nav__icon">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
              >
                <line x1="3" y1="12" x2="21" y2="12" />
                <line x1="3" y1="6" x2="21" y2="6" />
                <line x1="3" y1="18" x2="21" y2="18" />
              </svg>
            </div>
            <div class="nav__bgOverlay"></div>
              <ul class="nav__list">
                <div class="nav__close">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  >
                    <line x1="18" y1="6" x2="6" y2="18" />
                    <line x1="6" y1="6" x2="18" y2="18" />
                  </svg>
                </div>
                <div class="nav__list__wrapper">
                  <li>
                    <a href="./Home.php" class="btn primary-btn">Home</a>
                  </li>   
                  <li>
                    <a href="./menu.php" class="nav__link">Menu</a>
                  </li>
                  <li>
                    <a href="./contact.php" class="nav__link">Contact</a>
                  </li>
                  <li>
                    <a href="./logout.php" class="nav__link">Logout</a>
                  </li>
                  <li>
                    <a href="./booktable.php" class="nav__link">Book Table</a>
                  </li>
                
              </ul>
            </div>
          </nav>
        </div>
      </div>
  
    <!-- End Nav BAr-->
    <!-- Hero Section 02.06-->
    <div class="bg">
      <section id="hero">
      <div class="container">
        <div class="hero__wrapper">
          <div class="hero__left">
            <div class="hero__left__wrapper">
              <h1 class="hero__heading">The Flavor of tradition</h1>
                <p class="hero__info">
                  We are a multi-cuisine retaurant offering a wide variety of food experience.
                </p>
                <div class="button__wrapper">
                  <a href="./menu.php" class="btn primary-btn">Explore Menu</a>
                  <a href="./booktable.php" class="btn">Book Table</a>
                </div>
            </div>
        </div>
        
      </div>
      </div>
    </section>
    </div>
    <!-- Footer-->
    <footer>
  <div class="container">
    <div class="footer__wrapper">
      <div class="footer__col1">
        <div class="footer__logo">
          <img src="./images/logo.png" alt="LOGO" />
        </div>
        <p class="footer__desc">
          Fresh and delicious traditional Bangladeshi food to delight the whole family.
        </p>
        <div class="footer__socials">
          <h4 class="footer__socials__title">Follow us</h4>
          <ol>
            <li>
              <a href="#">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                >
                  <path
                    d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"
                  />
                </svg>
              </a>
            </li>
            <li>
              <a href="#">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                >
                  <rect x="2" y="2" width="20" height="20" rx="5" ry="5" />
                  <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
                  <line x1="17.5" y1="6.5" x2="17.51" y2="6.5" />
                </svg>
              </a>
            </li>

            <li>
              <a href="#">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                >
                  <path
                    d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"
                  />
                </svg>
              </a>
            </li>
          </ol>
        </div>
      </div>
      <div class="footer__col2">
        <h3 class="footer__text__title">Links</h3>
        <ol class="footer__text">
          <li><a href="./home.php">Home</a></li>
          <li><a href="./menu.php">Menu</a></li>
          <li><a href="./booktable.php">Book Table</a></li>
          <li><a href="./contact.php">Contact</a></li>
          <li><a href="#">Privacy Policy</a></li>
        </ol>
      </div>
      <div class="footer__col3">
        <h3 class="footer__text__title">Support</h3>
        <ol class="footer__text">
          <li><a href="./contact.html">Contact</a></li>
          <li><a href="#">Support Center</a></li>
          <li><a href="#">Feedback</a></li>
        </ol>
      </div>
      <div class="footer__col4">
        <h3 class="footer__text__title">Contact</h3>
        <ol class="footer__text">
          <li><a href="tel:+9876543278">+9876543278</a></li>
          <li>
            <a href="mailto:hungerskitchen@gmail.com"
              >hungerskitchen@gmail.com</a
            >
          </li>
          <li><a href="#">India</a></li>
        </ol>
      </div>
    </div>
  </div>
</footer>
    <!-- End Footer-->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="./main.js"></script>
  </body>
</html>


<!-- 
 <li>
                    <a href="./index.html" class="nav__link">Home</a>
                  </li>
                  <li>
                    <a href="./menu.html" class="nav__link">Menu</a>
                  </li>
                  <li>
                    <a href="./about.html" class="nav__link">About</a>
                  </li>
                  <li>
                    <a href="./contact.html" class="nav__link">Contact</a>
                  </li>
                  <li>
                    <a href="./booking.html" class="btn primary-btn"
                      >Book Table</a
                    >
                  </li> -->
