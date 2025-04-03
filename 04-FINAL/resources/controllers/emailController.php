<?php
    use PHPMailer\PHPMailer\PHPMailer;

    function sendEmail($email, $asunto, $mensaje) {
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'sandbox.smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Username = 'f5907410412e44';
        $mail->Password = 'dc9abde6f6e2e5';
        $mail->Port = 25;
        $mail->SMTPSecure = 'tls';
        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';
        $mail->setFrom('noreply@raices.com', 'Contacto');

        $mail->addAddress($email);
        $mail->Subject = $asunto;
        $mail->Body = $mensaje;

        if($mail->send()){
            $emailSent = true;
        }
    }
?>