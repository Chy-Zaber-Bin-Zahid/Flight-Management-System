<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Flight Management System</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="plane_nav.png" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
      crossorigin="anonymous"
    />
    <!-- Home Css file connect -->
    <link rel="stylesheet" href="css/home.css" />

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet"> 

    <!-- favicon -->
    <link rel="shortcut icon" href="images/plane_nav.png" type="image/x-icon">

    <style>
      body{
        font-family: 'PT Serif', serif;
      }
    </style>

  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-primary nav-all">
      <div class="container-fluid">
        <a class="navbar-brand" href="home.php">𝐹𝓁𝓎 𝒽𝒾𝑔𝒽 <span><img style = "width: 45px; height: 37px;" src="images/plane_nav.png" alt=""></span></a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse nav-element-left" id="navbarNav">
          <ul class="navbar-nav nav-ul">
            <li class="nav-item nav-li">
              <a class="nav-link nav-right active" aria-current="page" href="home.php"
                >Home</a
              >
            </li>
            <li class="nav-item nav-li">
              <a class="nav-link nav-right active show-modal" href="#about">About Us</a>
            </li>
            <li class="nav-item nav-li">
              <a class="nav-link nav-right active show-modal" href="sign_in.php">Sign In</a>
            </li>
            <li class="nav-item nav-li">
              <a class="nav-link nav-right active" href="sign_up.php">Sign Up</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Carousel -->
    <div
      id="carouselExampleCaptions"
      class="carousel slide"
      data-bs-ride="false"
    >
      <div class="carousel-indicators car-color-btn">
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide-to="0"
          class="active clr-cng"
          aria-current="true"
          aria-label="Slide 1"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide-to="1"
          class="active clr-cng"
          aria-label="Slide 2"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide-to="2"
          class="active clr-cng"
          aria-label="Slide 3"
        ></button>
      </div>
      <div class="carousel-inner car-all">
        <div class="carousel-item active">
          <img src="images/cover_photo-1.png" class="d-block w-100" alt="..." />
          <div class="carousel-caption d-none d-md-block car-text-img">
            <h5>Hello flyers,</h5>
            <p>Welcome onboard with the best flying partner out there.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img
            src="images/slide2.jpg"
            class="d-block w-100"
            alt="..."
          />
          <div class="carousel-caption d-none d-md-block car-text-img">
            <h5>Switzerland</h5>
            <p>Switzerland is famous for its mesmerizing alpine scenery, luxury branded watches, and deliciously milky chocolate.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img
            src="images/slide5.jpg"
            class="d-block w-100"
            alt="..."
          />
          <div class="carousel-caption d-none d-md-block car-text-img text">
            <h5>Tour Luxurious Dubai</h5>
            <p>Dubai is much bigger and has more entertainment options, nightlife, family activities, luxury hotels, and plenty of budget options.</p>
          </div>
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <!-- section places -->
    <section class="sec-1">
      <div class="sec-1-div">
        <div class="sec-1-inside inside-border-right">
          <img class="inside" src="images/taj-mahal.jpg" alt="" />
          <h1 class="inside">Taj Mahal</h1>
          <p class="inside">It is a masterpiece of architectural style in conception, treatment and execution and has unique aesthetic qualities in balance, symmetry and harmonious blending of various elements. Integrity is maintained in the intactness of tomb, mosque, guest house, main gate and the whole Taj Mahal complex.
          </p>
        </div>
        <div class="sec-1-inside inside-border-right">
          <img
            class="inside"
            src="images/france-paris-eiffel-tower.jpg"
            alt=""
          />
          <h1 class="inside">Eiffel Tower</h1>
          <p class="inside">
          The Eiffel Tower is 1,063 feet (324 meters) tall, including the antenna at the top. Without the antenna, it is 984 feet (300 m). It was the world's tallest structure until the Chrysler Building was built in New York in 1930. The tower was built to sway slightly in the wind, but the sun affects the tower more.
          </p>
        </div>
        <div class="sec-1-inside">
          <img class="inside" src="images/statue.jpg" alt="" />
          <h1 class="inside">Statue of liberty</h1>
          <p class="inside">
          The Statue of Liberty Enlightening the World" was a gift of friendship from the people of France to the United States and is recognized as a universal symbol of freedom and democracy. The Statue of Liberty was dedicated on October 28, 1886. It was designated as a National Monument in 1924.
          </p>
        </div>
      </div>
    </section>

    <!-- section for contract -->
    <section id="about">
        <div class="about-left-inside color-l-to-r">
          <div class="about-left left">
              <img src="images/24_hour.jpg" alt="">
          </div>
          <div class="about-left right">
              <h1>24/7 Service</h1>
              <p>We provide 24/7 services and you can reach us anytime with any issues.</p>
          </div>
        </div>
        <div class="about-left-inside color-r-to-l">
          <div class="about-left left">
              <h1>Best Deals</h1>
              <p>We also offer discounts for your trip and can get you to the best deal according to your preference.</p>
          </div>
          <div class="about-left right">  
              <img src="images/deal.jpg" alt="">
          </div>
        </div>
    </section>

    <!-- Bootstrap JavaScript -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
