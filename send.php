<?php
session_start();
require_once ('dbcon.php');
require_once ('PHPMailerAutoload.php');

$mail = new PHPMailer;
/*For live server, disable isSMTP*/
$mail->isSMTP();

if (isset($_POST['send'])) {

$email = $_POST['email'];
$last_name = $_POST['lastname'];
$facility_name = $_POST['facilityname'];
$event_date = $_POST['eventdate'];
$remarks = $_POST['remarks'];
$contact = $_POST['contact_num'];

        $mail->Host='smtp.gmail.com';
        $mail->Port='587';
        $mail->SMTPAuth=true;
        $mail->SMTPSecure='tls';

        $mail->Username='adrianetroyalariao@gmail.com';
        $mail->Password='parad0x09363800180092062889860977662815909127676216';

        $mail->setFrom('adrianetroyalariao@gmail.com', 'Troy');
        $mail->addAddress($email);
        $mail->addReplyTo('adrianetroyalariao@gmail.com');

        $mail->isHTML(true);
        $mail->Subject='RVMSC Schedule request';
        $mail->Body= 'Good day Mr/Ms.'.$last_name.'<br>'.'Your request to use the facility '.$facility_name.' for the date '.$event_date.' has been '.$remarks.'.';
        if (!$mail->send()) {
            echo "Message could not be sent...";
        } else {
            $_SESSION['status'] = "<h5 align='center' style='color:green'>"."Sent Successfully!"."</h5>";
            header ("Location: requests.php");
        }

        /*$message = 'Good day Mr/Ms.'.$last_name.'\n'.'Your request to use the facility '.$facility_name.' for the date '.$event_date.' has been '.$remarks.'.';

        send_sms($contact, $message);
        function send_sms($contact, $message) {
        $parameters = array(
        'apikey' => '744c43ea737197a86c975589277fdc4b',
        'number' => $contact,
        'message' => $message,
        'sendername' => 'Adriane Troy Alariao' 
        );
        curl_setopt( $ch, CURLOPT_URL,'http://api.semaphore.co/api/v4/messages' );
        curl_setopt( $ch, CURLOPT_POST, 1 );

        //Send the parameters set above with the request
        curl_setopt( $ch, CURLOPT_POSTFIELDS, http_build_query( $parameters ) );

        } */
}
?>