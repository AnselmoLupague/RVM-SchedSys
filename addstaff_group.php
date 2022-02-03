<?php
    session_start();
    include_once('dbcon.php');

    if(isset($_POST['add'])) {
        $title = $_POST['title'];
        $description = $_POST['descr'];
        $facility_name = $_POST['facility_name'];
        $num_participants = $_POST['numParticipants'];
        $date_grp = $_POST['date'];
        $start_grp = $_POST['start'];
        $end_grp = $_POST['end'];
        $rname = $_POST['rname'];
        $email_grp = $_POST['email'];
        $con_num = $_POST['contact'];

        $file = $_FILES['fileToUpload']['tmp_name'];

        $fileName =  $_FILES['fileToUpload']['name'];
        $fileTmpName =  $_FILES['fileToUpload']['tmp_name'];
        $fileSize =  $_FILES['fileToUpload']['size'];
        $fileError =  $_FILES['fileToUpload']['error'];
        $fileType =  $_FILES['fileToUpload']['type'];

        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));

        $allowed = array('doc', 'docx', 'pdf', );

        if (in_array($fileActualExt, $allowed)) {
            if ($fileError === 0) {
                if ($fileSize < 1000000) {
                    $fileNameNew = $title.".".$fileActualExt;
                    $fileDestination = 'upload/'.$fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);

                    $query = "INSERT INTO group_requests (title, desc_grp, facility_use, num_par, event_dt, start_grp, end_grp, req_name, email_add, con_num, doc_upl)
                    VALUES ('$title', '$description', '$facility_name', '$num_participants', '$date_grp', '$start_grp', '$end_grp', '$rname', '$email_grp', '$con_num', '$fileNameNew')";

                    $query_run = mysqli_query($conn, $query);

                        if ($query_run) {
                            $_SESSION['status'] = "<h3 align='center' style='color:green'>"."Submitted Successfully!"."</h3>";
                            header ("Location: add_staff.php");
                        }
                } else {
                    $_SESSION['status'] = "<h3 align='center' style='color:red'>"."Your file is too big."."</h3>";
                    header ("Location: add_staff.php");
                }
            } else {
                $_SESSION['status'] = "<h3 align='center' style='color:red'>"."There was an error uploading your file.."."</h3>";
                header ("Location: add_staff.php");
            }
        } else {
            $_SESSION['status'] = "<h3 align='center' style='color:red'>"."You can not upload file of this type."."</h3>";
            header ("Location: add_staff.php");
        }
    } else {
        echo "Error";
    }
?>