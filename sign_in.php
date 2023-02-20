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
    <link rel="stylesheet" href="css/sign_in.css" />

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

    <!-- sign in part -->
    <section class="sec-1">
        <form id="login-area" action="logIn.php" method = "post">
            <h1 class="text-center" style="color: black; font-weight: bold; border-bottom: 1px solid black; width: 15%; margin: auto; padding-bottom: .1em;">
            Sign <span style="color: black">In</span></h1>
            <div class="submit-area">
            <input id = "name" required type="email" class="form-control" placeholder="Email" name="email" />
            <br />
            <input id = "password" required type="password" class="form-control" placeholder="Password" name="pass" />
            <br />
            <!-- <button id="login" class="btn btn-success">Enter</button> -->
            <input id="submit" class="btn btn-dark" type="submit" value = "Sign In">
            <p class="dont-have" style="color: gray;">Don't have an account? <a href="sign_up.php"><span class="dont-have" style="color: black;">Sign <span class="dont-have" style="color: black;">Up</span></span></a></p>
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
