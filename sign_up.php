<?php
require_once('DBconnect.php');
session_start();


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Flight Management System</title>
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
      crossorigin="anonymous"
    />
    <!-- Sign In Css file connect -->
    <link rel="stylesheet" href="css/sign_up.css" />

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
                >Home</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- sign up part -->
    <section class="sec-1">
        <form class="sign-up-main" action="create.php" method = "post" id="login-area">
            <div class="two-part left-part common">
                <img src="images/sign_up.jpg" alt="">
            </div>
            <div class="two-part right-part common">
                <div class="right-first right-back">
                    <h5>First Name</h5>
                    <input type="text" placeholder="First Name" name = "fname">
                    <h5>Last Name</h5>
                    <input type="text" placeholder="Last Name" name = "lname">
                    <h5>Email</h5>
                    <input type="text" placeholder="Email" name = "email">
                    <h5>Date of Birth</h5>
                    <input type="date" placeholder="Birth Date" name = "bdate">
                    <div>
                        <input class="btn btn-dark" type="submit" value = "Sign Up">
                        <h4 style="color: gray;">Already a member? <a href="sign_in.php"><span style="color: black;">Sign </span><span style="color: black;">In</span></a></h4>
                    </div>
                </div>
                <div class="right-last right-back">
                    <h5>Password</h5>
                    <input type="password" placeholder="Password" name = "pass">
                    <h5>Phone Number</h5>
                    <input type="tel" placeholder="Phone Number" name = "num">
                    <h5>Gender</h5>
                    <input type="radio" value="Male" name = "gender">
                    <label for="male">Male</label><br>
                    <input type="radio" value="Female" name = "gender">
                    <label for="female">Female</label><br>
                    <input type="radio" value="Other" name = "gender">
                    <label for="other">Other</label>
                </div>
            </div>
        </form>
    </section>

    <!-- Bootstrap JavaScript -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
      crossorigin="anonymous"
    ></script>

  </body>
</html>
