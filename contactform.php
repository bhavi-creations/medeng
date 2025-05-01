<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Adjust the path to autoload.php based on your project

// Check if the form is submitted
//-----Contact form------

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Assign POST data to variables
    $contactname = $_POST['name'] ?? '';
    $contactparents = $_POST['parents'] ?? '';
    $contactPrimarynumber = $_POST['Primary Number'] ?? '';
    $contactSecondarynumber = $_POST['Secondary Number'] ?? '';

    $contactSchoolname = $_POST['School name'] ?? '';
    $contactaddress = $_POST['Address'] ?? '';
    $contactRemarks = $_POST['Remarks'] ?? '';

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
            <p><strong>Father/Mother:</strong>$contactparents</p>
           <p><strong> Pimary Number:</strong>$contactPrimarynumber</p>

            <p><strong>Secondary number:</strong> $contactSecondarynumber </p>
            <p><strong>School:</strong> $contactSchoolname</p>
            <p><strong>Address:</strong> $contactaddress</p>
            <p><strong>Remarks:</strong>$contactRemarks</p>
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
