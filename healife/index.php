<!DOCTYPE html>
<html lang="en">

<?php
session_start();

include ("php/config.php");
if (isset($_SESSION['valid'])) {
  header("Location: home.php");
}
?>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 
    - primary meta tag
  -->
  <title>Healife - The Best Program to Enroll for Healthcare</title>
  <meta name="title" content="Healife - The Best Program to Enroll for Healthcare">
  <meta name="description" content="This is an education html template made by codewithsadee">

  <!-- 
    - favicon
  -->
  <link rel="icon" type="image/x-icon" href="./assets/images/red-heart-icon-png-2.png">
  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;500;600;700;800&family=Poppins:wght@400;500&display=swap"
    rel="stylesheet">

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="./assets/images/hero-bg.svg">
  <link rel="preload" as="image" href="./assets/images/AI-in-Healthcare.jpg">
  <link rel="preload" as="image" href="./assets/images/Wordpress-featured-images-48-1672795987342.jpg">
  <link rel="preload" as="image" href="./assets/images/pho-thong-nang-khieu-logo.png">
  <link rel="preload" as="image" href="./assets/images/hero-shape-2.png">

</head>

<body id="top">

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <a href="#" class="logo">
        <img src="./assets/images/red-heart-icon-png-2.png" width="80" height="50" alt="Healife logo">
      </a>

      <nav class="navbar" data-navbar>

        <div class="wrapper">
          <a href="#" class="logo">
            <center>
              <img src="./assets/images/red-heart-icon-png-2.png" width="100" height="50" alt="Healife logo">
              <h1>Healife</h1>
            </center>

          </a>

          <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
            <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
          </button>
        </div>

        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="#home" class="navbar-link" data-nav-link>Home</a>
          </li>

          <li class="navbar-item">
            <a href="#about" class="navbar-link" data-nav-link>About</a>
          </li>

          <li class="navbar-item">
            <a href="#sectioncategory" class="navbar-link" data-nav-link>Functions</a>
          </li>



          <li class="navbar-item">
            <a href="#contact" class="navbar-link" data-nav-link>Contact</a>
          </li>

        </ul>

      </nav>

      <div class="header-actions">

        <!-- <button class="header-action-btn" aria-label="toggle search" title="Search">
       
          <ion-icon name="search-outline" aria-hidden="true"></ion-icon>
        </button>
        -->


        <a href="login.php" class="btn has-before">
          <span class="span">Login</span>

          <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
        </a>

        <a href="register.php" class="btn has-before">
          <span class="span">Register</span>

          <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
        </a>



        <button class="header-action-btn" aria-label="open menu" data-nav-toggler>
          <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
        </button>

      </div>

      <div class="overlay" data-nav-toggler data-overlay></div>

    </div>
  </header>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="section hero has-bg-image" id="home" aria-label="home"
        style="background-image: url('./assets/images/hero-bg.svg')">
        <div class="container">

          <div class="hero-content">

            <h1 class="h1 section-title">
              The Best Program to <span class="span">Enroll</span> for <p style="color:blue">Healthcare</p>
            </h1>

            <p class="hero-text">
            <h2>
              <p style="color:deepskyblue">Health is important </p>
            </h2>
            </p>
            <br>

            <a href="#about" class="btn has-before">
              <span class="span">More about us</span>

              <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
            </a>

          </div>

          <figure class="hero-banner">

            <div class="img-holder one" style="--width: 270; --height: 300;">
              <img src="./assets/images/GettyImages-515311245.jpg" width="270" height="300" alt="hero banner"
                class="img-cover">
            </div>

            <div class="img-holder two" style="--width: 240; --height: 370;">
              <img src="./assets/images/TR_Healthcare-Medical-Trends_Feature.webp" width="240" height="370"
                alt="hero banner" class="img-cover">
            </div>

            <img src="./assets/images/images.jpg" width="380" height="190" alt="" class="shape hero-shape-1">

            <img src="./assets/images/hero-shape-2.png" width="622" height="551" alt="" class="shape hero-shape-2">

          </figure>

        </div>
      </section>





      <!-- 
        - #CATEGORY
      -->

      <section class="section category" aria-label="category">
        <div class="container">

          <p class="section-subtitle" style="font-size:40px;">Categories</p>

          <h2 class="h2 section-title">
            Special <span class="span">Functions</span> For Healthcare.
          </h2>

          <p class="section-text">
            “Good health is not something we can buy. However, it can be an extremely valuable savings account.” <br>–
            Anne Wilson Schaef
          </p>
          <ul class="grid-list">
            <li>
              <div class="category-card">
                <!--
                <div class="card-icon">
                  <img src="./assets/images/category-2.svg" width="40" height="40" loading="lazy"
                    alt="Non-Degree Programs" class="img">
                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">Non-Degree Programs</a>
                </h3>

                <p class="card-text">
                  Lorem ipsum dolor consec tur elit adicing sed umod tempor.
                </p>

                <span class="card-badge">4 Courses</span>
