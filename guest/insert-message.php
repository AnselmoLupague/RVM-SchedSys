<?php
require_once ('../dbcon.php');
require_once ('../PHPMailerAutoload.php');

$mail = new PHPMailer;
/*For live server, disable isSMTP*/
$mail->isSMTP();

if (isset($_POST['send'])) {

$full_name = $_POST['full_name'];
$email = $_POST['email'];
$website = ($_POST['website']);
$message = ($_POST['message']);
  //inputs are okay to be saved to the database
  if( empty($name_err) &&
      empty($email_err) &&
      empty($msg))
    {
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $insert_query = "INSERT INTO feedback (full_name, email, website, message)
        VALUES (?, ?, ?, ?)";
        
        $insert = $pdo->prepare($insert_query);
        $insert->execute(array($full_name, $email, $website, $message));
        
        $mail->Host='smtp.gmail.com';
        $mail->Port='587';
        $mail->SMTPAuth=true;
        $mail->SMTPSecure='tls';

        $mail->Username='adrianetroyalariao@gmail.com';
        $mail->Password='parad0x09363800180092062889860977662815909127676216';

        $mail->setFrom('adrianetroyalariao@gmail.com', 'Troy');
        $mail->addAddress('201880015@psu.palawan.edu.ph');
        $mail->addReplyTo('adrianetroyalariao@gmail.com');

        $mail->isHTML(true);
        $mail->Subject='RVMSC Feedback';
        $mail->Body= $message;
        if (!$mail->send()) {
            echo "Message could not be sent...";
        } else {
            header ("Location: web-tab-aboutus.php");
        }
    }

}
?>