<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $phone = $_POST["phone number"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    $to = "info@dynamicstructure.in"; // Your email address
    $subject = "New contact form submission from $name";
    
    $messageBody = "Name: $name\n";
    $messageBody .= "Phone Number: $phone\n";
    $messageBody .= "Email: $email\n";
    $messageBody .= "Message:\n$message";
    
    $headers = "From: $email";
    
    // Send the email
    if (mail($to, $subject, $messageBody, $headers)) {
        echo "Thank you for your submission. We will contact you shortly.";
    } else {
        echo "Sorry, there was an error sending your message. Please try again later.";
    }
}
?>
Make sure to configure your server to send emails correctly. The code above handles the form submission, constructs an email, and sends it to the specified email address when the user submits the form. You can customize the email subject, content, and validation as needed.

Remember that this is a basic example, and in a real-world application, you would want to add more validation, error handling, and possibly use a dedicated library or service for sending emails securely. Additionally, consider using a CAPTCHA or other spam prevention techniques to protect your form from abuse.





