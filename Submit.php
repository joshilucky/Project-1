<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = "your-email@example.com"; // Change this to your email address
    $subject = "New message from $name: $subject";
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";

    mail($to, $subject, $body);
}
?>
