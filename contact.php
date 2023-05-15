<?php

// Check if the form has been submitted
if (isset($_POST['submit'])) {

  // Get the form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $service = array('Digital Marketing', 'Website Development', 'Mobile App Development', 'Outdoor Advertisement', 'Market and Product Activation', 'Cinema Advertisement', 'Printing Service', 'Music Promotion', 'Other');

  // Sanitize the email address
  $email = filter_var($email, FILTER_SANITIZE_EMAIL);

  // Validate the email address
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email address";
    exit;
  }

  // Create the email message
  $subject = "Contact Form Submission";
  $message = "
    Name: $name
    Email: $email
    Message: $message
    Service: $service
  ";

  // Send the email
  mail("ajibola@hermesmedia.ng, $subject, $message);

  // Redirect the user to a thank you page
  header("Location: thank-you.php");

}

?>
