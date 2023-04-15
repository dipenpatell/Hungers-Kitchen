<?php
  session_start();
   $phone = $_SESSION['phn'];
  if($phone == true){

  }else{
    header('Location: index.php');
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Menu | Cuisine</title>
    <link rel="stylesheet" href="reset.css" />
    <link rel="stylesheet" href="globalStyles.css" />
    <link rel="stylesheet" href="components.css" />
    <link rel="stylesheet" href="bookinglist.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
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
                    <a href="./Home.php" class="nav__link">Home</a>
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
                    <a href="./bookinglist.php" class="btn primary-btn">Booking List</a>
                  </li>
                
              </ul>
            </div>
          </nav>
        </div>
      </div>
    <!-- End Nav BAr-->
    <div class="container">
      <h3 class="form__title">Booking List</h3>
      <div class="req__wrapper">
        <div class="reqs">
          <div class="req__inwrapper">
          <div class="req__group">
            <div class="h 0">No.</div>
            <div class="h 1">Name</div>
              <div class="h 3">Phone No.</div>
              <div class="h 4">Table Type</div>
              <div class="h 5">Guest Number</div>
              <div class="h 6">Placement</div>
              <div class="h 7">Date</div>
              <div class="h 8">Time</div>
              <div class="h 9" style="background-color: var(--lightGreen-1)"></div>
              
<?php
    $con = mysqli_connect("localhost", "root", "", "rstr");

    $query = "SELECT * FROM booktable";
    $data = mysqli_query($con, $query);
    $total = mysqli_num_rows($data);
    


    if($total !=0){
      $i = 0;
      while($result = mysqli_fetch_assoc($data)){
        $i ++;  
        echo  '
              <div>'.$result["id"].'</div>
               <div class="d1">'.$result["FirstName"].' '.$result['LastName'].'</div>
              <div class="d3">'.$result['Email'].'</div>
              <div class="d4">'.$result['TableType'].'</div>
              <div class="d5">'.$result['GuestNumber'].'</div>
              <div class="d6">'.$result['placement'].'</div>
              <div class="d7">'.$result['date'].'</div>
              <div class="d8">'.$result['time'].'</div>
              <div class="d9" style=" background-color: var(--lightGreen-1);"><a href="delrec.php?id='.$result["id"].'"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="12" height="12" viewBox="0 0 30 30" style=" fill:#000000;">    <path d="M 7 4 C 6.744125 4 6.4879687 4.0974687 6.2929688 4.2929688 L 4.2929688 6.2929688 C 3.9019687 6.6839688 3.9019687 7.3170313 4.2929688 7.7070312 L 11.585938 15 L 4.2929688 22.292969 C 3.9019687 22.683969 3.9019687 23.317031 4.2929688 23.707031 L 6.2929688 25.707031 C 6.6839688 26.098031 7.3170313 26.098031 7.7070312 25.707031 L 15 18.414062 L 22.292969 25.707031 C 22.682969 26.098031 23.317031 26.098031 23.707031 25.707031 L 25.707031 23.707031 C 26.098031 23.316031 26.098031 22.682969 25.707031 22.292969 L 18.414062 15 L 25.707031 7.7070312 C 26.098031 7.3170312 26.098031 6.6829688 25.707031 6.2929688 L 23.707031 4.2929688 C 23.316031 3.9019687 22.682969 3.9019687 22.292969 4.2929688 L 15 11.585938 L 7.7070312 4.2929688 C 7.5115312 4.0974687 7.255875 4 7 4 z"></path></svg>
              </a></div>
              
            ';
    
      }
    }else{
      echo "no Bookings*";
    }
?>
            </div>
          </div>
        </div>
      </div>
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
