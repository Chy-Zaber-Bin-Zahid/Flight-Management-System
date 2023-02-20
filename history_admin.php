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
    <link rel="stylesheet" href="css/history_admin.css" />

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
          </ul>
        </div>
      </div>
    </nav>

    <!-- section one table -->
    <section class="sec-1">
        <div class="whole-table">
            <div class="title">
                <h1>Ticket Sell History</h1>
            </div>
            <div class="table main-td">
                <div class="td-element"><h5>From</h5></div>
                <div class="td-element"><h5>To</h5></div>
                <div class="td-element"><h5>Starting Date</h5></div>
                <div class="td-element"><h5>Payment</h5></div>
                <div class="td-element"><h5>Email</h5></div>
                <div class="td-element"><h5>Flight Id</h5></div>
                <div class="td-element"><h5>Flight Name</h5></div>
                <div class="td-element"><h5>Flight Time</h5></div>
                <div class="td-element"><h5>Flight Cost</h5></div>
            </div>

            <?php
            require_once('DBconnect.php');
            session_start();
            $email = $_SESSION['email'];
            $sql_table = "SELECT * from history";
            $result_table = mysqli_query($conn, $sql_table);

            if(mysqli_num_rows($result_table) != 0){
            while($row = mysqli_fetch_assoc($result_table) ){


?>
            <div class="table">
                <div class="td-element-sub"><h5><?php echo $row['from'];?></h5></div>
                <div class="td-element-sub"><h5><?php echo $row['to'];?></h5></div>
                <div class="td-element-sub"><h5><?php echo $row['buy_date'];?></h5></div>
                <div class="td-element-sub"><h5><?php echo $row['payment'];?></h5></div>
                <div class="td-element-sub"><h5><?php echo $row['email'];?></h5></div>
                <div class="td-element-sub"><h5><?php echo $row['f_id'];?></h5></div>
                <div class="td-element-sub"><h5><?php echo $row['f_name'];?></h5></div>
                <div class="td-element-sub"><h5><?php echo $row['f_time'];?></h5></div>
                <div class="td-element-sub"><h5><?php echo $row['f_cost'];?></h5></div>
            </div>

<?php }} ?>
            

        </div>
    </section>

 </body>
</html>