-->
              </div>
            </li>


            <li>
              <div class="category-card" style="--color: 170, 75%, 41%">

                <div class="card-icon">
                  <img src="./assets/images/category-1.svg" width="40" height="40" loading="lazy" alt="Nutrition"
                    class="img">
                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">
                    <p style="color: rgb(247, 108, 16); font-weight: bolder;">Nutrition </p>
                  </a>
                </h3>

                <p class="card-text">
                  - Quản lí dinh dưỡng
                  <br>

                  - Lên kế hoạch dinh dưỡng
                  <br>
                  - Theo dõi chỉ số cơ thể
                </p>

                <span class="card-badge"><a href="./login.php"
                    style="font-size: 20px; font-weight: bolder; letter-spacing: 3px;">Click here</a></span>

              </div>
            </li>






            <li>
              <div class="category-card" style="--color: 42, 94%, 55%">

                <div class="card-icon">
                  <img src="./assets/images/category-4.svg" width="40" height="40" loading="lazy"
                    alt="Health prediction" class="img">
                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">
                    <p style="color: rgb(35, 16, 247); font-weight: bolder;">Health prediction </p>
                  </a>
                </h3>

                <p class="card-text">
                  - Thư viện bệnh đa dạng
                  <br>
                  - Dựa trên triệu chứng
                  <br>
                  - Dự đoán loại bệnh
                </p>

                <span class="card-badge"><a href="./login.php"
                    style="font-size: 20px; font-weight: bolder; letter-spacing: 3px;">Click here</span></a>

              </div>
            </li>

            <li>
              <div class="category-card">
                <!--
                <div class="card-icon">
                  <img src="./assets/images/category-3.svg" width="40" height="40" loading="lazy"
                    alt="Off-Campus Programs" class="img">
                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">Off-Campus Programs</a>
                </h3>

                <p class="card-text">
                  Lorem ipsum dolor consec tur elit adicing sed umod tempor.
                </p>

                <span class="card-badge">8 Courses</span>
