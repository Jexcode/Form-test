<?php
  // Fetch form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  // Retrieve other form input fields

  // Email details
  $to = array('bialakayode@gmail.com', 'bialajosepholukayode@gmail.com', 'josephbiala@gmail.com');
  $subject = 'Form Submission';
  $message = "Name: $name\nEmail: $email\n"; // Include other form data in the message

  // Send emails to the multiple addresses
  foreach ($to as $recipient) {
    mail($recipient, $subject, $message);
  }

  // Redirect the user to a thank you page
  header('Location:thank_you.html');
  exit();
?>
