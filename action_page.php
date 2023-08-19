<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["Name"];
    $email = $_POST["Email"];
    $subject = $_POST["Subject"];
    $message = $_POST["Message"];
    
    $to = "vedantbodhe@gmail.com";
    $headers = "From: $email" . "\r\n" . "Reply-To: $email" . "\r\n" . "X-Mailer: PHP/" . phpversion();
    
    mail($to, $subject, $message, $headers);
    
    // Redirect back to your website after sending the email
    header("Location: thank-you.html"); // Change to your actual thank you page URL
    exit;
}
?>
