<?php
    session_start();
    include_once('../dbcon.php');

    if (isset($_GET['updateid'])) {
        $id = $_GET['updateid'];
        $remarks = 'Approved';

        $sql = "UPDATE group_requests SET remarks='$remarks' WHERE id = $id";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            $_SESSION['status'] = "<h3 align='center' style='color:green'>"."Update Success.."."</h3>";
            header ("Location: web-tab-schedules-group.php");
        } else {
            $_SESSION['status'] = "<h3 align='center' style='color:red'>"."Update Failed."."</h3>";
            header ("Location: web-tab-schedules-group.php");
        }
    }
?>