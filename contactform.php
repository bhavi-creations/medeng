<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Adjust the path to autoload.php based on your project

// Check if the form is submitted
//-----Contact form------

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Assign POST data to variables
    $contactname = $_POST['name'] ?? '';
    $contactparent = $_POST['parent'] ?? '';
    $contactprimary = $_POST['primary'] ?? '';
    $contactsecondary = $_POST['secondary'] ?? '';

    $contactschool= $_POST['school'] ?? '';
    $contactmarks= $_POST['marks'] ?? '';
    $contactgroup= $_POST['group'] ?? '';
    $contactaddress = $_POST['address'] ?? '';
    $contactremarks = $_POST['remarks'] ?? '';

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // Server settings for Gmail SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'medengjuniorcollege@gmail.com'; // Your Gmail email address
        $mail->Password = 'evhj jqzu tfch djxn'; // Your Gmail password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Recipients
        $mail->setFrom('medengjuniorcollege@gmail.com', 'Medeng junior college '); // Your Gmail email and name
        $mail->addAddress('medengjuniorcollege@gmail.com', 'Medeng junior college '); // Recipient's email and name

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'New Message from Contact Form';
        $mail->Body = "
           
            <h1>Contact Details</h1>
            <p><strong>Name:</strong> $contactname</p>
  f          <p><strong>Father/Mother:</strong>  $contactparent</p>
           <p><strong> Pimary Number:</strong>  $contactprimary </p>

            <p><strong>Secondary number:</strong>     $contactsecondary </p>
            <p><strong>School:</strong>    $contactschool</p>
            <p><strong>Marks:</strong>    $contactmarks</p>
            <p><strong>Gruop:</strong>    $contactgroup</p>
            <p><strong>Address:</strong> $contactaddress</p>
            <p><strong>Remarks:</strong>$contactremarks</p>
        ";

        $mail->send();
        echo '<script> window.alert("Message has been sent.\n\nPlease click OK."); window.location.href="index.php";</script>';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    // If accessed directly without POST data
    echo 'Access Denied';
}
