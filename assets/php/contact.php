<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    // Validate form data (optional)
    if (!empty($name) && !empty($email) && !empty($phone) && !empty($message)) {
        // Send email
        $to = "efecan_kara@tuta.io"; // Replace with your email address
        $subject = "New Contact Form Submission";
        $body = "Name: $name\nEmail: $email\nPhone: $phone\nMessage: $message";
        $headers = "From: $email";

        if (mail($to, $subject, $body, $headers)) {
            echo "Message sent successfully!";
        } else {
            echo "Failed to send message.";
        }
    } else {
        echo "All fields are required.";
    }
} else {
    echo "Invalid request.";
}
?>
