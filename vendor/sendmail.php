<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;

    require 'phpmailer/src/Exception.php';
    require 'phpmailer/src/PHPMailer.php';
    require_once 'phpmailer/src/SMTP.php';

    $mail = new PHPMailer(true);
    $mail->CharSet = 'UTF-8';
    $mail->setLanguage('ru', 'phpmailer/language/');
    $mail->IsSMTP();
    $mail->SMTPDebug = 0;

    $mail->Host = 'smtp.mail.ru';
    $mail->SMTPAuth = true;
    $mail->Username = 'ra@mail.ru';
    $mail->Password = '******';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
         
    $mail->setFrom('ra@mail.ru', 'PDF c сайта');
    $mail->addAddress($_POST['email_telegram']);
    $phpmailer->Sender = 'ra@mail.ru';
    $mail->isHTML(true);
    $mail->Subject = 'Заявка с сайта';

    $_POST = file_get_contents("php://input");
    $body = implode(", ", $_POST);

    $mail->Body = '' .$body;

    if (!$mail->send()) {
        echo 'Error';
      } else {
        echo 'Good';
      };

    $response = $body;

    header('Content-type: application/json');
    echo json_encode($response);

?>