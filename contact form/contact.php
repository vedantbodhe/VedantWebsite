<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["Name"];
    $email = $_POST["Email"];
    $subject = $_POST["Subject"];
    $message = $_POST["Message"];

    $to = "vedantbodhe@gmail.com";
    $subject = "New contact form submission from $name";
    $messageBody = "Name: $name\nEmail: $email\nSubject: $subject\nMessage: $message";

    // Send the email
    mail($to, $subject, $messageBody);

    // Optionally, redirect the user to a thank you page
    header("Location: thank-you.html");
}
?>
