<?php
  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'coldpresident@gmail.com';

  // Check if form data is submitted
  if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Validate inputs
    if (!empty($name) && !empty($email) && !empty($subject) && !empty($message) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
      // Email headers
      $headers = "From: " . $name . " <" . $email . ">\r\n";
      $headers .= "Reply-To: " . $email . "\r\n";
      $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

      // Email body
      $email_body = "<h2>New Contact Message</h2>";
      $email_body .= "<p><strong>Name:</strong> $name</p>";
      $email_body .= "<p><strong>Email:</strong> $email</p>";
      $email_body .= "<p><strong>Subject:</strong> $subject</p>";
      $email_body .= "<p><strong>Message:</strong><br>$message</p>";

      // Send email
      if(mail($receiving_email_address, $subject, $email_body, $headers)) {
        echo "Your message has been sent. Thank you!";
      } else {
        echo "Error: Message could not be sent.";
      }
    } else {
      echo "Error: Invalid form data. Please check your inputs.";
    }
  } else {
    echo "Error: No form data submitted.";
  }
?>
