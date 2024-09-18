<?php 
// Including the library PHP Mailer in our file
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';


// Send email using that library
// PHPMailer has a class name that is PHPMailer



function sendEmail($toEmail, $subject, $body) {
    $mail = new PHPMailer();

    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'toptechschooledu.com';                 //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'azeem@toptechschooledu.com';           //SMTP username
        $mail->Password   = '0gq6XJ9uB8L6';                         //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`



        //Recipients
        $mail->setFrom('azeem@toptechschooledu.com', 'Top Tech School | Azeem');

        $mail->addAddress($toEmail);     //Add a recipient
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = $body;

        $mail->send();
        echo 'Message has been sent';


    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}




if(isset($_POST['send-msg-btn'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $msg = $_POST['message'];


    $msgBody = "Name: $name <br>Email Address: $email <br>Phone: $phone <br><br>Message: $msg";


    sendEmail('azeemakram1997@gmail.com', $subject, $msgBody);
}






?>