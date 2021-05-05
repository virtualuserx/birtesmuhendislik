<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function uniquePost($posted) {
    // take some form values
    $description = $posted['username'].$posted['usermail'].$posted['usermessage']; 
    // check if session hash matches current form hash
    if (isset($_SESSION['form_hash']) && $_SESSION['form_hash'] == md5($description) ) {
       // form was re-submitted return false
       return false;
    }
    // set the session value to prevent re-submit
    $_SESSION['form_hash'] = md5($description);
    return true;
}



if (isset($_POST["btnSubmit"])) {


$username= $_POST['username'];
$usermail= $_POST['usermail'];
$userphone= $_POST['userphone'];
$usermessage= $_POST['usermessage'];

$messageall= "";
$messageall.= "Adı Soyadı: $username <br> ";
$messageall.= "Mail Adresi: $usermail <br> ";
$messageall.= "Telefon Numarası: $userphone <br> ";
$messageall.= "Mesajı: $usermessage <br> ";

//Load Composer's autoloader
require 'PHPMailer\src\PHPMailer.php';
require 'PHPMailer\src\SMTP.php';
require 'PHPMailer\src\Exception.php';

//Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);
$mail->CharSet = 'UTF-8';

try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    
    $mail->SMTPDebug = 0;                      

    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'webcontactmessages@gmail.com';                     //SMTP username
    $mail->Password   = 'contactpassword999';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('webcontactmessages@gmail.com','WEB-İLETİŞİM');
    //$mail->addAddress('info@birtesmuhendislik.com','BİRTES');     //Add a recipient
    $mail->addAddress('info@birtesmuhendislik.com','BİRTES MÜHENDİSLİK');               //Name is optional
    $mail->addReplyTo("$usermail", "$username");
    //$mail->addCC('aliadiguzel968@gmail.com');
    //$mail->addBCC('aliadiguzel968@gmail.com');

    //Attachments

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Sitenizden iletişim formu gönderildi!!';
    $mail->Body    = $messageall;
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    //echo 'Message has been sent';
    // echo "<script>
    //         alert('Mesajınız Başarı ile iletildi.');
    //     </script>";
    //header("Location:contact.php#mailme?success=1");

    header("Location: http://localhost/birtesmuhendislik/contact.php?success=1#mailme");
    die();

} catch (Exception $e) {
   // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    
   header("Location: http://localhost/birtesmuhendislik/contact.php?action=done#mailme");
   die();

}




echo "<script>
         location.href = '#';
          location.href = '#mailme';
       </script>";



//exit();
//die();
}


?>