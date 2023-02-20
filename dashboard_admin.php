<?php
require_once('DBconnect.php');
session_start();

$email = $_SESSION['email'];
$pass = $_SESSION['pass'];
$_SESSION['email'] = $email;


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
    <link rel="stylesheet" href="css/dashboard_admin.css" />

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
                >Log Out</a
              >
          </ul>
        </div>
      </div>
    </nav>

    <!-- user profile -->
    <section class="sec-1">
        <div class="profile">
        <a style="text-decoration: none; color: black;" href="profile.php">
            <img src="images/admin_profile.jpg" alt="">
            <span id="user-name"><?php
            $sql2 = "SELECT DISTINCT f_name, l_name FROM `user` where email = '$email'";
            $result2 =  mysqli_query($conn, $sql2);
            $row2 = mysqli_num_rows($result2);

            if($row2>0){
              while($rowProfile = mysqli_fetch_assoc($result2) ){?>

                <?php echo $rowProfile['f_name'], " ",$rowProfile['l_name'];?>
            </span>
            <?php }}?>
      </a>
        </div>
        <div class="ticket-title">
            <h1>Ticket buying panel</h1>
        </div>
    </section>

    <!-- ticket select option -->
    <section class="sec-2">
        <div class="option">
            <div style ="border: 1px dotted yellow; padding: .3em 0em; background-color: gray;" class="adjust"><a href="history_admin.php">Ticket Sold</a></div>
            <div style ="border: 1px dotted yellow; padding: .3em 0em; background-color: gray;" class="adjust"><a href="available_admin.php">Available Ticket</a></div>
        </div>
        <div class="ticket-select">
            <div class="card" style="width: 50rem;">
                <form class="form" action="ticket.php" method = "post">
                    <div>
                        <h5>From</h5>
                        <select class = "sel" name="from">
                          <?php
                          $sql1 = "SELECT DISTINCT f_from FROM `flight`";
                          $result1 = mysqli_query($conn, $sql1);
                          $rows = mysqli_num_rows($result1);
                          // echo "Rows ", $rows
                          if($rows>0){
                            while($row = mysqli_fetch_assoc($result1) ){
                          ?>
                            
                            <option name="from" value="<?php echo $row['f_from'] ?>"><?php echo $row['f_from'] ?></option>
                            
                            <?php } } 
                        
                        ?>
                        </select>
                        
                        <h5>Buying Date</h5>
                        <select class = "sel" name="buy" id="">
                        <?php
                                $sql1 = "SELECT DISTINCT f_date FROM `flight`";
                                $result1 = mysqli_query($conn, $sql1);
                                $rows = mysqli_num_rows($result1);
                                if($rows>0){
                                while($row = mysqli_fetch_assoc($result1) ){
                        ?>

                            <option name="buy" value="<?php echo $row['f_date']?>">

                              <?php echo $row['f_date'] ?>
                              </option>

                              <?php } }  ?>
                        </select>
                        <br>
                        <span class="passenger">Adult</span>
                        <select class="ad-ch" name="adult">
                            <option name="adult" value="0">0</option>
                            <option name="adult" value="1">1</option>
                            <option name="adult" value="2">2</option>
                            <option name="adult" value="3">3</option>
                            <option name="adult" value="4">4</option>
                        </select>
                        <span class="passenger p-child">Child</span>
                        <select class="ad-ch" name="child">
                            <option name="child" value="0">0</option>
                            <option name="child" value="1">1</option>
                            <option name="child" value="2">2</option>
                            <option name="child" value="3">3</option>
                            <option name="child" value="4">4</option>
                        </select>
                        <br>
                        <input style="margin: .7em 0em 0em 0em;" id="submit" class="btn btn-dark" type="submit" value = "Submit">
                    </div>
                    <div>
                
                        <h5>To</h5>
                        <select class = "sel" name="to">
                        <?php
                        $sql1 = "SELECT DISTINCT f_to FROM `flight`";
                        $result1 = mysqli_query($conn, $sql1);
                        $rows = mysqli_num_rows($result1);
                        if($rows>0){
                        while($row = mysqli_fetch_assoc($result1) ){
                          
                        ?>
                              <option name="to" value = "<?php echo $row['f_to']?>">

                              <?php echo $row['f_to']?>
                              </option>

                              <?php } }  ?>
                        </select>
                        <h5>Phone Number</h5>
                        <input class="above-input" type="tel" required placeholder = "Phone Number" name="num">
                        <h5>Payment Method</h5>
                        <select class = "sel" name="payment">
                            <option name="payment" value="Bkash">Bkash</option>
                            <option name="payment" value="Nagad">Nagad</option>
                            <option name="payment" value="Debit card">Debit card</option>
                            <option name="payment" value="Credit card">Credit card</option>
                        </select>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <section class="plane-booking">
      <img src="images/plane booking.gif" alt="">
    </section>

    <!-- Bootstrap JavaScript -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
