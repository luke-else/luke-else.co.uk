<?php
// Check for empty fields
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../phpmailer/Exception.php';
require '../phpmailer/PHPMailer.php';
require '../phpmailer/SMTP.php';

//Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);


if ($_POST['name'] != null && $_POST['email'] != null && $_POST['message'] != null) {
  try {
      //Server settings
      $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
      $mail->isSMTP();                                            //Send using SMTP
      $mail->Host       = 'in-v3.mailjet.com';                   //Set the SMTP server to send through
      $mail->SMTPAuth   = true; 
      $mail->Username = '';
      $mail->Password = '';                 
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
      $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

      //Recipients
      $mail->setFrom('contact@luke-else.co.uk');
      $mail->addAddress('contact@luke-else.co.uk');     //Add a recipient


      //Content
      $mail->isHTML(true);                                  //Set email format to HTML
      $mail->Subject = 'Website Contact Form: ' . $_POST['email'];
      $mail->Body    = 
      '<br /><b> Name: </b>' . $_POST['name'] . 
      '<br /> <b>E-Mail: </b>' . $_POST['email'] .  
      '<br /><br /> <b>Message: </b><br />' . $_POST['message'];

      $mail->send();
      
  } catch (Exception $e) {
    // error_log($e);
    // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    http_response_code(500);
  }
}else{
  http_response_code(500);
}




?>
