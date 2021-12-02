<?php
    session_start();
    include_once('../dbcon.php');

    if(isset($_POST['ind_req'])) {
        $fname = $_POST['fname'];
        $mname = $_POST['mname'];
        $lname = $_POST['lname'];
        $ind_email = $_POST['ind_email'];
        $contact_num = $_POST['contact_num'];
        $facility_name = $_POST['facility'];
        $ind_time = $_POST['ind_time'];

        $file = addslashes(file_get_contents($_FILES['fileToUpload']['tmp_name']));

        $fileName =  $_FILES['fileToUpload']['name'];
        $fileTmpName =  $_FILES['fileToUpload']['tmp_name'];
        $fileSize =  $_FILES['fileToUpload']['size'];
        $fileError =  $_FILES['fileToUpload']['error'];
        $fileType =  $_FILES['fileToUpload']['type'];

        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));

        $allowed = array('jpg', 'jpeg', 'png');

        if (in_array($fileActualExt, $allowed)) {
            if ($fileError === 0) {
                if ($fileSize < 500000) {
                    $fileNameNew = $lname.", ".$fname.".".$fileActualExt;
                    $fileDestination = '../upload/'.$fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);

                    $query = "INSERT INTO individual_requests (fname, mname, lname, ind_email, contact_num, facility, eventdt, img_id)
                    VALUES ('$fname', '$mname', '$lname', '$ind_email', '$contact_num', '$facility_name', '$ind_time', '$file')";

                    $query_run = mysqli_query($conn, $query);

                        if ($query_run) {
                            $_SESSION['status'] = "<h3 align='center' style='color:green'>"."Submitted Successfully!"."</h3>";
                            header ("Location: web-tab-request.php");
                        }
                } else {
                    $_SESSION['status'] = "<h3 align='center' style='color:green'>"."Your file is too big."."</h3>";
                    header ("Location: web-tab-request.php");
                }
            } else {
                $_SESSION['status'] = "<h3 align='center' style='color:red'>"."There was an error uploading your file.."."</h3>";
                header ("Location: web-tab-request.php");
            }
        } else {
            $_SESSION['status'] = "<h3 align='center' style='color:red'>"."You can not upload file of this type."."</h3>";
            header ("Location: web-tab-request.php");
        }
    }
?>