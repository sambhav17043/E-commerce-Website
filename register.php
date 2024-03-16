<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    // Your email address where you want to receive notifications
    $to = "sambhavdudhwewala17034@gmail.com";
    $subject = "New registration";
    $message = "Full Name: $fullName\nEmail: $email\nPassword: $password\n";

    // Send email notification
    mail($to, $subject, $message);

    // Display success message
    echo "Thank you for registering. We've sent a notification to $to.";
} else {
    // If the form is not submitted, redirect back to the registration form
    header("Location: registrationForm.html");
    exit();
}
?>
