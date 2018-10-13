<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';
//https://stackoverflow.com/questions/37524275/smtp-error-could-not-authenticate-message-could-not-be-sent-mailer-error-smt
$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'misd.excelencia@gmail.com';                 // SMTP username
    $mail->Password = 'excel.123';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('misd.excelencia@gmail.com', 'Andaman Greenland');
    $mail->addAddress($_POST['EmailId'], $_POST['CName']);     // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Andaman Greenland Contest';
    $mail->Body    = '<table><tr><td colspan="2">Hello '.$_POST["CName"].'.Your application for Andaman Greenland Contest is received.</td></tr>
    <tr><td colspan="2"><b>Details</b></td></tr><tr><td>Title</td><td>:'.$_POST["SubjectTitl"].'</td></tr>
    <tr><td>Content</td><td>:'.$_POST["ArticleText"].'</td></tr></table>';
    $mail->AltBody = 'Hello '.$_POST["CName"].'. Your application for Andaman Greenland Contest is received.Details: 
        Title:'.$_POST["SubjectTitl"].'. Content:'.$_POST["ArticleText"].'';

    $mail->send();
    echo 'OK';
} catch (Exception $e) {
    echo 'NotOK';
}
exit;

?>