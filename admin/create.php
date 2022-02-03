<?php
    session_start();

    include_once('../dbcon.php');
    if (!isset($_SESSION["admin"])) {
      header ("Location: login.php");
    }

    if(isset($_POST['create'])) {
        $title_evt = $_POST['title'];
        $descr = $_POST['descr'];
        $start = $_POST['start'];
        $end = $_POST['end'];
        $facility = $_POST['facility'];


        $query = "INSERT INTO events (title, event_desc, start_event, end_event, color_evt) 
        VALUES ('$title_evt', '$descr', '$start', '$end', '$facility')";

        $query_run = mysqli_query($conn, $query);

        if ($query_run) {
            $_SESSION['status'] = "<h3 align='center' style='color:green'>"."Event Added Successfully."."</h3>";
            header ("Location: index.php");
        } else {
            $_SESSION['status'] = "<h3 align='center' style='color:red'>"."There was an error"."</h3>";
            header ("Location: index.php");

        }
    }
?>