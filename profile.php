<?php
require_once('DBconnect.php');
session_start();
$email = $_SESSION['email'];
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
    <!-- Home Css file connect -->
    <link rel="stylesheet" href="css/profile.css" />

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
          </ul>
        </div>
      </div>
    </nav>

    <!-- section one code -->
    <section class="sec-1">
        <h1 style = "margin: 1em 0em;"><?php
        if ($email == "admin47@gmail.com"){
          echo "Admin Profile";
        } else{
          echo "User Profile";
        }
        ?></h1>
        <div class="box">

        <?php
            $sql_table = "SELECT f_name, l_name, email, password, gender, id, b_date, p_number from user where email = '$email'";
            $result_table = mysqli_query($conn, $sql_table);

            if(mysqli_num_rows($result_table) != 0){
            while($row = mysqli_fetch_assoc($result_table) ){


?>


            <div class= "box-left">
                <div><h5>Name: <span><?php echo $row['f_name'], " ",$row['l_name'];?></span></h5></div>
                <div><h5>Email: <span><?php echo $row['email'];?></span></h5></div>
                <div><h5>Password: <span><?php echo $row['password'];?></span></h5></div>
                <div><h5>Gender: <span><?php echo $row['gender'];?></span></h5></div>
            </div>
            <div class= "box-right">
                <div><h5>Id: <span><?php echo $row['id'];?></span></h5></div>
                <div><h5>Birth Date: <span><?php echo $row['b_date'];?></span></h5></div>
                <div><h5>Number: <span><?php echo '0', $row['p_number'];?></span></h5></div>
            </div>

<?php }}?>
        </div>
    </section>

</body>
</html>