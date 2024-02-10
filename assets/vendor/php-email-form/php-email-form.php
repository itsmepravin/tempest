<?php
// Replace these variables with your actual information
$to = 'pravinironside00@gmail.com';
$subject = 'Subject of the Email';
$message = 'This is the body of the email. You can include HTML tags as well.';
$headers = 'From: your_email@example.com' . "\r\n" .
    'Reply-To: your_email@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

// Use the mail() function to send the email
$mailSuccess = mail($to, $subject, $message, $headers);

if ($mailSuccess) {
    echo 'Email sent successfully!';
} else {
    echo 'Error sending email. Please check your configuration.';
}
?>