-->
              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #ABOUT
      -->

      <section class="section about" id="about" aria-label="about">
        <div class="container">

          <figure class="about-banner">

            <div class="img-holder" style="--width: 520; --height: 370;">
              <img src="./assets/images/386359258_261010316918996_1480190153507534564_n.jpg" width="520" height="370"
                loading="lazy" alt="about banner" class="img-cover">
            </div>



            <img src="./assets/images/pho-thong-nang-khieu-logo.png" width="371" height="220" loading="lazy" alt=""
              class="shape about-shape-2">

            <img src="./assets/images/about-shape-3.png" width="722" height="528" loading="lazy" alt=""
              class="shape about-shape-3">

          </figure>

          <div class="about-content">

            <p class="section-subtitle">About Us</p>

            <h2 class="h2 section-title">
              VNUHCM <span class="span">10TIN2</span> <br>at Tin học trẻ
            </h2>

            <p class="section-text">
              - Nguyễn Hải Đăng
              <br>
              - Lê Trường Minh Đăng
            </p>

            <ul class="about-list">

              <li class="about-item">
                <ion-icon name="checkmark-done-outline" aria-hidden="true"></ion-icon>

                <span class="span">Thiết kế</span>
              </li>

              <li class="about-item">
                <ion-icon name="checkmark-done-outline" aria-hidden="true"></ion-icon>

                <span class="span">Viết báo cáo</span>
              </li>

              <li class="about-item">
                <ion-icon name="checkmark-done-outline" aria-hidden="true"></ion-icon>

                <span class="span">Tham gia dự thi</span>
              </li>
              <a href="https://ptnk.edu.vn/" class="btn has-before">
                <span class="span">More information about our school</span>

                <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
              </a>
            </ul>

            <img src="./assets/images/about-shape-4.svg" width="100" height="100" loading="lazy" alt=""
              class="shape about-shape-4">

          </div>

        </div>
      </section>






      <br>
      <br>



      <!-- 
        - #VIDEO
      -->

      <section class="video has-bg-image" aria-label="video"
        style="background-image: url('./assets/images/video-bg.png')">
        <div class="container">

          <div class="video-card">
            <!-- 
            <div class="video-banner img-holder has-after" style="--width: ; --height: ;">
              <img src="" width="970" height="550" loading="lazy" alt="video banner"
                class="img-cover">

              <button class="play-btn" aria-label="play video">
                <ion-icon name="play" aria-hidden="true"></ion-icon>
              </button>
            </div> -->

            <img src="./assets/images/video-shape-1.png" width="1089" height="605" loading="lazy" alt=""
              class="shape video-shape-1">

            <img src="./assets/images/video-shape-2.png" width="158" height="174" loading="lazy" alt=""
              class="shape video-shape-2">

          </div>

        </div>
      </section>














    </article>
  </main>



  <br>

  <br>

  <br>


  <!-- 
    - #FOOTER
  -->

  <footer class="footer" id="contact" style="background-image: url('./assets/images/footer-bg.png')">

    <div class="footer-top section">
      <div class="container grid-list">

        <div class="footer-brand">
          <center>
            <a href="#" class="logo">
              <img src="./assets/images/red-heart-icon-png-2.png" width="162" height="50" alt="Healife logo">
            </a>
          </center>
          <p class="footer-brand-text">
            <center>Dự án hệ thống thông minh hỗ trợ phát triển cơ thể </center>
          </p>

          <div class="wrapper">
            <span class="span">Add:</span>

            <address class="address">153 Đ. Nguyễn Chí Thanh, Phường 9, Quận 5, Thành phố Hồ Chí Minh</address>
          </div>

          <div class="wrapper">
            <span class="span">Call:</span>

            <a href="tel:+011234567890" class="footer-link">+0779100779</a>
          </div>

          <div class="wrapper">
            <span class="span">Email:</span>

            <a href="mailto:student230409@ptnk.edu.vn"
              class="footer-link"><br><span>student230409@ptnk.edu.vn</span><br><span>student230410@ptnk.edu.vn</span></a>
          </div>

        </div>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Online Platform</p>
          </li>

          <li>
            <a href="#" class="footer-link">About</a>
          </li>

          <li>
            <a href="#" class="footer-link">Functions</a>
          </li>





        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Links</p>
          </li>

          <li>
            <a href="#" class="footer-link">Contact Us</a>
          </li>

          <li>
            <a href="#" class="footer-link">Gallery</a>
          </li>

          <li>
            <a href="#" class="footer-link">News & Articles</a>
          </li>

          <li>
            <a href="#" class="footer-link">FAQ's</a>
          </li>

          <li>
            <a href="#" class="footer-link">Sign In/Registration</a>
          </li>

          <li>
            <a href="#" class="footer-link">Coming Soon</a>
          </li>

        </ul>

        <div class="footer-list">

          <p class="footer-list-title">Contacts</p>

          <p class="footer-list-text">
            Enter your email address to register to our newsletter subscription
          </p>

          <form action="" class="newsletter-form">
            <input type="email" name="email_address" placeholder="Your email" required class="input-field">

            <button type="submit" class="btn has-before">
              <span class="span">Subscribe</span>

              <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
            </button>
          </form>

          <ul class="social-list">

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-linkedin"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-youtube"></ion-icon>
              </a>
            </li>

          </ul>

        </div>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          Copyright 2024 All Rights Reserved by <a href="#" class="copyright-link">HEALIFE</a>
        </p>

      </div>
    </div>

  </footer>





  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn" aria-label="back top top" data-back-top-btn>
    <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js" defer></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  <script src="https://www.fireant.vn/Scripts/web/widgets.js"></script>
  <div id="fan-quote-905"></div>




</body>

</html>