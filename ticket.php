<?php
require_once('DBconnect.php');
session_start();

$email = $_SESSION['email'];

if(isset($_POST['from']) && isset($_POST['to']) && isset($_POST['buy']) && isset($_POST['adult']) && isset($_POST['child']) && isset($_POST['payment']) && $_POST['num']){
    $from = $_POST['from'];
    $to = $_POST['to'];
    $num = $_POST['num'];
    $buy_date = $_POST['buy'];
    $adult = $_POST['adult'];
    $child = $_POST['child'];
    $payment = $_POST['payment'];
  

    $sql_check = "SELECT available from flight WHERE f_from = '$from' AND f_to = '$to' AND f_date = '$buy_date'";

    $result_check = mysqli_query($conn, $sql_check);

    if (mysqli_num_rows($result_check) != 0) {
        while($row_check = mysqli_fetch_assoc($result_check) ){
            $flight_av_check = $row_check['available']-($adult+$child);
        }
      }

    if($flight_av_check<0){
      header("Location: dashboard_user.php");
    } else{

    

    if ($adult == '0' && $child == '0') {
      header("Location: dashboard_user.php");
    }else{
      $sql_check = "SELECT f_id, f_name, f_time, adult_cost, child_cost, available from flight WHERE f_from = '$from' AND f_to = '$to' AND f_date = '$buy_date'";

      $result_check = mysqli_query($conn, $sql_check);
  
      if (mysqli_num_rows($result_check) != 0) {
          while($row_check = mysqli_fetch_assoc($result_check) ){
              $flight_id = $row_check['f_id'];
              $flight_name = $row_check['f_name'];
              $flight_time = $row_check['f_time'];
              $flight_cost_adult = substr($row_check['adult_cost'],1);
              $flight_cost_child = substr($row_check['child_cost'],1);
              $flight_cost_total = ($flight_cost_adult * $adult) + ($flight_cost_child * $child);
              $flight_available = $row_check['available']-($adult+$child);
          }
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
            <link rel="stylesheet" href="css/ticket.css" />

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
                        >Log Out</a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
        
            <!-- section one -->
            <section class="sec-1">
              <form class="form" action="">
                <div class="border">
                  <h1 class= "ticket-up">E-Ticket</h1>
                  <div class= "ticket-bottom">
                    <div class = "ticket-left class="ticket-both"">
                        <?php
                    $sql_add = "INSERT INTO ticket_info VALUES ('$from', '$to', '$buy_date', '$num', '$payment', '$adult', '$child', '$email')";

                    mysqli_query($conn, $sql_add);


                    $sql1 = "SELECT user.f_name, user.l_name, user.id, ticket_info.from, ticket_info.to, ticket_info.payment, ticket_info.adult, ticket_info.child, ticket_info.buy_date from user inner join ticket_info on user.email = ticket_info.email";
                    $result1 = mysqli_query($conn, $sql1);
                    $rows = mysqli_num_rows($result1);
                    // echo "Rows ", $rows
                    if($rows>0){
                    while($row = mysqli_fetch_assoc($result1) ){
                        $from = $row['from'];
                        $to = $row['to'];
                        $buy_date = $row['buy_date'];
                        $payment = $row['payment'];
        
        
        ?>
                      <h5 class="ticket-both">Name: <span><?php echo $row['f_name'], " ", $row['l_name']?></span> </h5>
                      
                      <h5 class="ticket-both">From: <span><?php echo $from?></span></h5>
                      <h5 class="ticket-both">Flight Id: <span><?php echo $flight_id?></span></h5>
                      <h5 class="ticket-both">Starting Date <span><?php echo $buy_date?></span></h5>
                      <h5 class="ticket-both">Adult: <span><?php echo$row['adult']?></span></h5>
                      <h5 class="ticket-both">Payment Method: <span><?php echo $payment?></span></h5>
                  </div>
                    <div class = "ticket-right">
                      <h5 class="ticket-both">Id: <span><?php echo$row['id']?></span></h5>
                      <h5 class="ticket-both">To: <span><?php echo $to?></span></h5>
                      <h5 class="ticket-both">Flight Name: <span><?php echo $flight_name?></span></h5>
                      <h5 class="ticket-both">Flight Time: <span><?php echo $flight_time?></span></h5>
                      <h5 class="ticket-both">Child: <span><?php echo$row['child']?></span></h5>
                      <h5 class="ticket-both">Payment Cost: <span><?php echo '$',$flight_cost_total?></span></h5>
                      <?php }}?>
                  </div>
                  </div>
                  <input style = "font-weight: bold;" class="btn btn-dark" type="submit" value = "Print">
                  <!-- onclick="window.print()" -->
                </div>
              </form>
            </section>
        
            <!-- section two -->
            <section class="sec-2">
              <div class= "sec-2-images"><img src="images/ticket.gif" alt=""></div>
              <div class= "sec-2-images"><img src="images/plane slide away.gif" alt=""></div>
            </section>
            </body>
            </html>

        <?php
        $flight_cost_total = '$'.$flight_cost_total;

        $sql_history = "INSERT INTO history VALUES ('$from', '$to', '$buy_date', '$payment', '$email', '$flight_id', '$flight_name', '$flight_time', '$flight_cost_total')";

        mysqli_query($conn, $sql_history);

        $sql_available = "UPDATE flight set available = $flight_available where f_id = '$flight_id'";

        mysqli_query($conn, $sql_available);

        $sql_delete_info = "DELETE from ticket_info where email = '$email'";

        mysqli_query($conn, $sql_delete_info);

         
    }
   else{

    header("Location: dashboard_user.php");
  }
  }
}
  
}



?>
         

