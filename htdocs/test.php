

<?php

require_once ('PHPMailer/PHPMailerAutoload.php');

$mail = new PHPMailer();
$mail -> isSMTP();
$mail -> SMTPAuth();
$mail -> SMTPSecure = 'ssl';
$mail ->Host='smtp.gmail.com';
$mail ->Port = '465';
$mail ->isHTML();
$mail ->Username='aliciafernandes573@gmail.com';
$mail ->Password='@Emily0801';
$mail -> SetFrom('no-reply@howcode.org');
$mail ->Subject='Hello';
$mail ->Body='A test Email';

try {
    if ($mail->Send()) {
        echo "Mail is sent";
    } else echo "Failed to sent";
} catch (phpmailerException $e) {
}
