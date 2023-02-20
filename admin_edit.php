<?php
require_once('DBconnect.php');
session_start();

if (isset($_POST['add']) == 'Add') {
    if(isset($_POST['id']) && isset($_POST['from']) && isset($_POST['adult']) && isset($_POST['ticket']) && isset($_POST['sdate']) && isset($_POST['name']) && isset($_POST['to']) && isset($_POST['child']) && isset($_POST['time'])){
        $id = $_POST['id'];
        $from = $_POST['from'];
        $child = $_POST['child'];
        $adult = $_POST['adult'];
        $ticket = $_POST['ticket'];
        $sdate = $_POST['sdate'];
        $name = $_POST['name'];
        $to = $_POST['to'];
        $time = $_POST['time'];

        $sql = "SELECT f_id from flight where f_id = '$id'";

        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) != 0){
                header("Location: available_admin.php");
                
        }else{
            // echo "Username and Password is wrong";
            $sql_add = "INSERT INTO flight VALUES ('$id', '$name', '$from', '$to', '$sdate', '$time', '$adult', '$ticket', '$child')";

            mysqli_query($conn, $sql_add);
            header("Location: available_admin.php");
        }
    
}


    } elseif(isset($_POST['modify']) == 'Modify'){
    if(isset($_POST['id']) && isset($_POST['from']) && isset($_POST['adult']) && isset($_POST['ticket']) && isset($_POST['sdate']) && isset($_POST['name']) && isset($_POST['to']) && isset($_POST['child']) && isset($_POST['time'])){
        $id = $_POST['id'];
        $from = $_POST['from'];
        $child = $_POST['child'];
        $adult = $_POST['adult'];
        $ticket = $_POST['ticket'];
        $sdate = $_POST['sdate'];
        $name = $_POST['name'];
        $to = $_POST['to'];
        $time = $_POST['time'];

        $sql_add = "UPDATE flight set f_id = '$id', f_name = '$name', f_from = '$from', f_to = '$to', f_date = '$sdate', f_time = '$time', adult_cost = '$adult', available = '$ticket', child_cost = '$child' where f_id = '$id'";

            mysqli_query($conn, $sql_add);
            header("Location: available_admin.php");
    }
}else {
    if(isset($_POST['id']) && isset($_POST['from']) && isset($_POST['adult']) && isset($_POST['ticket']) && isset($_POST['sdate']) && isset($_POST['name']) && isset($_POST['to']) && isset($_POST['child']) && isset($_POST['time'])){
        $id = $_POST['id'];
        $from = $_POST['from'];
        $child = $_POST['child'];
        $adult = $_POST['adult'];
        $ticket = $_POST['ticket'];
        $sdate = $_POST['sdate'];
        $name = $_POST['name'];
        $to = $_POST['to'];
        $time = $_POST['time'];
    }

        $sql_add = "DELETE from flight where f_id = '$id'";

            mysqli_query($conn, $sql_add);
            header("Location: available_admin.php");

}

?>