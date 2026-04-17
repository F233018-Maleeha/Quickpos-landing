<?php
// submit.php - Contact Form Handler
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit();
}

// Sanitize inputs
$name    = trim(htmlspecialchars($_POST['name']    ?? ''));
$email   = trim(htmlspecialchars($_POST['email']   ?? ''));
$message = trim(htmlspecialchars($_POST['message'] ?? ''));

// Validate empty fields
$errors = [];
if (empty($name))    $errors[] = "Name is required.";
if (empty($email))   $errors[] = "Email is required.";
if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($email)) $errors[] = "Invalid email format.";
if (empty($message)) $errors[] = "Message is required.";

if (!empty($errors)) {
    // In a real app, redirect back with error session
    header('Location: index.php#contact');
    exit();
}

// Simulate success (in real app: send email with mail())
// Log to file for demo purposes
$log = date('Y-m-d H:i:s') . " | Name: $name | Email: $email | Msg: $message\n";
file_put_contents('submissions.log', $log, FILE_APPEND);

// Redirect to thank you page
header('Location: thankyou.html');
exit();
?>