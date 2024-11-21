<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php'; // Make sure to adjust the path as needed

function generateOTP() {
    return random_int(100000, 999999);
}

function sendEmail($receiverEmail, $subject, $body) {
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Set the SMTP server to send through
        $mail->SMTPAuth = true;
        $mail->Username = 'priyanshu25122002@gmail.com'; // Your email
        $mail->Password = 'stqqwjqoocucknsx'; // Your email password (use environment variable in production)
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Recipients
        $mail->setFrom('priyanshu25122002@gmail.com', 'OTP Sender');
        $mail->addAddress($receiverEmail);

        // Content
        $mail->isHTML(false);
        $mail->Subject = $subject;
        $mail->Body = $body;

        $mail->send();
        return true;
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        return false;
    }
}

function isValidEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

function getInput($prompt) {
    echo $prompt;
    return trim(fgets(STDIN));
}

// Main logic
$name = getInput("Enter your name: ");
$receiverEmail = getInput("Enter your email id: ");

while (!isValidEmail($receiverEmail)) {
    echo "Invalid email id. Please try again.\n";
    $receiverEmail = getInput("Enter your email id: ");
}

$otp = generateOTP();
$subject = "OTP verification using PHP";
$body = "Dear $name,\n\nYour OTP is $otp.";

if (sendEmail($receiverEmail, $subject, $body)) {
    echo "OTP has been sent to $receiverEmail\n";
    $receivedOTP = (int)getInput("Enter OTP: ");
   
    if ($receivedOTP === $otp) {
        echo "OTP verified\n";
    } else {
        echo "Invalid OTP\n";
        $answer = strtolower(getInput("Enter 'yes' to resend OTP to the same email or 'no' to enter a new email id: "));
       
        if ($answer === 'yes') {
            $newOtp = generateOTP();
            $body = "Dear $name,\n\nYour new OTP is $newOtp.";
            if (sendEmail($receiverEmail, $subject, $body)) {
                echo "New OTP has been sent to $receiverEmail\n";
                $receivedOTP = (int)getInput("Enter OTP: ");
                if ($receivedOTP === $newOtp) {
                    echo "OTP verified\n";
                } else {
                    echo "Invalid OTP. Verification failed.\n";
                }
            }
        } elseif ($answer === 'no') {
            $receiverEmail = getInput("Enter new email id: ");
            while (!isValidEmail($receiverEmail)) {
                echo "Invalid email id. Please try again.\n";
                $receiverEmail = getInput("Enter new email id: ");
            }
            $newOtp = generateOTP();
            $body = "Dear $name,\n\nYour OTP is $newOtp.";
            if (sendEmail($receiverEmail, $subject, $body)) {
                echo "OTP has been sent to $receiverEmail\n";
                $receivedOTP = (int)getInput("Enter OTP: ");
                if ($receivedOTP === $newOtp) {
                    echo "OTP verified\n";
                } else {
                    echo "Invalid OTP. Verification failed.\n";
                }
            }
        } else {
            echo "Invalid input\n";
        }
    }
}