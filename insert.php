<?php
include('dbcon.php');
if(isset($_POST["title"]))
{
    $title = $_POST['title'];
    $descr = $_POST['description'];
    $start = $_POST['start'];
    $end = $_POST['end'];
    $sql = "INSERT INTO events(title, event_desc, start_event, end_event) VALUES ('$title','$descr', '$start','$end')"; 
    $conn->query($sql); 
}
?>