<?php
  session_start();
  $con = mysqli_connect("localhost", "root", "", "rstr");
  if($_SERVER['REQUEST_METHOD'] == "POST"){
    $phn = $_POST["phn"];
    $psw = $_POST["psw"];

    $chk_phn = mysqli_query($con, "SELECT * FROM `account` WHERE phoneno = '$phn' && password = '$psw'");
    $row = mysqli_num_rows($chk_phn);
    $admin = mysqli_query($con,"SELECT * FROM `admacc` WHERE phn = '$phn' && psw = '$psw'");
    $admrow = mysqli_num_rows($admin);

    if($admrow == 1){  
      $_SESSION['phn'] = $phn;
      $_SESSION['psw'] = $psw;
      header("Location: bookinglist.php");
    }
    else if($row == 1){
      $_SESSION['phn'] = $phn;
      $_SESSION['psw'] = $psw;
      header("Location: Home.php");
    }else if($row == 0){
        $phn_err = "invalid phone number or password*";
    }
  }
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home | Cuisine</title>
    <link rel="stylesheet" href="./reset.css" />
    <link rel="stylesheet" href="./globalStyles.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="./home.css">
    <link rel="stylesheet" href="./login.css">
      <style>
    .err {
      color: red;
      font-size: 12px;
      padding: 5px 0;
    }
  </style>
  </head>
  <body>
    <!-- Nav BAr-->
      <div class="nav">
      <div class="container">
        <div class="nav__wrapper">
          <a href="./index.html" class="nav__logo">
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
                <form action="" method="POST" class="form"> 
                  <span class="err"><?php if(isset($phn_err)) echo $phn_err;?></span>   
                    <div class="form__group">
                      
                        <label for="phone">Phone Number</label>
                        <input type="text" name="phn">
                        
                    </div>
                    <div class="form__group">
                        <label for="pswd">Password</label>
                        <input type="password" name="psw">
                    </div>
                    <div class="form__group">
                        <a href="SignupPage.php">Create account</a>
                    </div>
                    <div class="form__group">
                        <button type="submit" class="btn primary-btn">Login</button>
                    </div>
                </form>
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
