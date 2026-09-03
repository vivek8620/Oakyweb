<?php
header('Content-Type: application/json');
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$data = json_decode(file_get_contents("php://input"), true);

$mail_host = "smtp.gmail.com";
$mail_username = "info@oakyweb.com";
$mail_password = "fvduhupcjushbpji";
$mail_port = 587;

try {
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = $mail_host;
    $mail->SMTPAuth = true;
    $mail->Username = $mail_username;
    $mail->Password = $mail_password;
    $mail->SMTPSecure = 'tls';
    $mail->Port = $mail_port;

    // FROM MUST MATCH SMTP USERNAME
    $mail->setFrom($mail_username, $data['from_name']);
    $mail->addAddress($data['to_address'], $data['to_name']);

    $mail->isHTML(true);
    $mail->Subject = $data['subject'];
    $mail->Body = $data['bodydesc'];

    $mail->send();
    echo json_encode(["status" => "success"]);
} catch (Exception $e) {
    echo json_encode(["status" => "error", "message" => $mail->ErrorInfo]);
}
?>
