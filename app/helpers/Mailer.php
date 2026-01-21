<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$basePath = dirname(__DIR__); // app/

require_once $basePath . '/libs/PHPMailer-master/PHPMailer-master/src/Exception.php';
require_once $basePath . '/libs/PHPMailer-master/PHPMailer-master/src/PHPMailer.php';
require_once $basePath . '/libs/PHPMailer-master/PHPMailer-master/src/SMTP.php';

class Mailer
{
    public static function send($to, $subject, $body)
    {
        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;

            $mail->Username   = 'shima.200@gmail.com';
            $mail->Password   = 'APP_PASSWORD_HERE';

            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;

            $mail->setFrom('shima.200@gmail.com', 'Dar Lmaalem');
            $mail->addAddress($to);

            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body    = $body;

            $mail->send();
            return true;

        } catch (Exception $e) {
            // echo $mail->ErrorInfo; exit;
            return false;
        }
    }
}
